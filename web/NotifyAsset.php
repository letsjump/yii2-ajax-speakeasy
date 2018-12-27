<?php
/**
 * @package   yii2-easy-ajax
 * @author    Gianpaolo Scrigna <letsjump@gmail.com>
 * @link https://github.com/letsjump/yii2-easy-ajax
 * @copyright Copyright &copy; Gianpaolo Scrigna, beintech.it, 2018
 * @version   $version
 */

namespace letsjump\easyAjax\web;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 *
 * @since 0.1
 */
class NotifyAsset extends AssetBundle
{
    
    public $sourcePath = '@bower/remarkable-bootstrap-notify';
    
    public $js = [
        'bootstrap-notify.js'
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }
    
}
