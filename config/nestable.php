<?php

return [
    'parent' => 'parent',
    'primary_key' => 'cat_id',
    'generate_url' => true,
    'childNode' => 'child',
    'body' => [
        'cat_id',
        'title',
        'slug',
    ],
    'html' => [
        'label' => 'title',
        'href' => 'slug'
    ],
    'dropdown' => [
        'prefix' => '',
        'label' => 'title',
        'value' => 'cat_id'
    ]
];
