Yii2 JustGage
=============
A wrapper for the JustGage charting extension.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist simonmesmith/yii2-justgage "*"
```

or add

```
"simonmesmith/yii2-justgage": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \simonmesmith\justgage\JustGage::widget(); ?>```

Acknowledgement
---------------

Special thanks to Milo Schuman, whose Yii2 Highcharts code (https://github.com/miloschuman/yii2-highcharts-widget) provided the guidance and foundation for this extension.