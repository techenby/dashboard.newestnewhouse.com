<?php

return [
    /*
     * The dashboard supports these themes:
     *
     * - light: always use light mode
     * - dark: always use dark mode
     * - device: follow the OS preference for determining light or dark mode
     * - auto: use light mode when the sun is up, dark mode when the sun is down
     */
    'theme' => 'auto',

    /*
     * When the dashboard uses the `auto` theme, these coordinates will be used
     * to determine whether the sun is up or down.
     */
    'auto_theme_location' => [
        'lat' => 41.602337,
        'lng' => -88.232216,
    ],

    /*
     * These scripts will be loaded when the dashboard is displayed.
     */
    'scripts' => [
        'alpinejs' => 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v3.x.x/dist/alpine.min.js',
    ],

    /*
     * These stylesheets will be loaded when the dashboard is displayed.
     */
    'stylesheets' => [
        'inter' => 'https://rsms.me/inter/inter.css'
    ],

    'tiles' => [
        'calendar' => [
            'ids' => [
                'tighten' => 'andy.newhouse@tighten.co',
                'institute' => 'andy@sgdinstitute.org',
                'andy' => 'andymnewhouse@gmail.com',
                'jess' => 'jessnewhouse24@gmail.com',
                'family' => 'pctjnc0hmm025r61ecdr8b77qg@group.calendar.google.com',
            ],
            'refresh_interval_in_seconds' => 60,
        ]
    ]
];
