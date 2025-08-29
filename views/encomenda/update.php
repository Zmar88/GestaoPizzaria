<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Encomenda */

$this->title = 'Update Encomenda: ' . $model->id_encomenda;
$this->params['breadcrumbs'][] = ['label' => 'Encomendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_encomenda, 'url' => ['view', 'id' => $model->id_encomenda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="encomenda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
