<?php

/**
 * @copyright Copyright &copy; Jay Leno, Aurenav.com, 2015
 * @package yii2-codemirror
 * @version 1.2.0
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
    public $sourcePath = '@bower/codemirror';

    /**
     * Register required assets
     */
    public function init()
    {
        parent::init();
        $this->js = array_merge(['lib/codemirror.js'], $this->js);
        $this->css = array_merge(['lib/codemirror.css'], $this->css);
    }

}