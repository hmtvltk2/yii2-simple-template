<?php

use yii\helpers\Html;

$this->title = 'Cập Nhật Thương Nhân Phân Phối Đầu Mối';
$this->params['breadcrumbs'][] = ['label' => 'Thương Nhân Phân Phối Đầu Mối', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Cập Nhật';
?>
<div class="card">
    <div class="card-header">
        <h4><?= Html::encode($this->title) ?></h4>
    </div>
    
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
