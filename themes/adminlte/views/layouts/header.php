<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Asterisk Manager <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">sip reload</a></li>
                        <li><a href="#">sip show peers</a></li>
                        <li><a href="#">dialplan reload</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
            </form>
        </div>
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?= Yii::$app->user->identity->username; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                <big><?= Yii::$app->user->identity->username; ?></big>
                                <small>Email : <?= Yii::$app->user->identity->email; ?></small>
                            </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                    <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                    </div>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                        <?=
                        Html::a(
                                'Sign out', ['/site/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                        )
                        ?>
                    </div>
                </li>
            </ul>
            </li>

            <!-- User Account: style can be found in dropdown.less -->
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
            </ul>
        </div>
    </nav>
</header>
