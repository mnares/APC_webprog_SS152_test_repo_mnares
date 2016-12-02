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
class AppAsset extends AssetBundle
{
   // public $basePath = '@webroot';
   // public $baseUrl = '@web';
    public $sourcePath = '@bower/grayscale/';
    public $css = [
        'vendor/bootstrap/css/bootstrap.min.css',
            'vendor/font-awesome/css/font-awesome.min.css',
                'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
                    'https://fonts.googleapis.com/css?family=Montserrat:400,700',
                        'css/grayscale.min.css'
    ];
    public $js = [
        'vendor/jquery/jquery.js',
        'vendor/bootstrap/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
        'js/grayscale.min.js',
        '',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
