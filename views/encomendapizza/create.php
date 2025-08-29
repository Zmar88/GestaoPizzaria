<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EncomendaPizza */

$this->title = 'Create Encomenda Pizza';
$this->params['breadcrumbs'][] = ['label' => 'Encomenda Pizzas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encomenda-pizza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
