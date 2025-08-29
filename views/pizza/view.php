<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pizza */
$nome= $model->nome;

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Pizzas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pizza-view">


<script>
function funcao1()
{
alert("Item adicionado ao carrinho!!!");
}
</script>

    <h1 class="stripe-text"><?= Html::encode($this->title) ?></h1>

    <p>
        <?php Html::a('Update', ['update', 'id' => $model->num_pizza], ['class' => 'btn btn-primary'],  ['visible' => !Yii::$app->user->isGuest]) ?>
        <?php Html::a('Delete', ['delete', 'id' => $model->num_pizza], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ], ['visible' => !Yii::$app->user->isGuest]) ?>
    </p>


        <p><img src="https://img.itdg.com.br/images/recipes/000/000/324/323149/323149_original.jpg" ></p>
        </br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'num_pizza',
            'nome',
            //'precocusto',
            'precovenda',
            'qtde',
            //'validade',
        ],
    ]) ?>
    <form action="/php/TrabalhoEds/basic/views/site/carrinho.php" method="POST">
     <input type="hidden" name="nome" value=" <?php echo $nome?>"> 
    <button type="submit" class="btn btn-warning" onclick="funcao1()">Adicionar ao carrinho!</button>
    </form>
</div>

<style>
img {
    vertical-align: middle;
    size: 50%;
    height: 300px;
    align-self: center;
    align-content: center;
    padding-left: 20%;
}


.stripe-text {
    position: relative;
    $random-text: 'quick turnover';
    $stroke-width: $extra-large * 0.05;
     font-size: $extra-large;
     text-transform: uppercase;
    font-weight: 900;
    font-family: 'Catamaran', sans-serif;
    font-style: italic;
  }