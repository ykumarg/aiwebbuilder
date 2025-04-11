<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Enable error logging
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/error.log');

// Allow larger response from OpenAI
ini_set('memory_limit', '256M');

// Ensure generated directory exists
$generatedDir = __DIR__ . '/generated';
if (!is_dir($generatedDir)) {
    mkdir($generatedDir, 0755, true);
}

// ========== Helper: Validate Gemini API key ==========
function isValidApiKey($key) {
    return !empty($key) && strlen($key) > 20;
}

// ========== Main Process ==========

// Log the raw input
error_log('Raw input: ' . file_get_contents('php://input'));

// Get input data
$data = json_decode(file_get_contents('php://input'), true);
error_log('Decoded data: ' . print_r($data, true));
if (!$data || !isset($data['description']) || !isset($data['geminiKey'])) {
    echo json_encode(['success' => false, 'error' => 'Invalid input data']);
    exit;
}

$description = trim($data['description']);
$apiKey = trim($data['geminiKey']);

    // Validate input
    if (empty($description)) {
        throw new Exception('Website description is required');
    }
    if (!isValidApiKey($apiKey)) {
        throw new Exception('Valid Gemini API key is required');
    }

// ========== Directory Setup ==========
// Clean up old generated files (older than 24 hours)
$generatedDir = __DIR__ . '/generated';
if (is_dir($generatedDir)) {
    $files = glob($generatedDir . '/*');
    foreach ($files as $file) {
        if (is_file($file) && time() - filemtime($file) > 86400) {
            @unlink($file);
        } elseif (is_dir($file) && time() - filemtime($file) > 86400) {
            @array_map('unlink', glob("$file/*.*"));
            @rmdir($file);
        }
    }
}

$generationId = uniqid('website_', true);
$outputDir = __DIR__ . "/generated/{$generationId}";

if (!mkdir($outputDir, 0755, true)) {
    throw new Exception('Failed to create output directory');
}

// ========== Prompt ==========
$prompt = <<<EOT
You are a professional web developer. Create a single-page responsive website for this business:

{$description}

Requirements:
1. Modern and professional design
2. Mobile-responsive layout
3. Clean and intuitive navigation
4. Contact form
5. SEO-friendly structure

IMPORTANT: Return ONLY the complete HTML for a single page. Include:
- All HTML structure
- CSS styles in a <style> tag
- JavaScript in a <script> tag
- Meta tags for SEO
- Navigation menu
- Sections for: Home, About, Services, Contact
- A working contact form
- Modern, responsive design

Do not include any text outside the HTML. The response should start with <!DOCTYPE html> and contain a complete, working webpage.
EOT;

// ========== Generate Website ==========

// ========== Call OpenAI ==========
try {
    // Validate input data
    if (empty($description) || strlen($description) < 10) {
        throw new Exception('Please provide a detailed website description (at least 10 characters)');
    }
    if (!isValidApiKey($apiKey)) {
        throw new Exception('Invalid Gemini API key');
    }

    // Call Gemini API
    $response = callGeminiApi($apiKey, $prompt);
    if (empty($response)) {
        throw new Exception('Empty response from Gemini API');
    }

    // Extract and validate files
    $files = extractWebsiteFiles($response);
    if (empty($files)) {
        throw new Exception('No files were generated');
    }

    // Write files
    writeFiles($files, $outputDir);

    // Create zip
    $zipPath = createZip($outputDir, "{$outputDir}.zip");
    if (!file_exists($zipPath)) {
        throw new Exception('Failed to create zip file');
    }

    // Return success response
    $response = [
        'success' => true,
        'zipUrl' => str_replace(__DIR__ . '/', '', $zipPath),
        'previewUrl' => str_replace(__DIR__ . '/', '', "{$outputDir}/index.php"),
        'message' => 'Website generated successfully'
    ];
    
    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
    
} catch (Exception $e) {
    // Log error for debugging
    error_log('Website generation error: ' . $e->getMessage());
    
    // Return error response
    $response = [
        'success' => false,
        'error' => $e->getMessage(),
        'errorDetails' => [
            'message' => $e->getMessage(),
            'file' => basename($e->getFile()),
            'line' => $e->getLine()
        ]
    ];
    
    header('Content-Type: application/json');
    http_response_code(400); // Set appropriate error status code
    echo json_encode($response, JSON_PRETTY_PRINT);
}

