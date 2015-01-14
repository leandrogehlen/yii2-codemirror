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

// set the mode based on the available options in assets/mode
$mode = 'application/x-httpd-php';

echo $form->field($file, 'description')->widget(CodeMirror::className(), [
    'id' => $id,
    'name' => '[description][]'.$id,
	'value' => $description,
    'mode' => $mode,
    'htmlOptions' => [
        "id"=>'description_'.$id, 
        "theme"=>'solarized dark' // set the theme based on the options in assets/theme, you must also include the corresponding css file in CodeMirrorAsset.php
    ]
]);

?>```