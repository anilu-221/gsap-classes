# gsap-classes
GSAP Classes Custom Plugin

## Development Notes

#### LARAVEL MIX
The theme utilizes [Laravel Mix](https://laravel-mix.com/) to compile SASS and JS files.

#### SASS AND JS FILES

To modify the JS or SASS files make sure that you have [Node.js](https://nodejs.org) installed and then run `npm install` from the `wp-content/plugin/gsap-classes` folder. 
Afterwards you can modify the following files `src/modules` `src/sass` `src/app.js` and `src/app.scss`. 
Run `npx mix` after every modification to update the `dist`. folder. 
You can also run `npx mix watch` while you're working on those files, everytime you update one of these files `src/modules` `src/sass` `src/app.js` `src/app.scss`, they will be automatically compiled.

# Please do _not_ modify files under the `dist` folder as they are generated automatically everytime `npx mix` is run.
    # Scripts  
    Scripts and styles are registered/enqueued on the `inc\class-asc-scripts.php` file.

### Deploying Chanages
With each live push make sure that you bump up the theme's version in `gsap-classes.php`, both on the comment of the file and on GSC_PLUGIN_VERSION. This will speed up cache purging.
