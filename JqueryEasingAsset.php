<?php

namespace uran1980\yii\assets\jQueryEssential;

class JqueryEasingAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery.easing/js';
    public $js = [
        'jquery.easing.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
