<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="card card-body">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ten_doanhnghiep') ?>

    <?= $form->field($model, 'diachi') ?>

    <?= $form->field($model, 'dienthoai') ?>

    <?= $form->field($model, 'gcndkkd') ?>

    <?= $form->field($model, 'ngaycap') ?>

    <?= $form->field($model, 'noicap') ?>

    <?= $form->field($model, 'loaihinhdoanhnghiep') ?>

    <?= $form->field($model, 'anhchup') ?>

    <?= $form->field($model, 'ghichu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
