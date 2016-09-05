<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>


<html>
    <head>
        <title>GO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/dist/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/dist/css/view_chang.css" />
    </head>
    <body>
        <div class="login-form">
            <!--     <h1>Login</h1> -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username " id="UserName">
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group log-status">
                <input type="password" class="form-control" placeholder="Password" id="Passwod">
                <i class="fa fa-lock"></i>
            </div>
            <a class="link" href="#">Lost your password?</a>
            <button type="button" class="log-btn form-control" >GO</button>
        </div>
    </body>
</html>