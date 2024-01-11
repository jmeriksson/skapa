# SKAPA

A starter theme for WordPress sites. Built using ACF layouts which creates modules that pages are built from.

## Required WordPress plugins

* [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/)
* [Classic Editor](https://wordpress.org/plugins/classic-editor/)

## Adding a new page module

Modules are the building blocks for pages in the Skapa theme. Create a new module by following these steps.

1. Create a new file in the `includes/fields/modules/` directory. The file name should be the module name in _kebab-case_ and it must be unique. If you want to build module called "Simple Headline", the file name should be `simple-headline.php`.
2. The newly created file should return the ACF fields needed for the module. For example, we could return this:
```php
// simple-headline.php

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
