<?php

namespace uran1980\yii\assets\jQueryEssential;

class JqueryScrollToAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery.scrollTo';
    public $js = [
        'js/scrollTo.min.js',
    ];
    public $depends = [
        'uran1980\yii\assets\jQueryEssential\JqueryEasingAsset',
    ];
}