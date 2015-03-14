<?php

namespace uran1980\yii\assets\jQueryEssential;

class JqueryCookieAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-cookie';
    public $js = [
        'jquery.cookie.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
