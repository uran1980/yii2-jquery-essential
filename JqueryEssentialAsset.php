<?php

namespace uran1980\yii\assets\jQueryEssential;

class JqueryEssentialAsset extends \yii\web\AssetBundle
{
    public $depends = [
        'yii\web\JqueryAsset',
        'uran1980\yii\assets\jQueryEssential\JqueryCookieAsset',
        'uran1980\yii\assets\jQueryEssential\JqueryEasingAsset',
        'uran1980\yii\assets\jQueryEssential\JqueryMouseWheelAsset',
        'uran1980\yii\assets\jQueryEssential\JqueryScrollToAsset',
        'uran1980\yii\assets\jQueryEssential\JqueryFormAsset',
    ];
}
