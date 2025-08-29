<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EncomendaPizza */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encomenda-pizza-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_pizza')->textInput() ?>

    <?= $form->field($model, 'id_encomenda')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
