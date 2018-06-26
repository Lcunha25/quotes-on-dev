![](project-05/background-picture.png)
# Quotes on Dev Starter

A WordPress starter theme for the Quotes on Dev project, forked from Underscores.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content/themes` directory.

### 2. Rename the `quotesondev-starter-master` directory

Make sure that the theme directory name is project appropriate! Do you need `starter` or `master` in the directory name?

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** to install the npm packages you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

And now would be a good time to `git init` :)

# Quotes on Dev
### The website is built with Wordpress, MySql, PHP, SCSS, CSS, HTML, Gulp and Javascript (Jquery).

# Loops
### The website is responsive to changes on the MySql database updates. The loops used on the shop, journal and blogpost tags will automatically catch updates made and fetch them to the page. Multiple loops have been used for specific porpuses.

# Fonts
### This project is done by downoloading the founts we are using from google founts and appending it to the project using font-face.

# Structure main files:
    index.html
    style.min.css - min file of multiple sass archives
    main.min.js - min file of main.js
    enqueu.php - file enqueuing important scripts.
    loop-jornal - File controling the loops on the page. Imported on specific php files to use the loop.

# License
This project is licensed under the MIT License
