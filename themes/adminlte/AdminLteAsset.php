<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\themes\adminlte;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle {

    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $toPath = "@vendor/almasaeed2010/adminlte";
    public $css = [
        'css/AdminLTE.css',
        'css/skins/_all-skins.min.css',
        'css/AdminLTE.min.css',
    ];
    public $js = [
        'js/app.js',
        'js/app.min.js',
        'js/pages/dashboard.js',
        'js/pages/dashboard2.js',
        'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    public $plugin = [
        '\plugins\jQuery\jquery-2.2.3.min.js',
        '\plugins\slimScroll\jquery.slimscroll.min.js',
        '\plugins\fastclick\fastclick.js',
        '\plugins\fastclick\fastclick.js',
    ];
}
