<?php

return [
    'key' => SKAPA_PAGE_MODULES_PREFIX . 'test_module',
    'label' => __('Test Module', 'skapa'),
    'name' => 'test_module',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_page_modules_test_module_text',
            'label' => __('Text', 'skapa'),
            'name' => 'text',
            'type' => 'text',
            'instructions' => __('Enter some text.', 'skapa'),
            'required' => 0,
        ]
    ]
];
