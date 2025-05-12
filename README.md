# Dynamic Shortcodes Plugin

![WordPress Plugin Version](https://img.shields.io/badge/Version-1.0-blue.svg) 
![License](https://img.shields.io/badge/License-GPLv2+-green.svg)

A flexible WordPress plugin that handles unlimited dynamic shortcodes in the format `[dynamic_shortcode_X]` where X can be any positive integer.

## Features

- **Unlimited Shortcodes** - Supports any number (1, 5, 1000, etc.)
- **Automatic Conversion** - Transforms numbered shortcodes to parameterized versions
- **Secure Output** - Built-in sanitization and escaping
- **Clean Architecture** - Separated frontend/backend logic
- **Easy Styling** - CSS-ready class structure

## Installation

1. Download the plugin as a ZIP file
2. Go to WordPress Admin → Plugins → Add New → Upload Plugin
3. Activate the plugin through the 'Plugins' menu

**Manual Installation:**
1. Upload the `dynamic-shortcodes` folder to `/wp-content/plugins/`
2. Activate the plugin through the WordPress admin

## Usage

### Basic Shortcodes
```html
[dynamic_shortcode_1]   <!-- Output: "This is the content from the shortcode 1" -->
[dynamic_shortcode_5]   <!-- Output: "This is the content from the shortcode 5" -->
[dynamic_shortcode_42]  <!-- Output: "This is the content from the shortcode 42" -->
```

### How It Works
The plugin automatically converts:
```
[dynamic_shortcode_X] → [dynamic_shortcode id="X"]
```
Where X is your desired number.

## Customization

### Styling
Add CSS to your theme's stylesheet:
```css
.dynamic-shortcode {
    padding: 15px;
    margin: 10px 0;
    border-left: 3px solid #0073aa;
    background: #f3f6f8;
}
```

### Modifying Output
Edit `includes/frontend.php` to change the output template:
```php
return sprintf(
    '<div class="dynamic-shortcode custom-class">Content for shortcode: <strong>%s</strong></div>',
    esc_html($atts['id'])
);
```

## Development

### File Structure
```
/dynamic-shortcodes/
├── dynamic-shortcodes.php    # Main plugin file
├── includes/
│   ├── frontend.php          # Presentation logic
│   └── backend.php           # Processing logic
├── readme.md                 # This file
```

### Requirements
- WordPress 5.0+
- PHP 7.4+

## Support

Please [open an issue](https://github.com/yourusername/dynamic-shortcodes/issues) for:
- Bug reports
- Feature requests
- Security concerns

## License

This plugin is licensed under [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html).

---

**Contributions welcome!**  
🔧 Feel free to fork and submit pull requests.
