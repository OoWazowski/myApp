<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\assets;
//namespace app\themes\adminlte;
use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle {

//    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $css = [
//        'vendor/almasaeed2010/adminlte/bootstrap/css/bootstrap.min.css',
//        'vendor/almasaeed2010/adminlte/dist/css/AdminLTE.css',
//        'vendor/almasaeed2010/adminlte/dist/css/skins/_all-skins.min.css',
//        'vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
//        'vendor/almasaeed2010/adminlte/plugins/daterangepicker/daterangepicker.css',
//        'vendor/almasaeed2010/adminlte/plugins/datepicker/datepicker3.css',
//        'vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
//        'vendor/almasaeed2010/adminlte/plugins/morris/morris.css',
//        'vendor/almasaeed2010/adminlte/plugins/iCheck/flat/blue.css',
//        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
//        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
    ];
    public $js = [
//        'vendor/almasaeed2010/adminlte/plugins/jQuery/jquery-2.2.3.min.js',
//        'vendor/almasaeed2010/adminlte/dist/js/app.min.js',
//        'vendor/almasaeed2010/adminlte/dist/js/app.js',
//        'vendor/almasaeed2010/adminlte/dist/js/demo.js',
//        'vendor/almasaeed2010/adminlte/plugins/slimScroll/jquery.slimscroll.min.js',
//        'vendor/almasaeed2010/adminlte/plugins/fastclick/fastclick.js',
//        'vendor/almasaeed2010/adminlte/plugins/morris/morris.min.js',
//        'vendor/almasaeed2010/adminlte/plugins/sparkline/jquery.sparkline.min.js',
//        'vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
//        'vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
//        'vendor/almasaeed2010/adminlte/plugins/knob/jquery.knob.js',
//        'vendor/almasaeed2010/adminlte/plugins/datepicker/bootstrap-datepicker.js',
//        'vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
//        'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
//        'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
//        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js',
//        'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
