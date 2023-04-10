<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://stevenroland.test/',
    'siteName' => 'Steven Roland',
    'siteDescription' => 'Website description.',
    'siteAuthor' => 'Steven Roland',

    'collections' => [
        'content/audio' => [
            'author' => 'Steven Roland', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'posts/audio/{filename}',
        ],
        'content/link' => [
            'author' => 'Steven Roland', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'posts/link/{filename}',
        ],
        'content/photo' => [
            'author' => 'Steven Roland', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'posts/photo/{filename}',
        ],
        'content/quote' => [
            'author' => 'Steven Roland', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'posts/quote/{filename}',
        ],
        'content/text' => [
            'author' => 'Steven Roland', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'posts/text/{filename}',
        ],
        'content/video' => [
            'author' => 'Steven Roland', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'posts/video/{filename}',
        ],

        'content' => [
            'author' => 'Steven Roland', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'posts/{filename}',
        ],
    ],

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
