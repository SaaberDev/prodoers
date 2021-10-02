<?php
    return [
        'image' => [
            'no_preview' => '_default/no-preview-available.svg',
            'alt' => 'No Preview Available'
        ],

        'data' => [
            'header' => [
                //
            ],

            'content' => [
                'headline' => 'Search Your Desired Services',
                'tagline' => 'Stop wasting time on hassling, let professionals do your job.',
                'company_short_desc' => 'Designwala is a platform where you can get all kind of IT Solution',
            ],

            'footer' => [
                'copyright' => 'Copyright © 2021 '. (\Carbon\Carbon::now()->year !== 2021 ? '- ' . \Carbon\Carbon::now()->year : '') . ' | ' . env('APP_NAME'),
            ],
        ],
    ];
