<?php

/**
 * Extension Manager/Repository config file for ext "jesterthenarr_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'jesterthenarr-sitepackage',
    'description' => 'is a sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Joketta\\JesterthenarrSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'JesterTheNarr',
    'author_email' => 'n.runge89@gmail.com',
    'author_company' => 'Joketta',
    'version' => '1.0.0',
];
