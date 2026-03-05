<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Salsa 123 CMS',
    'description' => 'CMS project by T. Curtius at Hochschule Emden Leer about a fictional salsa academy',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Salsa123Inc\\Salsa123Cms\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'T. Curtius',
    'author_email' => 'curtiusti@gmail.com',
    'author_company' => 'Salsa123 Inc.',
    'version' => '1.0.0',
];
