<?php

namespace uran1980\yii\assets\jQueryEssential;

use yii\web\AssetBundle;

class ScrollToAsset extends AssetBundle
{
    public $sourcePath = '@uran1980/yii/assets/jQueryEssential/assets';
    public $js = [
        'js/scrollTo.min.js',
    ];
    public $depends = [
        'uran1980\yii\assets\jQueryEssential\JqueryEasingAsset',
    ];
}