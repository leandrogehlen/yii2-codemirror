<?php
/**
 * @copyright Copyright &copy; Jay Leno, Aurenav.com, 2015
 * @package yii2-codemirror
 * @version 1.2.0
 */

namespace kochiro\CodeMirror;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Renders a CodeMirror editor
 * @author Leandro Gehlen <leandrogehlen@gmail.com>
 * @since 1.2.0
 */
class CodeMirror extends InputWidget
{
    /**
     * @var array configuration options
     * @see http://codemirror.net/doc/manual.html#config
     */
    public $pluginOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])){
            $this->options['id'] = $this->getId();
        }

        $this->pluginOptions = ArrayHelper::merge([
            'lineNumbers' => true,
            'styleActiveLine' => true,
            'matchBrackets' => true,
            'lineWrapping' => true
        ],$this->pluginOptions);

    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::textArea( $this->name, $this->value, $this->options );

        $id = $this->options['id'];
        $var = Inflector::variablize($id) . '_editor';

        $view = $this->getView();
        CodeMirrorAsset::register($view);

        $options = Json::encode($this->pluginOptions);
        $view->registerJs("var {$var} = CodeMirror.fromTextArea(document.getElementById('$id'), $options)");
    }
}