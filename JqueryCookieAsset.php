<?php

namespace uran1980\yii\assets\jQueryEssential;

class JqueryCookieAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-cookie/src/';
    public $js = [
        'jquery.cookie.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
