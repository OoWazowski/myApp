<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\themes\adminlte;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle {

    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $toPath = '@vendor/almasaeed2010/adminlte';
//    public $baseUrl = '@vendor/almasaeed2010/adminlte';
    public $css = [
        'bootstrap/css/bootstrap.min.css',
        'dist/css/AdminLTE.css',
        'dist/css/skins/_all-skins.min.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'plugins/daterangepicker/daterangepicker.css',
        'plugins/datepicker/datepicker3.css',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'plugins/morris/morris.css',
        'plugins/iCheck/flat/blue.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
    ];
    public $js = [
        'plugins/jQuery/jquery-2.2.3.min.js',
        'dist/js/app.min.js',
        'dist/js/app.js',
        'dist/js/demo.js',
//        '/dist/js/pages/dashboard.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.js',
        'plugins/morris/morris.min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'plugins/knob/jquery.knob.js',
//        '/plugins/daterangepicker/daterangepicker.js',
        'plugins/datepicker/bootstrap-datepicker.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
