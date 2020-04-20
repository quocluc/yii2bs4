<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\bootstrap4\BootstrapAsset;
use yii\web\YiiAsset;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        '//cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css'
    ];
    public $js = [
        '//cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js',

    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];
}
