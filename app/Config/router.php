<?php

return array(
    'https' => false,
    'NAME_CONTROLLER' => 'page',    // Default Controller for router
    'NAME_METHOD' => 'index',       // Default Action for router
    'publicWeb' => '',              // Path for public web (web or public_html)
    'annotation' => false,

    'assets' => array(
        'minifyCssEnabled' => true,
        'minifyJsEnabled' => true,
        'assetsDir' => 'assets',
        'assetsPath' => APP_DIR.'View/',
        'cacheDir' => 'cache',
        'cachePath' => APP_DIR.'../web/',
        'cacheUrl' => HTTP_HOST.'/',
    ),

    'routes' => array(
        'documents/:pageId' => array(
            'documents/[pageId]/',
            'task=page&action=show&pageId=[pageId]'
        ),

        'error/:code' => array(
            'error/[code]/',
            'task=page&action=error&type=[code]',
            'code' => '([0-9]+)',
            'args' => array(
                'code' => '[code]'
            )
        ),

        ':task/:action' => array(
            '[task]/[action]/[params]',
            'task=[task]&action=[action]',
            'params' => '(.*)',
            '_params' => array(
                '[name]/[value]/',
                '[name]=[value]'
            )
        ),

        'default' => array(
            '[task]/[action]/[params]',
            'task=[task]&action=[action]',
            'params' => '(.*)',
            '_params' => array(
                '[name]/[value]/',
                '[name]=[value]'
            )
        )
    )

);
