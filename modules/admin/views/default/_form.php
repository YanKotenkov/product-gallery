<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\ar\Product $product
 */
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'method' => 'POST',
]) ?>
<?= $form->field($product, 'name') ?>
<?= $form->field($product, 'description') ?>
<?= \yii\helpers\Html::submitButton($product->isNewRecord ? 'Создать' : 'Изменить') ?>
<?php
ActiveForm::end();