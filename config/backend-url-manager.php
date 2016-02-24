<?php
/**
 * Configuration file for the "backend" (admin panel) URL manager
 */

return [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => true,
    'rules' => [
        '/' => 'site/index',
        '<action:login|logout>' => 'site/<action>',
        '<controller:[\w-]+>' => '<controller>/index',
        '<controller:[\w-]+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    ],
];