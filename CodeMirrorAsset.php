<?php

/**
 * @copyright Copyright &copy; Jay Leno, Aurenav.com, 2015
 * @package yii2-codemirror
 * @version 1.1.0
 */

namespace kochiro\codemirror;
use Yii;
use yii\web\AssetBundle;

/**
 * CodeMirror bundle for \kochiro\CodeMirror
 *
 * @author Jay Leno <jay.leno@aurenav.com>
 * @since 1.2.0
 */
class CodeMirrorAsset extends AssetBundle
{
    public $sourcePath = '@bower/codemirror/lib';

    public $js = [
        'codemirror.js',
    ];

    public $css = [
        'codemirror.css',
    ];

}