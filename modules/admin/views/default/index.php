<?php
/**
 * @var \yii\web\View $this
 * @var \yii\data\ActiveDataProvider $dataProvider
 */
use yii\grid\GridView;
use yii\helpers\Html;

?>
<?= Html::a('Создать', \yii\helpers\Url::to('create'), ['class' => 'btn btn-primary']) ?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
]) ?>
