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
    
    'error/404' => array(
    	'error/404', 
    	'task=page&action=404'
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