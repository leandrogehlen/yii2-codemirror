<?php

/**
 * @copyright Copyright &copy; Jay Leno, Aurenav.com, 2015
 * @package yii2-codemirror
 * @version 1.0.0
 */

namespace kochiro\codemirror;
use Yii;

/**
 * CodeMirror bundle for \kochiro\CodeMirror
 *
 * @author Jay Leno <jay.leno@aurenav.com>
 * @since 1.0
 */
class CodeMirrorAsset extends \kartik\base\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        
        $this->setupAssets('js', [
            'lib/codemirror',
            'addon/dialog/dialog',
            'addon/display/placeholder',
            'addon/edit/closebrackets',
            'addon/edit/closetag',
            'addon/edit/matchbrackets',
            'addon/edit/matchtags',
            'addon/edit/trailingspace',
            'addon/fold/xml-fold',
            'addon/hint/html-hint',
            'addon/hint/show-hint',
            'addon/hint/xml-hint',
            'addon/search/match-highlighter',
            'addon/search/search',
            'addon/search/searchcursor',
            'addon/selection/active-line',
            'keymap/extra',
            'mode/clike/clike',
            'mode/css/css',
            'mode/htmlmixed/htmlmixed',
            'mode/javascript/javascript',
            'mode/php/php',
            'mode/sql/sql',
            'mode/xml/xml'
        ]);
        
        $this->setupAssets('css', [
            'lib/codemirror',
            'addon/dialog/dialog',
            'addon/hint/show-hint',
            //'doc/docs',
            'theme/solarized' // see the theme directory for other options and set the desired option in the extension call
        ]);
        
        parent::init();
    }
}