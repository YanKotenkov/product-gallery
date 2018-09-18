<?php
/**
 * @var \app\models\ar\Product $product
 */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
?>
<?= Html::a('Изменить', Url::to(['edit', 'id' => $product->id]), ['class' => 'btn btn-default']) ?>
<?= Html::a('Удалить', Url::to(['delete', 'id' => $product->id]), ['class' => 'btn btn-danger']) ?>
<?= DetailView::widget([
    'model' => $product,
]) ?>

