<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;


$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Thương Nhân Phân Phối Đầu Mối', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header header-elements-md-inline">
        <h4 class="card-title"><?= $this->title ?></h4>
        <div class="header-elements">
            <?=  Html::a(
                'Sửa <b><i class="icon-pencil7"></i></b>',
                ['update', 'id' => $model->id],
                ['class' => 'btn bg-teal-400 btn-sm btn-labeled btn-labeled-right legitRipple mr-1']
            ) ?>

            <?= Html::a('Xóa <b><i class="icon-folder-remove"></i></b>', ['delete', 'id' => $model->id], [
                'class' => 'btn bg-danger btn-sm btn-labeled btn-labeled-right legitRipple',
                'data' => [
                    'confirm' => 'Bạn có chắc muốn xóa?',
                    'method' => 'post',
                ],
            ]) ?>
        </div>
    </div>

    <div class="card-body">
        <?= DetailView::widget([
            'model' => $model,
            'condensed' => false,
            'hover' => true,
            'mode' => DetailView::MODE_VIEW,
            'attributes' => [
                'id',
            'ten_doanhnghiep',
            'diachi',
            'dienthoai',
            'gcndkkd',
            'ngaycap',
            'noicap',
            'loaihinhdoanhnghiep',
            'anhchup',
            'ghichu:ntext',
            ],
        
        ]) ?>
    </div>
</div>
