<?php
namespace app\modules\contrib;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        $this->modules = [
            'gxassets' => [
                'class' => 'app\modules\contrib\assets\Module'
            ],
        ];
    }
}