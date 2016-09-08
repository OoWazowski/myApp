<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminLteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $bashTo = '@vendor';
    public $css = [
        'themes/AdminLTE/bootstrap/css/bootstrap.min.css',
        'themes/AdminLTE/dist/css/AdminLTE.css',
        'themes/AdminLTE/dist/css/skins/_all-skins.min.css',
        'themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'themes/AdminLTE/plugins/daterangepicker/daterangepicker.css',
        'themes/AdminLTE/plugins/datepicker/datepicker3.css',
        'themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'themes/AdminLTE/plugins/morris/morris.css',
        'themes/AdminLTE/plugins/iCheck/flat/blue.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
    ];
    public $js = [
        'themes/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js',
        'themes/AdminLTE/dist/js/app.min.js',
        'themes/AdminLTE/dist/js/app.js',
        'themes/AdminLTE/dist/js/demo.js',
//        'themes/AdminLTE/dist/js/pages/dashboard.js',
        'themes/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js',
        'themes/AdminLTE/plugins/fastclick/fastclick.js',
        'themes/AdminLTE/plugins/morris/morris.min.js',
        'themes/AdminLTE/plugins/sparkline/jquery.sparkline.min.js',
        'themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'themes/AdminLTE/plugins/knob/jquery.knob.js',
//        'themes/AdminLTE/plugins/daterangepicker/daterangepicker.js',
        'themes/AdminLTE/plugins/datepicker/bootstrap-datepicker.js',
        'themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
//        'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
//        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
