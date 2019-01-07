<?php

use yii\helpers\Html;

$this->title = 'Thêm Mới Thương Nhân Phân Phối Đầu Mối';
$this->params['breadcrumbs'][] = ['label' => 'Thương Nhân Phân Phối Đầu Mối', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header">
        <h4><?= Html::encode($this->title) ?></h4>
    </div>

    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
            'isNew' => true,
        ]) ?>
    </div>
</div>
