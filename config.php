<?php

use Illuminate\Support\Str;

return [
    'production' => false,

    'baseUrl' => 'http://stevenroland.test/',

    'siteName' => 'Steven Roland',

    'siteDescription' => 'Web developer, hiker, photographer.',

    'siteAuthor' => 'Steven Roland',

    'build' => [
        'source' => 'source',
        'destination' => 'build_{env}',
    ],

    'collections' => [
        'posts' => [
            'author' => 'Steven Roland', // Default author, if not provided in a post
            'path' => fn ($page) => $page->title
                ? 'posts/' . Str::slug($page->title)
                : 'posts/' . Str::slug($page->getFilename()),
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
