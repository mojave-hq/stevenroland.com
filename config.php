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
            'sort' => '-filename',
            'path' => fn ($page) => $page->title
                ? 'posts/' . Str::slug($page->title)
                : 'posts/' . Str::slug($page->getFilename()),
        ],

        'jobs' => [
            'items' => [
                [
                    'title' => 'Web Developer',
                    'companyLogo' => 'brand.logoicon',
                    'companyName' => 'Freelancing',
                    'location' => 'Remote',
                    'description' => 'I began working on a freelance basis as a consultant and web developer for some family and friends on a variety of projects ranging from legal software to a travel website and drop-shipping business. Over the years, I have also been able to help other agencies and developers in the PHP and JavaScript spaces. I even occasionally provide home and pet care, as well as online order fulfillment.',
                ],
                [
                    'title' => 'Web Developer',
                    'companyLogo' => 'brand.theboutiquehub-logomark',
                    'companyName' => 'The Boutique Hub',
                    'location' => 'Remote',
                    'description' => 'It was an honor and true privilege to work with the entire team at The Boutique Hub. Together, we built an amazing wholesale marketplace and fostered the incredible ideology of “Community over competition”.',
                ],
                [
                    'title' => 'Web Developer',
                    'companyLogo' => 'brand.advfn-wordmark',
                    'companyName' => 'ADVFN',
                    'location' => 'Tallahassee, Florida & Remote',
                    'description' => 'I joined the team at ADVFN in mid-2018 as a full-time PHP developer to work on their financial data website. During my time, we added a robust cryptocurrency o ering to the site while redeveloping many legacy financial tools with Vue.js and upgrading to the most recent version of the Bootstrap framework.',
                ],
                [
                    'title' => 'Web Developer',
                    'companyLogo' => 'brand.contextualcode-logomark',
                    'companyName' => 'Contextual Code',
                    'location' => 'Tallahassee, Florida & Remote',
                    'description' => 'As a web developer working with the Contextual Code team, I primarily worked on eZPublish-based client websites and some internal MEAN stack applications.',
                ],
            ]
        ],

        'projects' => [
            'items' => [
                // The Boutique Hub
                [
                    'name' => 'Hubventory',
                    'companyName' => 'The Boutique Hub',
                    'startDate' => '2021',
                    'endDate' => '2023',
                    'description' => 'The best wholesale marketplace for brands and boutiques. I helped build this greenfield project with tools like Laravel, Laravel Livewire, Alpine.js, and Tailwind CSS.',
                ],

                // Freelancing
                [
                    'name' => 'Florida Healthy Kids',
                    'clientName' => 'Automated Health Systems',
                    'companyName' => 'Freelancing',
                    'startDate' => '2021',
                    'description' => 'Using Angular and Tailwind, this project replaces a legacy PHP solution for low or no-cost insurance for kids.',
                ],
                [
                    'name' => 'Florida Department of Health Early Steps',
                    'clientName' => 'ProCom Consulting',
                    'companyName' => 'Freelancing',
                    'startDate' => '2020',
                    'endDate' => '2021',
                    'description' => 'A VisualVault integration for children who have or are at- risk for developmental disabilities or delays, using SQL with JavaScript on the front and back end.',
                ],
                [
                    'name' => 'City of Lincoln, Nebraska Permits & Licensing',
                    'clientName' => 'ProCom Consulting',
                    'companyName' => 'Freelancing',
                    'startDate' => '2020',
                    'endDate' => '2021',
                    'description' => 'A VisualVault integration for permits and licensing, using SQL with JavaScript on the front and back end.',
                ],
                [
                    'name' => 'Paddling Clubs',
                    'clientName' => 'Apero Creative Development',
                    'companyName' => 'Freelancing',
                    'startDate' => '2020',
                    'description' => 'A bespoke Laravel membership site for adventurers in North America using Bootstrap Material and Vue.',
                ],
                [
                    'name' => 'Paddling Maps',
                    'clientName' => 'Apero Creative Development',
                    'companyName' => 'Freelancing',
                    'startDate' => '2020',
                    'description' => 'A Laravel map application, mapping out the best rapids to explore, using Bootstrap Material and Vue.',
                ],
                [
                    'name' => "Let’s Go Travel Shop",
                    'clientName' => 'Kelley Roland',
                    'companyName' => 'Freelancing',
                    'startDate' => '2019',
                    'description' => 'A WordPress-powered online retail shop centered around travel, using Bootstrap and Vue.',
                ],
                [
                    'name' => 'mojavehq.com',
                    'companyName' => 'Freelancing',
                    'startDate' => '2013',
                    'endDate' => 'PRESENT',
                    'description' => 'A Jigsaw site with TailwindCSS and Alpine.js.',
                ],
                [
                    'name' => 'stevenroland.com',
                    'companyName' => 'Freelancing',
                    'startDate' => '2013',
                    'endDate' => 'PRESENT',
                    'description' => 'From PHP with no frameworks or libraries, to WordPress, to Laravel & Statamic 3, and now to Jigsaw; I also enjoy working with Alpine.js and Tailwind for this project.',
                ],

                // ADVFN
                [
                    'name' => 'ADVFN Next',
                    'companyName' => 'ADVFN',
                    'startDate' => '2019',
                    'endDate' => '2020',
                    'description' => 'A playground to prototype next generation of ADVFN tools built with the power of Laravel, Vue, and Tailwind.',
                ],
                [
                    'name' => 'getfreesh.it',
                    'companyName' => 'ADVFN',
                    'startDate' => '2019',
                    'description' => "A companion website to ADVFN’s Freeloadr crypto mining app, this Laravel website uses Bootstrap 4 and Vue on the frontend.",
                ],
                [
                    'name' => 'advfn.com',
                    'companyName' => 'ADVFN',
                    'startDate' => '2018',
                    'endDate' => '2020',
                    'description' => 'A PHP-based financial data website with a 20+ year legacy. I helped modernize tools with Bootstrap 4, jQuery, Vue, and SCSS.',
                ],
                [
                    'name' => 'Happy Pool',
                    'companyName' => 'ADVFN',
                    'startDate' => '2018',
                    'endDate' => '2020',
                    'description' => 'A Yii-based crypto mining pool that uses no frameworks, just plain vanilla CSS and JavaScript.',
                ],
                [
                    'name' => 'Swamp Team',
                    'companyName' => 'ADVFN',
                    'startDate' => '2018',
                    'endDate' => '2019',
                    'description' => 'An internal Florida-swamp-based team portal for chatting and storing shared documents, built with Laravel, Bootstrap, and Vue.',
                ],

                // Contextual Code
                [
                    'name' => 'Contextual Office',
                    'companyName' => 'Contextual Code',
                    'startDate' => '2017',
                    'description' => 'An internal tool for measuring developer productivity and updates, built with Bootstrap and Angular.',
                ],
                [
                    'name' => 'Florida Department of Agriculture and Consumer Services',
                    'companyName' => 'Contextual Code',
                    'startDate' => '2016',
                    'endDate' => '2017',
                    'description' => 'An eZ-Publish site that enabled FDACS employees to post agency news and updates, styled by custom SCSS and scripted with jQuery.',
                ],
                [
                    'name' => 'Alabama Credit Union',
                    'companyName' => 'Contextual Code',
                    'startDate' => '2016',
                    'endDate' => '2017',
                    'description' => 'A marketing site built with eZ-Publish, this project uses SCSS and jQuery to attract and retain customers.',
                ],
                [
                    'name' => 'Modern Language Association',
                    'companyName' => 'Contextual Code',
                    'startDate' => '2016',
                    'endDate' => '2017',
                    'description' => 'An academic language and literature site powered by eZ-Publish, we wrote custom SCSS and used jQuery help this client "strengthen the study and teaching of language and literature".',
                ],
                [
                    'name' => 'Florida State University',
                    'companyName' => 'Contextual Code',
                    'startDate' => '2016',
                    'endDate' => '2017',
                    'description' => "FSU’s eZ-Publish-backed knowledge portal, bespoke SCSS and jQuery kept students learning.",
                ],
                [
                    'name' => 'The One Week Boutique',
                    'companyName' => 'Contextual Code',
                    'startDate' => '2016',
                    'endDate' => '2017',
                    'description' => "An eZ-Publish marketing site for Tallahassee’s seasonal kids’ clothing consignment pop-up shop, using Bootstrap and jQuery.",
                ],
            ]
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
