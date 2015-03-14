<?php

namespace common\assets;

class JqueryFormAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-form';
    public $js = [
        'jquery.form.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
