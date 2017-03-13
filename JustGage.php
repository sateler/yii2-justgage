<?php

/**
 * JustGage class file.
 *
 * @author Simon Smith <simon@simonsmith.ca>
 * @link https://github.com/simonmesmith/yii2-justgage/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @version 1.0.0
 */

namespace sateler\justgage;

use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\View;
use yii\helpers\Html;

class JustGage extends \yii\base\Widget
{
    /**
     * @var options
     */	
    public $options = [];

    /**
     * @var HTML options
     */	
    public $htmlOptions = [];

    public function run()
    {
        // Get or generate an ID.
        if (isset($this->htmlOptions['id'])) {
            $this->id = $this->htmlOptions['id'];
        } else {
            $this->id = $this->htmlOptions['id'] = $this->getId();
        }

        // Render the div for the chart.
        echo Html::tag('div', '', $this->htmlOptions);

        // Merge options with default options.
        $defaultOptions = [
            'id' => $this->id,
            'min' => 0,
            'max' => 100,
            'value' => 0,
            'title' => ' ',
            'showInnerShadow' => true,
            'reverseLevelColors' => true,
        ];
        $this->options = ArrayHelper::merge($defaultOptions, $this->options);
        
        // New custom config: reverseLevelColors
        if(isset($this->options['reverseLevelColors']) && $this->options['reverseLevelColors']) {
            $this->options['levelColors'] = ["#ff0000", "#f9c802", "#a9d70b"];
        }

        // Register assets.
        $this->registerAssets();

        // Render the widget.
        parent::run();
    }

    /**
     * Registers required assets.
     */
    protected function registerAssets()
    {
        // Register the necessary assets
        JustGageAssets::register($this->view);

        // Prepare and register the JavaScript code block.
        $jsOptions = Json::encode($this->options);
        $js = "jQuery('#{$this->id}').data('justgage', new JustGage($jsOptions));";
        $key = __CLASS__ . '#' . $this->id;
        $this->view->registerJs($js, View::POS_LOAD, $key);
    }
}
