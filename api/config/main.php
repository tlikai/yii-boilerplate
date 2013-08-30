<?php

return array(
    'basePath' => realpath(__DIR__ . '/../'),

    // application behaviors
    'behaviors' => array(),

    // controllers mappings
    'controllerMap' => array(),

    // application modules
    'modules' => array(),

    // application components
    'components' => array(
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                /*
                array(
                    'class' => 'CEmailLogRoute',
                    'levels' => 'error, warning',
                    'emails' => array('admin@example.com'),
                ),
                 */
            ),
        ),

        'urlManager' => array(
            'class' => 'Likai\\YiiRestful\\UrlManager',
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(),
            'resources' => array(),
        ),

        'errorHandler' => array(),
    ),
);
