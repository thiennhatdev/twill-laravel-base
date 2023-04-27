<?php

return [
    'block_editor' => [
        'blocks' => [
            'qoute' => [
                'title' => 'Quote',
                'icon' => 'quote',
                'component' => 'a17-block-quote'
            ],
            'paragraph' => [
                'title' => 'Paragraph',
                'icon' => 'text',
                'component' => 'a17-block-wysiwyg'
            ],
            'image' => [
                'title' => 'image',
                'icon' => 'image',
                'component' => 'a17-block-image',
            ],
        ]
    ],

    'media_library' => [
        // 'disk' => 'public',
        // 'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 's3'),
        // 'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        // 'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH'),
        // 'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Imgix'),
        // 'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        // 'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg', 'webp'],
    ]
];
