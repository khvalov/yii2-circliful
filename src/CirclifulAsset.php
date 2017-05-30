<?php

namespace starcode\yii\circliful;

use yii\web\AssetBundle;

class CirclifulAsset extends AssetBundle
{
    public $sourcePath = '@vendor/pguso/jquery-plugin-circliful';
    public $css = [
        'css/jquery.circliful.css',
    ];
    public $js = [
        'js/jquery.circliful.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
