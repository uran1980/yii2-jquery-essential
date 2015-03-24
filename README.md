# Yii2 jQuery Essential

This component based on jQuery essential plugins:
* [jQuery Cookie](https://github.com/carhartl/jquery-cookie)
* [jQuery Easing](http://gsgd.co.uk/sandbox/jquery/easing/)
* [jQuery Mouse Wheel](https://github.com/jquery/jquery-mousewheel)
* [jQuery Scroll To](https://github.com/flesler/jquery.scrollTo)
* [jQuery Form](https://github.com/malsup/form/)


## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require uran1980/yii2-jquery-essential "dev-master"
```

or add

```
"uran1980/yii2-jquery-essential": "dev-master"
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
        'uran1980\yii\assets\jQueryEssential\JqueryEssentialAsset',
        ...
    ];
}
```


## Author

[Ivan Yakovlev](https://github.com/uran1980/), e-mail: [uran1980@gmail.com](mailto:uran1980@gmail.com)
