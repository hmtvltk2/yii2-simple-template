<?php

use yii\helpers\Html;

use app\modules\contrib\assets\limitless\LimitlessAsset;
use app\modules\contrib\widgets\FlashMessageWidget;

LimitlessAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet">
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <style>
        body, .btn, .form-control {
            font-size: 0.9rem
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>


<div class="wrap">
    <!-- Main navbar -->
	<?= $this->render('navbar') ?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<?= $this->render('sidebar') ?>
		<!-- /main sidebar -->

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<?= $this->render('header') ?>
			<!-- /page header -->
			<?= FlashMessageWidget::widget(); ?>

			<!-- Content area -->
			<div class="content">
                <?= $content ?>
			</div>
			<!-- /content area -->


			<!-- Footer -->
			<?= $this->render('footer') ?>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

  
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
