CodeMirror
==========
CodeMirror extension for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist kochiro/yii2-codemirror "*"
```

or add

```
"kochiro/yii2-codemirror": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php 

use kochiro\CodeMirror\CodeMirror; 

echo $form->field($file, 'description')->widget(CodeMirror::className(), [
	'name' => '[description][]'.$file->id,
	'value' => $file->description,
    'mode' => $mode,
    'htmlOptions' => ["id"=>'description_'.$file->id, "theme"=>'solarized dark']
]);

?>```