<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'simple',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@contrib' => '@app/contrib',
        '@main' => '@app/main'
    ],
    'language' => 'vi',
    'timeZone' => 'Asia/Ho_Chi_Minh',
    'modules' => [
        'main' => 'main\Module',
        'contrib' => 'contrib\Module',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'formatter' => [
            'dateFormat' => 'dd/MM/yyyy',
            'timeFormat' => 'hh:mm:ss a',
            'datetimeFormat' => 'dd/MM/yyyy hh:mm:ss a'
        ],
        'assetManager' => [
            // 'linkAssets' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'main\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'main/site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // 'transport' => [
            //     'class' => 'Swift_SmtpTransport',
            //     'host' => 'smtp.gmail.com',
            //     'username' => '',
            //     'password' => '',
            //     'port' => '587',
            //     'encryption' => 'tls',
            // ],
            'useFileTransport' => false
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logVars' => ['_GET', '_POST'],
                    'logFile' => '@runtime/logs/' . date('Y') . '/' . date('m') . '/' . date('d') . '/error.log'
                ],
                [
                    'class' => 'app\modules\contrib\userlog\UserDbTarget',
                    'levels' => ['info'],
                    'categories' => ['userWrite', 'userRead'],
                    'logVars' => [],
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
    'defaultRoute' => 'main/site/index',
    'params' => $params,
    'as beforeRequest' => [
        'class' => 'yii\filters\AccessControl',
        'rules' => [
            [
                'allow' => true,
                'actions' => ['login'],
            ],
            [
                'allow' => true,
                'roles' => ['@'],
            ],
        ]
    ],
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

    ];

    // $config['components']['assetManager']['forceCopy'] = true;
}

return $config;
