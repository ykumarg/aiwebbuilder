document.addEventListener('DOMContentLoaded', () => {
    // DOM elements
    const form = document.getElementById('generator-form');
    const descriptionInput = document.getElementById('website-description');
    const geminiKeyInput = document.getElementById('gemini-key');
    const voiceButton = document.getElementById('voice-input');
    const buildButton = document.getElementById('build-button');
    const loadingSection = document.getElementById('loading');
    const resultSection = document.getElementById('result');
    const downloadLink = document.getElementById('download-link');
    const previewIframe = document.getElementById('preview-iframe');
    // Voice input functionality
    if ('webkitSpeechRecognition' in window || 'SpeechRecognition' in window) {
        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        const recognition = new SpeechRecognition();
        recognition.continuous = false;
        recognition.lang = 'en-US';
        
        recognition.onresult = (event) => {
            const transcript = event.results[0][0].transcript;
            descriptionInput.value = transcript;
        };
        
        voiceButton.addEventListener('click', () => {
            if (descriptionInput.value) {
                if (confirm('Do you want to replace the current text with voice input?')) {
                    recognition.start();
                }
            } else {
                recognition.start();
            }
        });
    } else {
        voiceButton.style.display = 'none';
    }
    
    // Form submission
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const description = descriptionInput.value.trim();
        const geminiKey = geminiKeyInput.value.trim();
        
        if (!description) {
            showAlert('Please provide a website description.', 'error');
            return;
        }
        
        if (!geminiKey) {
            showAlert('Please provide your Gemini API key.', 'error');
            return;
        }
        
        if (!geminiKey.startsWith('AI')) {
            showAlert('Invalid Gemini API key format. Get your key from Google AI Studio.', 'error');
            return;
        }
        
        try {
            // Show loading state
            form.classList.add('hidden');
            loadingSection.classList.remove('hidden');
            
            // Send request to backend
            await generateWebsite(description, geminiKey);
        } catch (error) {
            console.error('Form submission error:', error);
            showAlert('Error: ' + (error.message || 'Failed to generate website'), 'error');
            loadingSection.classList.add('hidden');
            form.classList.remove('hidden');
        }
    });
    
    // Function to generate website
    async function generateWebsite(description, apiKey) {
        try {
            console.log('Sending request with description:', description);
            
            // Send request to backend
            const response = await axios.post('generate.php', {
                description: description,
                geminiKey: apiKey
            });
            
            console.log('Server response:', response);
            
            if (!response.data) {
                throw new Error('No response data received');
            }
            
            if (!response.data.success) {
                throw new Error(response.data.error || 'Server returned an error');
            }
            
            // Set download link
            const zipFile = response.data.zipFile;
            if (!zipFile) {
                throw new Error('No zip file in response');
            }
            
            downloadLink.href = `generated/${zipFile}`;
            console.log('Download link set to:', downloadLink.href);
            
            // Set preview URL and iframe
            const previewLink = document.getElementById('preview-link');
            const previewUrl = response.data.previewUrl;
            
            if (!previewUrl) {
                throw new Error('No preview URL in response');
            }
            
            console.log('Setting up preview with URL:', previewUrl);
            
            // Update preview link
            previewLink.href = previewUrl;
            previewLink.textContent = 'View Generated Website';
            
            // Show preview URL
            const urlDisplay = document.createElement('div');
            urlDisplay.className = 'preview-url';
            urlDisplay.textContent = previewUrl;
            previewLink.parentNode.insertBefore(urlDisplay, previewLink.nextSibling);
            
            // Update iframe
            previewIframe.src = previewUrl;
            previewIframe.style.display = 'block';
            console.log('Preview iframe updated');
            
            // Show result section
            loadingSection.classList.add('hidden');
            resultSection.classList.remove('hidden');
            console.log('Generation completed successfully');
        } catch (error) {
            console.error('Error generating website:', error);
            console.error('Error details:', error.response?.data || 'No response data'); // Debug log
            
            const errorMessage = error.response?.data?.error || error.message || 'Failed to generate website';
            showAlert(`Error: ${errorMessage}`, 'error');
            
            // Return to form
            loadingSection.classList.add('hidden');
            form.classList.remove('hidden');
        }
    }
    
    // Reset button
    document.addEventListener('click', (e) => {
        if (e.target && e.target.id === 'reset-button') {
            resultSection.classList.add('hidden');
            form.classList.remove('hidden');
            form.reset();
        }
    });
    
    // Show alert messages
    function showAlert(message, type = 'info') {
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert ${type}`;
        alertDiv.textContent = message;
        
        const container = document.querySelector('.container');
        container.insertBefore(alertDiv, container.firstChild);
        
        setTimeout(() => {
            alertDiv.remove();
        }, 5000);
    }
}); 