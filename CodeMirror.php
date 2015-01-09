<?php
/**
 * @copyright Copyright &copy; Jay Leno, Aurenav.com, 2015
 * @package yii2-codemirror
 * @version 0.0.1
 */
 
namespace kochiro\CodeMirror;

use yii\helpers\Html;

/**
 * Implements a CodeMirror editor box
 */
class CodeMirror extends \yii\widgets\InputWidget
{
    public $script;
    
    public $baseurl;
    public $target = null;

    public function run()
    {
		// Add textarea to the page  
		if( $this->target === null )
		{
			list($name, $id) = $this->resolveNameID();

			echo Html::textArea( $name, $this->value, $this->htmlOptions );
		}
		
		//set the Mode type
		if ($this->model->type == 'Database Structure')
		{
			$mode = 'text/x-mysql';
		}
		else
		{
			$mode = 'application/x-httpd-php';
		}
        
    }

}