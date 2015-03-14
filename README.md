# Yii2 Scroll To

This component based on [Scroll-To](https://github.com/individual11/Scroll-To) jQuery plugin.


## Installation


### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require uran1980/yii2-scroll-to "dev-master"
```

or add

```
"uran1980/yii2-scroll-to": "dev-master"
```

to the require section of your ```composer.json```


## Usage

add as dependensy in you ```AssetBundle.php``` for example:

```php

namespace frontend\assets;

class YourAppAsset extends \yii\web\AssetBundle
{
    ...
    public $depends = [
        'uran1980\yii\assets\scrollTo\ScrollToAsset',
        ...
    ];
}
```


## Author

[Ivan Yakovlev](https://github.com/uran1980/), e-mail: [uran1980@gmail.com](mailto:uran1980@gmail.com)
