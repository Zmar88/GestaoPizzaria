<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EncomendaPizza */

$this->title = 'Update Encomenda Pizza: ' . $model->id_encomenda;
$this->params['breadcrumbs'][] = ['label' => 'Encomenda Pizzas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_encomenda, 'url' => ['view', 'id' => $model->id_encomenda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="encomenda-pizza-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
