# AI Website Generator

This application lets users generate complete websites from text descriptions using OpenAI's API. The generated websites include HTML, CSS, JavaScript, and PHP files, with responsive design and modern UI/UX.

## Features

- Generate dynamic websites from simple text descriptions
- Responsive and mobile-friendly design
- Modern UI/UX with animations
- Complete with Home, About, Services, and Contact pages
- Working contact form that saves messages to text files
- No database required - uses file-based storage
- Voice input support (in compatible browsers)
- Downloads as a ready-to-use ZIP file

## Requirements

- PHP 7.4+ with cURL extension enabled
- Web server (Apache, Nginx, etc.)
- OpenAI API key

## Setup

1. Clone or download this repository to your web server directory
2. Make sure the `generated` directory is writable by the web server:
   ```
   chmod -R 755 generated/
   ```
3. Access the application through your web server (e.g., http://localhost/ai-website-generator/)

## How to Use

1. Enter a description of the website you want to create
   - Example: "A professional photography studio offering portrait sessions, wedding photography, and commercial services"
2. Enter your OpenAI API key in the advanced settings section
3. Click "Build" and wait for the website to be generated
4. Once completed, you can download the ZIP file containing all website files
5. Extract the ZIP file to your web server to start using the website

## Generated Website Structure

Each generated website includes:

- `index.php` - Home page
- `about.php` - About page
- `services.php` - Services page
- `contact.php` - Contact page
- `css/style.css` - CSS styles
- `js/main.js` - JavaScript functionality
- `includes/` - Reusable PHP components
  - `header.php`
  - `footer.php`
  - `process_contact.php` - Handles contact form submissions

## Notes

- The application requires an OpenAI API key to function
- Generation may take 30-60 seconds depending on the complexity of the request
- Generated websites work immediately after extraction, no additional setup required
- Contact forms save submissions to text files in a `messages` directory

## Troubleshooting

- If you encounter errors, check that your OpenAI API key is valid
- Ensure that PHP has permission to create and write to the `generated` directory
- For large website descriptions, the OpenAI API may return incomplete responses

## License

This project is available under the MIT License. 