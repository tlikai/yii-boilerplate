<?php

return array(
    // application path
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
                    'class' => 'CWebLogRoute',
                    'levels' => 'error, warning, trace',
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
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>'	=> '<controller>/<action>',
            ),
        ),
    ),
);
