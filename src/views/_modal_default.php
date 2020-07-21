<?php
/**
 *
 *  * @package   yii2-easy-ajax
 *  * @author    Gianpaolo Scrigna <letsjump@gmail.com>
 *  * @link https://github.com/letsjump/yii2-easy-ajax
 *  * @copyright Copyright &copy; Gianpaolo Scrigna, beintech.it, 2017-2020
 *  * @version   1.0.0
 *
 */

/**
 * @var \letsjump\easyAjax\EasyAjax $widget
 */

use yii\bootstrap\Modal;

?>

<?php Modal::begin([
    'header'  => '<h4 class="modal-title">Title</h4>',
    'footer'  => '',
    'id'      => $widget->configuration['modal']['id'],
    'size'    => Modal::SIZE_DEFAULT,
    'options' => [
        'tabindex' => false, // important for Select2 to work properly
    ],
]) ?>
    <div id='systemModalContent'></div>
<?php Modal::end(); ?>

