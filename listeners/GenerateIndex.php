<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateIndex
{
    public function handle(Jigsaw $jigsaw)
    {
        $data = collect(
            $jigsaw->getCollection('posts')
                ->map(fn ($page) => [
                    'title' => $page->title,
                    'tags' => $page->tags,
                    'link' => rightTrimPath($jigsaw->getConfig('baseUrl')) . $page->getPath(),
                    'snippet' => $page->getExcerpt(),
                ])
                ->values()
        );

        file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($data));
    }
}
