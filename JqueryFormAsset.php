<?php

namespace uran1980\yii\assets\jQueryEssential;

class JqueryFormAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-form';
    public $js = [
        'jquery.form.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
