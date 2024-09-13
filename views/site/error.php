<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">
    <?php echo Html::img('@web/' . '403.png', ['alt' => '', 'width' => 600, 'class' => 'img-responsive']); ?>
</div>
