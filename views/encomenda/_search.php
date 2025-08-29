<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EncomendaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encomenda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_encomenda') ?>

    <?= $form->field($model, 'vtotal') ?>

    <?= $form->field($model, 'iva') ?>

    <?= $form->field($model, 'vfinal') ?>

    <?= $form->field($model, 'num_entrega') ?>

    <?php // echo $form->field($model, 'id_cliente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
