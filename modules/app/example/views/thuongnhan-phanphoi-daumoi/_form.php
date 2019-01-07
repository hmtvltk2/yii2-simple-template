<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

?>

<?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]);?>
 <?=  Form::widget([

    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [

        'ngaycap' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

        'ghichu' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Nhập Ghi chú...','rows' => 6]],

        'ten_doanhnghiep' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Nhập Tên doanh nghiệp...', 'maxlength' => 255]],

        'diachi' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Nhập Địa chỉ...', 'maxlength' => 255]],

        'gcndkkd' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Nhập GCNĐKKD...', 'maxlength' => 255]],

        'noicap' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Nhập Nơi cấp...', 'maxlength' => 255]],

        'loaihinhdoanhnghiep' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Nhập Loại hình doanh nghiệp...', 'maxlength' => 255]],

        'anhchup' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Nhập Ảnh chụp...', 'maxlength' => 255]],

        'dienthoai' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Nhập Điện thoại...', 'maxlength' => 20]],

    ]

]);?>

<div class="text-right card-body py-0 px-0">
    <?=  Html::submitButton('Lưu <b><i class="icon-paperplane "></i></b>', ['class' => 'btn btn-primary btn-sm btn-labeled btn-labeled-right legitRipple mr-1']) ?>
    <?php  if (isset($isNew) && $isNew) : ?>
        <?=  Html::submitButton(
            'Lưu và tiếp tục <b><i class="icon-paperplane"></i></b>',
            [
                'class' => 'btn btn-success btn-sm btn-labeled btn-labeled-right legitRipple mr-1',
                'name' => 'save-and-continue'
            ]
        ) ?>
    <?php  endif ?>
    <?=  Html::a(
        'Hủy <b><i class="icon-cancel-square"></i></b>',
        ['index'],
        ['class' => 'btn btn-warning btn-sm btn-labeled btn-labeled-right legitRipple']
    ) ?>
</div>
<?php ActiveForm::end(); ?>


