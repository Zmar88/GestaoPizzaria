<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PizzarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pizzas disponiveis para Venda!';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pizza-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!-- 
    <p>
        <?= Html::a('Create Pizza', ['create'], ['class' => 'btn btn-success'], ['visible' => !Yii::$app->user->isGuest],) ?>
    </p> -->

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'num_pizza',
            'nome',
            //'precocusto',
            'precovenda',
            //'qtde',
            //'validade',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>

</div>
