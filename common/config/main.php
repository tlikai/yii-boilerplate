<?php

return array(
    // application name
    'name' => 'your application name',

    // application path aliases
    'aliases' => array(
        'common' => __DIR__ . '/../../common',
        'vendor' => __DIR__ . '/../../common/vendors',
        'console' => __DIR__ . '/../../console',
        'backend' => __DIR__ . '/../../backend',
        'frontend' => __DIR__ . '/../../frontend',
    ),

    // application preimport
    'import' => array(
        'common.models.*',
        'common.helpers.*',
        'common.components.*',

        'application.models.*',
        'application.helpers.*',
        'application.components.*',
        'application.controllers.*',
    ),

    // application preload components
    'preload' => array('log'),

    // application components
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=test',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => '',
        ),

        'user' => array(
            'class' => 'WebUser',
        ),
    ),

    // application parameters
    'params' => array(
        // pagination
        'pagination' => array(
            'pageVar' => 'page',
            'pageSize' => 10,
        ),
    ),
);
