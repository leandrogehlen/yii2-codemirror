<?php

/**
 * @copyright Copyright &copy; Jay Leno, Aurenav.com, 2015
 * @package yii2-codemirror
 * @version 1.0.0
 */

namespace kochiro\codemirror;

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
        
        $this->setupAssets('js', ['/lib/codemirror.js']);
        
        $this->setupAssets('js', ['/addon/fold/xml-fold.js']);
        $this->setupAssets('js', ['/addon/selection/active-line.js']);
        $this->setupAssets('js', ['/addon/edit/closebrackets.js']);
        $this->setupAssets('js', ['/addon/edit/closetag.js']);
        $this->setupAssets('js', ['/addon/edit/trailingspace.js']);
        $this->setupAssets('js', ['/addon/display/placeholder.js']);
        
        $this->setupAssets('js', ['/addon/edit/matchtags.js']);
        $this->setupAssets('js', ['/addon/edit/matchbrackets.js']);
        $this->setupAssets('js', ['/addon/search/searchcursor.js']);
        $this->setupAssets('js', ['/addon/search/match-highlighter.js']);
        $this->setupAssets('js', ['/addon/hint/show-hint.js']);
        $this->setupAssets('js', ['/addon/hint/xml-hint.js']);
        $this->setupAssets('js', ['/addon/hint/html-hint.js']);
        $this->setupAssets('js', ['/addon/dialog/dialog.js']);
        $this->setupAssets('js', ['/addon/search/searchcursor.js']);
        $this->setupAssets('js', ['/addon/search/search.js']);
        
        $this->setupAssets('js', ['/mode/php/php.js']);
        $this->setupAssets('js', ['/mode/sql/sql.js']);
        $this->setupAssets('js', ['/mode/xml/xml.js']);
        $this->setupAssets('js', ['/mode/javascript/javascript.js']);
        $this->setupAssets('js', ['/mode/css/css.js']);
        $this->setupAssets('js', ['/mode/htmlmixed/htmlmixed.js']);
        $this->setupAssets('js', ['/mode/clike/clike.js']);
        
        $this->setupAssets('js', ['/keymap/extra.js']);
        
        $this->setupAssets('css', ['/lib/codemirror.css']);
        $this->setupAssets('css', ['/doc/docs.css']);
        $this->setupAssets('css', ['/addon/hint/show-hint.css']);
        $this->setupAssets('css', ['/addon/dialog/dialog.css']);
        $this->setupAssets('css', ['/theme/solarized.css']);
        
        $this->setupAssets('js', ['startup.js']);
        
        parent::init();
    }
}