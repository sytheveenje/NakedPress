# NakedPress

Very basic Wordpress theme to start a project.

# Detailed settings

- In **base.scss** you need to set the grid settings, your fonts and colors
- In **gulpfile.js** you need to change `proxy: 'localhost'` to your local domain. For example: `mylocalproject.dev`
- In **package.json** you can set your own namesettings

# Installation

You'll find a "your_theme_name" folder in the `wp-content/themes/` directory. Rename this folder and the themename in `wp-content/themes/your_theme_name/style.css` before installing the theme. 

Nakedpress is using [Taiga Grid](https://github.com/studiowolf/taiga-grid) + Gulp. To install simply clone this repo, go to the root folder of your theme and run `npm install`

# Changelog
- **7 okt 2016** - Implement Taiga + Gulp
- **23 feb 2016** - Set up project

Have fun!