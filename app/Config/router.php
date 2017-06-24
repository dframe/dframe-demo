<?php
return array(
	'https' => false,
    'NAME_CONTROLLER' => 'page',
    'NAME_METHOD' => 'index',
    'publicWeb' => '',
    'assetsPath' => '',

    'documents/:pageId' => array(
        'documents/[pageId]', 
        'task=page&action=show&pageId=[pageId]'
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

    'error/:code' => array(
    	'error/[code]/', 
    	'task=page&action=error&type=[code]',
        'args' => array(
            'code' => '[code]'
        )
    )
);