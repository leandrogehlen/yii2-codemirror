CodeMirror
==========
CodeMirror extension for Yii2

[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist leandrogehlen/yii2-codemirror "*"
```

or add

```
"leandrogehlen/yii2-codemirror": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

<?php 

use leandrogehlen\CodeMirror\CodeMirror;

<?= $form->field($file, 'description')->widget(CodeMirror::className(), [
    'pluginOptions' => [
        'mode' => 'application/x-httpd-php', 
        'theme' => 'solarized dark',
        ...
    ]
]);

?>
```

By default, only core javascript and css files are registered:

- ```lib/codemirror.js```
- ```lib/codemirror.css```

If it is necessary adds other resource files, then should be used the 
[Dependency Injection](https://github.com/yiisoft/yii2/blob/master/docs/guide/concept-di-container.md) concept.

Example:

I want to use ```php``` mode in the codemirror editor 

```php
  
  //config/web.php
  
  $config = [
      'id' => 'my-app',
      'components' => [
        ...
      ]
      ...
  ]
  
  Yii::$container->set('leandrogehlen\codemirror\CodeMirrorAsset',[
      'js' => [
          'mode/htmlmixed/htmlmixed.js',
          'mode/xml/xml.js',
          'mode/javascript/javascript.js',
          'mode/clike/clike.js',
          'mode/php/php.js',
      ]
  ]);
  
  
  return $config;
  
```
