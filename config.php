<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'https://copilot-msp.com',
    'title' => 'Copilot Managed Services',
    'description' => 'Copilot Managed Services',
    'collections' => [],

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
