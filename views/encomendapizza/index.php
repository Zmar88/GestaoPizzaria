<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EncomendaPizzaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Encomenda Pizzas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encomenda-pizza-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Encomenda Pizza', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'num_pizza',
            'id_encomenda',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
