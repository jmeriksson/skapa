# SKAPA
A starter theme for WordPress sites, with Advanced Custom Fields and Tailwind CSS.

## Required WordPress plugins
* [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/)
* [Classic Editor](https://wordpress.org/plugins/classic-editor/)

## Working with this theme
This theme has not been officially published as it is meant to serve as a boilerplate for building custom WordPress themes. In order to work with this theme you need to fo the following.

### Prerequisites
* You need to have `node` and `npm` installed on your local machine.
* You need a working WordPress installation on your local machine.

### Local installation
1. Clone this repository and place it in the theme directory of a WordPress site on your local machine.
2. Open a terminal and navigate into the root directory of this theme.
3. Run `npm install`.
4. Run `npm start`.
5. Activate the Skapa theme from your WordPress administration area.

### Setting up the theme
* The theme is built with a static homepage in mind, so you should create a page and set it as the homepage in Settings > Reading.
* You should create a menu by going to Appearance > Menus, and give it the "Primary menu" location.
* All settings that are global and related to the theme are located in Theme Settings.

## Adding a new page module
Modules are the building blocks for pages in the Skapa theme. Create a new module by following these steps.

1. Create a new file in the `includes/fields/modules/` directory. The file name should be the module name in _kebab-case_ and it must be unique. If you want to build a module called "Simple Headline", the file name should be `simple-headline.php`.
2. The newly created file should return the ACF fields needed for the module. For example, we could return this:
```php
// simple-headline.php
<?php

return [
    'key' => SKAPA_PAGE_MODULES_PREFIX . 'simple_headline',
    'label' => __('Simple Headline', 'skapa'),
    'name' => 'simple_headline',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'simple_headline_content',
            'label' => __('Content', 'skapa'),
            'name' => 'content',
            'type' => 'text',
            'instructions' => __('Enter the content of the headline.', 'skapa'),
        ]
    ]
];
```

_Note that the `SKAPA_PAGE_MODULES_PREFIX` constant takes care of adding the correct prefix to the keys._

3. Create a new file in the `templates/modules/` directory. The file should have the same name as the file containing the ACF fields for the module.
4. All data from the ACF fields are passed to this file in an array called `$args`, so start by getting the data from this array and storing them in local variables:
```php
// simple-headline.php
<?php

$content = $args['content'] ?? null;
```
5. Next, build out the structure of the module using the data you have collected. For example:
```php
// simple-headline.php
<?php

$content = $args['content'] ?? null;

?>
<div class="container">
    <?php if ($content) : ?>
        <h1><?php echo esc_html($content); ?></h1>
    <?php endif; ?>
</div>
```
6. Your new module can now be added to a page! :tada: 
