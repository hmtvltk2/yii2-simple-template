<?php

use yii\helpers\Html;
use kartik\grid\GridView;

$this->title = 'Danh Sách Thương Nhân Phân Phối Đầu Mối';
$this->params['breadcrumbs'][] = $this->title;
?>

  
    <?php //  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => '\kartik\grid\ActionColumn',
                'header' => '',
                'noWrap' => true,
                'deleteOptions' => ['class' => 'text-danger'],
                'viewOptions' => ['class' => 'text-info mr-1'],
                'updateOptions' => ['class' => 'mr-1']
            ],
            ['class' => '\kartik\grid\SerialColumn'],

            'id',
            'ten_doanhnghiep',
            'diachi',
            'dienthoai',
            'gcndkkd',
//            'ngaycap', 
//            'noicap', 
//            'loaihinhdoanhnghiep', 
//            'anhchup', 
//            'ghichu:ntext', 
          
        ],
        'pjax' => true,
        'striped' => true,
        'hover' => true,
        'toggleDataContainer' => ['class' => 'btn-group mr-2'],
        'panel' => [
            'heading' => '<h4 class="m-0 font-weight-semibold">' . Html::encode($this->title) . ' </h4>',
            'type' => 'info',
            'before' => Html::a('Thêm Mới <b><i class="icon-add"></i></b>', ['create'], ['class' => 'btn btn-sm bg-primary btn-labeled btn-labeled-right legitRipple']),
        ],
    ]);  ?>


