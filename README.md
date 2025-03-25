# Kalissima WordPress Theme

**Kalissima** is a custom WordPress theme tailored for bloggers and content creators. Built with flexibility and ease of use in mind, this theme includes various template parts and features to enhance your website's functionality and appearance.

## Table of Contents
- [Features](#features)
- [File Structure](#file-structure)
- [Installation](#installation)
- [Customization](#customization)
- [SEO and Accessibility Enhancements](#seo-and-accessibility-enhancements)
- [Enhancements to Consider](#enhancements-to-consider)
- [Contributing](#contributing)
- [License](#license)
- [Support](#support)

## Features
- Fully customizable with various template parts.
- Responsive design suitable for all devices.
- Integration with popular plugins (e.g., WSform for forms).
- SEO-friendly structure with pagination and customizable elements.
- Translation ready.

## File Structure

### Core Template Files
- **`index.php`**: Main template file.
- **`header.php`**: Contains the opening HTML, `<head>` section, and header content.
- **`footer.php`**: Contains the footer content and closing tags.
- **`sidebar.php`**: Optional sidebar file for widgets.
- **`404.php`**: Template for 404 error pages.
- **`archive.php`**: Template for displaying post archives (categories, tags, dates).
- **`single.php`**: Template for displaying single posts.
- **`page.php`**: Template for displaying static pages.
- **`home.php`**: Template for the blog posts index.
- **`front-page.php`**: Template for the site's front page.
- **`comments.php`**: Template for the comments section.
- **`search.php`**: Template for search results.

### Template Parts
- **`template-parts/content/content.php`**: Main content template for posts/pages.
- **`template-parts/content/content-single.php`**: Template for displaying single post content.
- **`template-parts/content/content-preview.php`**: Template for post previews (used in archives).
- **`template-parts/content/content-sticky-posts.php`**: For displaying sticky posts.
- **`template-parts/page/content-page.php`**: Content for static pages.
- **`template-parts/page/content-post.php`**: Content for single post display.
- **`template-parts/post/content-all-posts.php`**: Specific content layout for home.
- **`template-parts/footer/newsletter-form.php`**: WSforms newsletter signup integration - customizable.
- **`template-parts/footer/search-form.php`**: Footer search form if WSforms newsletter is disabled - customizable.
- **`template-parts/footer/sidebar-footer.php`**: Hardcoded footer menu & newsletter signup/search bar - customizable.

### Template Pages
- **`theme-templates/page-contact.php`**: Template for displaying a contact page with WSform integration - customizable in the Customizer.
- **`theme-templates/page-home.php`**: Template for displaying the front page.

### Functions and Features
- **`functions.php`**: Main theme functions file where you can enqueue scripts/styles, register menus, add theme support, etc.
  - **Custom Navigation**: Use `wp_nav_menu()` to create a custom navigation menu (2 menus: header and footer, customizable).
  - **Custom Logo Support**: Add support for custom logos.
  - **Post Thumbnails Support**: Enable featured images for posts.
  - **Custom Widget Areas**: Define footer widget areas, customizable.
  - **Enqueue Scripts and Styles**: Properly enqueue your stylesheets and scripts.

### Assets
- **`style.css`**: Main stylesheet for your theme, including theme details in the header comment.
- **`assets/js/`**: Any JavaScript files for interactivity (e.g., mobile menu).
- **`assets/fonts/`**: Fonts used in your theme.
- **`assets/images/`**: Any images used (e.g., logo, header image).

## Installation
1. Download the theme files and upload them to your WordPress installation under `wp-content/themes/kalissima`.
2. Activate the theme through the **Appearance > Themes** menu in WordPress.
3. For the theme to have its full functionality (including the contact and newsletter forms), it is necessary to install the **WSform** plugin. 
   - Create both the contact and newsletter forms or use the provided templates.
   - Reference the IDs of the forms in the Customizer (`Appearance` > `Customize` > `WSform Integration`).

## Customization
- Customize the theme through the WordPress Customizer (`Appearance` > `Customize`):
  - Logo image.
  - WSform integration (newsletter/search bar in footer on/off).
  - Contact page form.
  - Menus: header & footer.

## SEO and Accessibility Enhancements
- Pagination: Customize pagination links for better navigation.
- Customizer Options: Add options for users to customize colors, fonts, and other styles through the WordPress Customizer.

## Contributing
Feel free to fork this repository and submit pull requests. If you find any issues, please open a ticket in the issues section.

## License
This theme is licensed under the [GPL-2.0 License](LICENSE).

## Support
For any support requests, please contact [karocreativedesigns@gmail.com](mailto:karocreativedesigns@gmail.com).

Enjoy creating with the Kalissima WordPress Theme!