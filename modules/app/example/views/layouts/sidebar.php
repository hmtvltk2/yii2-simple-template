<?php
$user = Yii::$app->user;
$script = <<<JS
    $('.nav-sidebar .nav-item').each(function(){
        $(this).on('click',function(){
            $('.nav-sidebar .nav-item').removeClass('nav-item-open');
            $(this).addClass('nav-item-open');
        })
    })
JS;
$this->registerJS($script, \yii\web\View::POS_END);
?>

<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

<!-- Sidebar mobile toggler -->
<div class="sidebar-mobile-toggler text-center">
    <a href="#" class="sidebar-mobile-main-toggle">
        <i class="icon-arrow-left8"></i>
    </a>
    Navigation
    <a href="#" class="sidebar-mobile-expand">
        <i class="icon-screen-full"></i>
        <i class="icon-screen-normal"></i>
    </a>
</div>
<!-- /sidebar mobile toggler -->


<!-- Sidebar content -->
<div class="sidebar-content">

    <!-- User menu -->
    <?php if (!$user->isGuest) : ?>
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="images/people.png" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold"><?= $user->identity->username ?></div>
                        <!-- <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                        </div> -->
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="card card-sidebar-mobile">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <!-- Main -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item nav-item-open">
                <a href="<?= Yii::$app->homeUrl ?>" class="nav-link">
                    <i class="icon-home4"></i>
                    <span>Trang chủ</span>
                </a>
            </li>
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Second Menu</div> <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                    <li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
                    <li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>
                    <li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
                    <li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
                    <li class="nav-item-divider"></li>
                    <li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
                    <li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
                    <li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
                    <li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="../full/changelog.html" class="nav-link">
                    <i class="icon-list-unordered"></i>
                    <span>Changelog</span>
                    <span class="badge bg-blue-400 align-self-center ml-auto">2.0</span>
                </a>
            </li>
            <!-- /main -->

        </ul>
    </div>
    <!-- /main navigation -->

</div>
<!-- /sidebar content -->

</div>