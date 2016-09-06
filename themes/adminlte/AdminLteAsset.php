<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */namespace app\themes\adminlte;
 
 use yii\web\AssetBundle;
 
 class AdminLteAsset extends AssetBundle {
     public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
     
     public $css = [
         'css/AdminLTE.css',
         'css/skins/_all-skins.min.css',
     ];
     
     public $js = [
         'js/app.js',
     ];
     
     public $depends = [
         'yii\web\YiiAsset',
         'yii\bootstrap\BootstrapAsset',
     ];
 }
