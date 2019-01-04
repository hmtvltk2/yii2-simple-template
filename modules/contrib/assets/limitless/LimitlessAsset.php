<?php

namespace app\modules\contrib\assets\limitless;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/contrib/assets/limitless';
    public $css = [
        'css/bootstrap.min.css',
        'css/bootstrap_limitless.min.css',
        'css/components.min.css',
        'css/colors.min.css',
        'css/layout.min.css'
    ];
    public $js = [
        'js/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset'
    ];

}
