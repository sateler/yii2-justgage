<?php

/**
 * JustGageAssets class file.
 *
 * @author Simon Smith <simon@simonsmith.ca>
 * @link https://github.com/simonmesmith/yii2-justgage/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @version 
 */

namespace simonmesmith\justgage;

use yii\web\AssetBundle;

/**
 * Asset bundle for JustGage.
 */
class JustGageAssets extends AssetBundle
{
	
	public $sourcePath = '@vendor/simonmesmith/yii2-justgage/assets';
	public $depends = ['yii\web\JqueryAsset'];
    public $js = ['raphael.2.1.0.min.js', 'justgage.1.0.1.min.js'];

}
