<?php

return array(
    'https' => false,
    'NAME_CONTROLLER' => 'page',    // Default Controller for router
    'NAME_METHOD' => 'index',       // Default Action for router
    'publicWeb' => '',              // Path for public web (web or public_html)
    'assetsPath' => '',

    'documents/:pageId' => array(
        'documents/[pageId]/', 
        'task=page&action=show&pageId=[pageId]'
    ),

    'error/:code' => array(
        'error/[code]/', 
        'task=page&action=error&type=[code]',
        'args' => array(
            'code' => '[code]'
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
    ),    

);