<?php

/**
 * JustGageAssets class file.
 *
 * @author Simon Smith <simon@simonsmith.ca>
 * @link https://github.com/simonmesmith/yii2-justgage/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @version 
 */

namespace sateler\justgage;

use yii\web\AssetBundle;

/**
 * Asset bundle for JustGage.
 */
class JustGageAssets extends AssetBundle
{
    public $sourcePath = '@npm/justgage';

    public $js = [
        'raphael-2.1.4.min.js',
        'justgage.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
