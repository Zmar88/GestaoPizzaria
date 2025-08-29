<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PizzarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pizza-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'num_pizza') ?> -->

    <?= $form->field($model, 'nome') ?>

    <!-- <?= $form->field($model, 'precocusto') ?> -->

    <?= $form->field($model, 'precovenda') ?>

    <!-- <?= $form->field($model, 'qtde') ?> -->

    <?php // echo $form->field($model, 'validade') ?>

    <div class="form-group">
        <?= Html::submitButton('Pesquisar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpar Filtro', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
