<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Website Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body class="bg-light">
     
    <div class="container py-5">
        <header class="text-center mb-5">
            <h1 class="display-4 mb-3">Create Your Website with AI</h1>
            <p class="lead text-muted">Transform your ideas into a beautiful website in minutes using artificial intelligence.</p>
        </header>
        
        <main>
            <form id="generator-form" class="bg-white rounded-3 shadow-sm p-4 mb-4">
                <div class="form-group mb-4">
                    <label class="form-label">Describe Your Website</label>
                    <div class="input-group">
                        <textarea id="website-description" class="form-control" rows="4" placeholder="e.g. I want to create a modern e-commerce website to sell handmade jewelry. Include a gallery section and customer testimonials." required></textarea>
                        <button type="button" id="voice-input" class="btn btn-outline-primary" aria-label="Voice input">
                            <i class="fas fa-microphone"></i>
                        </button>
                    </div>
                </div>
                
                <div class="settings-section bg-light p-3 rounded mb-4">
                    <h3 class="h5 mb-3"><i class="fas fa-cog me-2"></i>API Settings</h3>
                    <div class="setting-group">
                        <label for="gemini-key" class="form-label">Gemini API Key</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" id="gemini-key" class="form-control" placeholder="Enter your Gemini API key">
                        </div>
                        <small class="text-muted">Get your API key from <a href="https://makersuite.google.com/app/apikey" target="_blank" class="text-decoration-none">Google AI Studio <i class="fas fa-external-link-alt fa-xs"></i></a></small>
                    </div>
                </div>
                
                <button type="submit" id="build-button" class="btn btn-primary btn-lg w-100">
                    <i class="fas fa-wand-magic-sparkles me-2"></i>Generate Website
                </button>
            </form>
            

            
            <div id="loading" class="text-center py-5 hidden">
                <div class="spinner-border text-primary mb-3" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="lead text-muted">Creating your website magic... This may take a minute.</p>
            </div>
            
            <div id="result" class="hidden">
                <div class="text-center mb-4">
                    <div class="display-1 text-success mb-3"><i class="fas fa-check-circle"></i></div>
                    <h2 class="display-6 mb-3">Your Website is Ready!</h2>
                </div>

                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-download fa-2x text-primary mb-3"></i>
                                <h3 class="h5">Download Files</h3>
                                <p class="text-muted mb-3">Get your complete website files</p>
                                <a id="download-link" class="btn btn-primary" href="#" download>
                                    <i class="fas fa-file-archive me-2"></i>Download ZIP
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-globe fa-2x text-primary mb-3"></i>
                                <h3 class="h5">View Online</h3>
                                <p class="text-muted mb-3">See your website in action</p>
                                <a id="preview-link" href="#" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-external-link-alt me-2"></i>Open Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header bg-light">
                        <h3 class="h5 mb-0"><i class="fas fa-desktop me-2"></i>Live Preview</h3>
                    </div>
                    <div class="card-body p-0">
                        <iframe id="preview-iframe" title="Website Preview" class="w-100 border-0" style="height: 600px;"></iframe>
                    </div>
                </div>

                <div class="text-center">
                    <button id="reset-button" class="btn btn-outline-primary">
                        <i class="fas fa-plus me-2"></i>Create Another Website
                    </button>
                </div>
            </div>
        </main>
        
        <footer class="text-center py-4 mt-5 border-top">
            <p class="text-muted mb-0">&copy; <?php echo date('Y'); ?> AI Website Generator. All rights reserved.</p>
        </footer>
    </div>

    <script src="js/main.js"></script>
</body>
</html> 