// ========== Functions ==========

function callGeminiApi($apiKey, $prompt) {
    error_log('Calling Gemini API...');
    
    $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . $apiKey;
    $headers = ['Content-Type: application/json'];
    error_log('Using API URL: ' . $url);
    
    // Prepare the enhanced prompt
    $enhancedPrompt = "Generate a clean, simple, and attractive website with these specifications:\n\n"
        . "1. Base Content: {$prompt}\n\n"
        . "2. Design Requirements:\n"
        . "   - Clean and minimal design\n"
        . "   - Light color scheme with blue accent color\n"
        . "   - Simple animations and transitions\n"
        . "   - Clear typography using Google Fonts\n"
        . "   - Consistent spacing and alignment\n"
        . "   - Professional-looking placeholder images\n\n"
        . "3. Required Sections:\n"
        . "   Header/Navigation:\n"
        . "   - Simple fixed navigation\n"
        . "   - Clean logo area\n"
        . "   - Responsive menu for mobile\n\n"
        . "   Hero Section:\n"
        . "   - Large banner image\n"
        . "   - Clear headline and subtext\n"
        . "   - Simple call-to-action button\n\n"
        . "   Main Features:\n"
        . "   - Clean card layout\n"
        . "   - Simple icons\n"
        . "   - Brief descriptions\n\n"
        . "   About/Services:\n"
        . "   - Two-column layout\n"
        . "   - Image and text sections\n"
        . "   - Simple bullet points\n\n"
        . "   Contact Form:\n"
        . "   - Clean form layout\n"
        . "   - Simple input styling\n"
        . "   - Basic validation\n\n"
        . "4. Technical Requirements:\n"
        . "   - Bootstrap 5 for layout\n"
        . "   - Simple CSS animations\n"
        . "   - Font Awesome icons\n"
        . "   - Mobile-first design\n"
        . "   - Fast loading speed\n\n"
        . "5. CSS Guidelines:\n"
        . "   - Simple color variables\n"
        . "   - Basic animations\n"
        . "   - Clean spacing\n"
        . "   - Consistent margins\n"
        . "   - Readable font sizes\n"
        . "   - Include AOS (Animate On Scroll) library for animations\n"
        . "6. Structure:\n"
        . "   - Single index.html file\n"
        . "   - Embedded CSS with proper organization (variables, components, etc.)\n"
        . "   - Embedded JavaScript with smooth scroll and animations\n"
        . "   - All external resources loaded from CDNs\n"
        . "Generate a visually stunning website that looks premium and professional.";

    // Prepare request data
    $requestData = [
        'contents' => [
            [
                'parts' => [
                    [
                        'text' => $enhancedPrompt
                    ]
                ]
            ]
        ]
    ];
    
    $postData = json_encode($requestData);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Failed to encode request data: ' . json_last_error_msg());
    }
    
    error_log('Request data: ' . substr($postData, 0, 500) . '...');
    
    // Initialize CURL
    $ch = curl_init($url);
    if ($ch === false) {
        throw new Exception('Failed to initialize CURL');
    }
    
    // Set CURL options
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_TIMEOUT => 60,  // Increased timeout
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_VERBOSE => true
    ]);
    
    // Execute request
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlInfo = curl_getinfo($ch);
    
    error_log('CURL Info: ' . json_encode($curlInfo));
    
    if ($response === false) {
        $error = curl_error($ch);
        curl_close($ch);
        error_log('CURL Error: ' . $error);
        throw new Exception('CURL error: ' . $error);
    }
    
    curl_close($ch);
    
    error_log('API Response Code: ' . $httpCode);
    error_log('API Response: ' . substr($response, 0, 500) . '...');
    
    if ($httpCode !== 200) {
        $decoded = json_decode($response, true);
        $errorMessage = 'Gemini API error';
        if (isset($decoded['error'])) {
            $errorMessage .= ': ' . ($decoded['error']['message'] ?? 'Unknown error');
            if (isset($decoded['error']['status'])) {
                $errorMessage .= ' (Status: ' . $decoded['error']['status'] . ')';
            }
        } else {
            $errorMessage .= ': Unexpected HTTP code ' . $httpCode;
        }
        error_log('API Error: ' . $errorMessage);
        error_log('Full response: ' . $response);
        throw new Exception($errorMessage);
    }
    
    // Validate response format
    $decoded = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log('JSON Decode Error: ' . json_last_error_msg());
        error_log('Raw Response: ' . $response);
        throw new Exception('Failed to decode API response: ' . json_last_error_msg());
    }
    
    // Debug log the full response structure
    error_log('Full Gemini response structure: ' . json_encode($decoded, JSON_PRETTY_PRINT));
    
    // Validate response structure step by step
    if (!isset($decoded['candidates']) || !is_array($decoded['candidates']) || empty($decoded['candidates'])) {
        error_log('No candidates in response');
        throw new Exception('No response candidates from Gemini API');
    }
    
    if (!isset($decoded['candidates'][0]['content'])) {
        error_log('No content in first candidate');
        throw new Exception('Invalid response structure: no content');
    }
    
    if (!isset($decoded['candidates'][0]['content']['parts']) || !is_array($decoded['candidates'][0]['content']['parts'])) {
        error_log('No parts array in content');
        throw new Exception('Invalid response structure: no parts array');
    }
    
    if (!isset($decoded['candidates'][0]['content']['parts'][0]['text'])) {
        error_log('No text in first part');
        throw new Exception('Invalid response structure: no text content');
    }
    
    $content = $decoded['candidates'][0]['content']['parts'][0]['text'];
    error_log('Extracted content: ' . substr($content, 0, 1000));
    
    // Try to parse as JSON to validate
    $testJson = json_decode($content, true);
    if (json_last_error() === JSON_ERROR_NONE) {
        error_log('Content is valid JSON');
    } else {
        error_log('Content is not valid JSON: ' . json_last_error_msg());
    }
    
    return $content;
}

