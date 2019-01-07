<?php
use kartik\datecontrol\Module;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'simple',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'modules' => [
        'app' => 'app\modules\app\Module',
        'contrib' => 'app\modules\contrib\Module',
        'gridview' => '\kartik\grid\Module',
        'datecontrol' => '\kartik\datecontrol\Module',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'howhwhieurasfas',
        ],
        'formatter' => [
            'dateFormat' => 'dd/MM/yyyy',
            'timeFormat' => 'hh:mm:ss a',
            'datetimeFormat' => 'dd/MM/yyyy hh:mm:ss a'
        ],
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap4\BootstrapAsset' => [
                    'sourcePath' => '@app/modules/contrib/assets/limitless',
                    // 'baseUrl' => 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1',
                    'css' => [
                        'css/bootstrap.min.css'
                    ],
                ],
                // 'yii\bootstrap4\BootstrapPluginAsset' => [
                //     'sourcePath' => null,
                //     'baseUrl' => 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1',
                //     'js' => [
                //         'js/bootstrap.min.js'
                //     ],
                // ],
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            //TODO: Change errorAction
            'errorAction' => 'app/example/site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,


        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [],
        ],

    ],
    //TODO: Change default route
    'defaultRoute' => 'app/example/site',
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
        'generators' => [
            'kartikgii-crud' => [
                'class' => 'hmtvltk2\kartikgii\crud\Generator',
            ]
        ]
    ];

    // $config['components']['assetManager']['forceCopy'] = true;
}

return $config;
