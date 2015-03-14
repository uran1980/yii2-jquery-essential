<?php

namespace uran1980\yii\assets\jQueryEssential;

class JqueryMouseWheelAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-mousewheel';
    public $js = [
        'jquery.mousewheel.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