function extractWebsiteFiles($apiResponse) {
    error_log('Processing API response...');
    error_log('API Response: ' . substr($apiResponse, 0, 1000));
    
    // Try multiple patterns to extract HTML
    $patterns = [
        '/```html([\s\S]*?)```/i',          // HTML in code blocks
        '/```([\s\S]*?)```/i',              // Any code block
        '/(<!DOCTYPE[^>]*>[\s\S]*<\/html>)/i', // Raw HTML with DOCTYPE
        '/(<html[^>]*>[\s\S]*<\/html>)/i'     // Raw HTML without DOCTYPE
    ];
    
    $htmlContent = null;
    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $apiResponse, $matches)) {
            $htmlContent = trim($matches[1]);
            error_log('Found HTML using pattern: ' . $pattern);
            break;
        }
    }
    
    if (!$htmlContent) {
        error_log('No HTML found in response. Using default template.');
        // Use a simple default template
        $htmlContent = <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hero-image {
            height: 400px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 1rem;
            margin-bottom: 2rem;
        }
        .feature-icon {
            width: 4rem;
            height: 4rem;
            border-radius: 0.75rem;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        .gallery-image {
            height: 250px;
            object-fit: cover;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Your Brand</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="py-5">
        <div class="container">
            <div class="hero-image" style="background-image: url('https://placehold.co/1200x400/007bff/white?text=Welcome');"></div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3">Welcome to Your Website</h1>
                    <p class="lead mb-4">A beautiful and modern website template with stunning visuals.</p>
                    <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://placehold.co/600x400/6f42c1/white?text=Feature" class="img-fluid rounded" alt="Feature Image">
                </div>
            </div>
        </div>
    </header>

    <section id="features" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Our Features</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-star fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5">Feature One</h3>
                        <p class="text-muted">A brief description of your first amazing feature.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-heart fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5">Feature Two</h3>
                        <p class="text-muted">A brief description of your second amazing feature.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-bolt fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5">Feature Three</h3>
                        <p class="text-muted">A brief description of your third amazing feature.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Image Gallery</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="https://placehold.co/400x300/20c997/white?text=Gallery+1" class="gallery-image w-100" alt="Gallery 1">
                </div>
                <div class="col-md-4">
                    <img src="https://placehold.co/400x300/fd7e14/white?text=Gallery+2" class="gallery-image w-100" alt="Gallery 2">
                </div>
                <div class="col-md-4">
                    <img src="https://placehold.co/400x300/dc3545/white?text=Gallery+3" class="gallery-image w-100" alt="Gallery 3">
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="text-center mb-4">Contact Us</h2>
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-dark text-white">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 Your Website. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
HTML;
    }
    
    // Clean up the HTML content
    $htmlContent = preg_replace('/```html|```/i', '', $htmlContent);
    $htmlContent = preg_replace('/^.*?<!DOCTYPE/is', '<!DOCTYPE', $htmlContent);
    
    // Replace broken image URLs with high-quality placeholders
    $htmlContent = preg_replace_callback(
        '/src=["\']([^"\']*)["\']/i',
        function($match) {
            $url = $match[1];
            if (empty($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
                // Use random high-quality placeholder images
                $categories = ['business', 'people', 'technology', 'nature'];
                $category = $categories[array_rand($categories)];
                return 'src="https://source.unsplash.com/800x400/?' . $category . '"';
            }
            return $match[0];
        },
        $htmlContent
    );
    
    // Add basic image error handling
    $imageScript = "\n<script>\n"
        . "document.addEventListener('DOMContentLoaded', function() {\n"
        . "    document.querySelectorAll('img').forEach(img => {\n"
        . "        img.addEventListener('error', function() {\n"
        . "            this.src = 'https://placehold.co/800x400/007bff/white?text=Image';\n"
        . "        });\n"
        . "    });\n"
        . "});\n"
        . "</script>";

    // Add the script to head
    $htmlContent = str_replace('</head>', $imageScript . "\n</head>", $htmlContent);

    // Add form styling if there's a contact form
    if (strpos($htmlContent, '<form') !== false) {
        $formStyles = "\n<style>\n"
            . ".contact-form { max-width: 600px; margin: 2rem auto; padding: 2rem; background: #fff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }\n"
            . ".form-group { margin-bottom: 1.5rem; }\n"
            . ".form-group label { display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333; }\n"
            . ".form-group input, .form-group textarea { width: 100%; padding: 0.75rem; border: 2px solid #e1e1e1; border-radius: 4px; font-size: 1rem; transition: all 0.3s; }\n"
            . ".form-group input:focus, .form-group textarea:focus { outline: none; border-color: var(--primary-color, #007bff); box-shadow: 0 0 0 3px rgba(0,123,255,0.1); }\n"
            . ".contact-form button { width: 100%; padding: 1rem; background: var(--primary-color, #007bff); color: #fff; border: none; border-radius: 4px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s; }\n"
            . ".contact-form button:hover { transform: translateY(-2px); box-shadow: 0 4px 8px rgba(0,0,0,0.1); }\n"
            . "</style>";
        
        // Add form styles to head
        $htmlContent = str_replace('</head>', $formStyles . "\n</head>", $htmlContent);
        
        // Add form classes
        $htmlContent = preg_replace(
            '/<form([^>]*)>/',
            '<form$1 class="contact-form">',
            $htmlContent
        );
        
        // Add form-group class to form elements
        $htmlContent = preg_replace(
            '/(<div[^>]*>\s*<(?:input|textarea|select)[^>]*>\s*<\/div>)/',
            '<div class="form-group">$1</div>',
            $htmlContent
        );
    }
    
    // Create files array with just index.html
    $files = [
        [
            'name' => 'index.html',
            'content' => $htmlContent
        ]
    ];
    
    
    // Validate file structure
    if (!is_array($files) || empty($files)) {
        error_log('Invalid file structure: ' . json_encode($files));
        throw new Exception('Invalid or empty file structure received');
    }
    
    // Validate index.html exists and has content
    $hasIndexHtml = false;
    foreach ($files as $file) {
        if ($file['name'] === 'index.html') {
            $hasIndexHtml = true;
            if (empty($file['content'])) {
                error_log('Empty content in index.html');
                throw new Exception('Empty content in index.html');
            }
            break;
        }
    }
    
    if (!$hasIndexHtml) {
        error_log('Missing required file: index.html');
        throw new Exception('Missing required file: index.html');
    }
    
    error_log('Successfully validated all required files');
    return $files;
}

function writeFiles($files, $baseDir) {
    if (!is_dir($baseDir) && !mkdir($baseDir, 0755, true)) {
        throw new Exception('Failed to create base directory: ' . $baseDir);
    }

    foreach ($files as $file) {
        // Sanitize filename to prevent directory traversal
        $filename = str_replace(array('../', '..\\'), '', $file['name']);
        $path = $baseDir . '/' . $filename;
        $dir = dirname($path);
        if (!is_dir($dir) && !mkdir($dir, 0755, true)) {
            throw new Exception('Failed to create directory: ' . $dir);
        }

        if (file_put_contents($path, $file['content']) === false) {
            throw new Exception('Failed to write file: ' . $path);
        }

        // Ensure proper permissions
        chmod($path, 0644);
        error_log('Successfully wrote file: ' . $path);
    }
}

function createZip($sourceDir, $zipPath) {
    $zip = new ZipArchive();
    if ($zip->open($zipPath, ZipArchive::CREATE) !== true) {
        throw new Exception("Failed to create ZIP archive");
    }

    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($sourceDir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::LEAVES_ONLY
    );

    foreach ($files as $file) {
        if (!$file->isDir()) {
            $filePath = $file->getRealPath();
            $relativePath = substr($filePath, strlen($sourceDir) + 1);
            $zip->addFile($filePath, $relativePath);
        }
    }

    $zip->close();
    return $zipPath;
}

try {
    // Generate website
    $outputDir = 'output/' . uniqid();
    if (!mkdir($outputDir, 0755, true)) {
        throw new Exception('Failed to create output directory');
    }

    // Generate website using Gemini
    $response = callGeminiApi($apiKey, $prompt);
    $files = extractWebsiteFiles($response);

    // Write files
    writeFiles($files, $outputDir);

    // Create ZIP archive
    $zipFile = $outputDir . '.zip';
    createZip($outputDir, $zipFile);

        // Return success response with preview URL
    $previewUrl = 'http://localhost:8000/output/' . basename($outputDir) . '/index.html';
    error_log('Preview URL: ' . $previewUrl);
    
    $response = [
        'success' => true,
        'message' => 'Website generated successfully',
        'zipFile' => basename($zipFile),
        'previewUrl' => $previewUrl
    ];
    
    error_log('Response: ' . json_encode($response));
    
    // Clear any previous output
    if (ob_get_length()) ob_clean();
    
    // Set success status and headers
    http_response_code(200);
    header('Content-Type: application/json');
    header('Cache-Control: no-cache, must-revalidate');
    
    // Send response
    echo json_encode($response);
    exit;

} catch (Exception $e) {
    error_log('Error: ' . $e->getMessage());
    error_log('Stack trace: ' . $e->getTraceAsString());
    
    // Clear any previous output
    if (ob_get_length()) ob_clean();
    
    // Set appropriate status code based on error
    if (strpos($e->getMessage(), 'Invalid API key') !== false) {
        http_response_code(401); // Unauthorized
    } elseif (strpos($e->getMessage(), 'Missing required') !== false) {
        http_response_code(400); // Bad Request
    } elseif (strpos($e->getMessage(), 'Failed to create') !== false) {
        http_response_code(500); // Server Error
    } else {
        http_response_code(400); // Default to Bad Request
    }
    
    // Set headers
    header('Content-Type: application/json');
    header('Cache-Control: no-cache, must-revalidate');
    
    $errorResponse = [
        'success' => false,
        'error' => $e->getMessage(),
        'details' => 'Check server logs for more information'
    ];
    
    error_log('Error response: ' . json_encode($errorResponse));
    echo json_encode($errorResponse);
    exit;
}
?>
