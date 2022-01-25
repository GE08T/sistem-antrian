<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback',
        'adminLTE/plugins/fontawesome-free/css/all.min.css',
        'adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'adminLTE/dist/css/adminlte.min.css',
    ];
    public $js = [
        'adminLTE/plugins/jquery/jquery.min.js',
        'adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminLTE/dist/js/adminlte.js',
    ];
    public $depends = [

    ];
}
