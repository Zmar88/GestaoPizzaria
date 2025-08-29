<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Quem somos?';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about about-section">
    <h1><p style="font-family: Courier New, Courier, monospace;">
    <b><?= Html::encode($this->title) ?></b></p></h1>

    <h3 style="color:#00ced1;">
        Bem vindo ao programa gestor da pizzaria!
    </h3>
    <h4>
    Este é um projeto desenvolvido no âmbito da disciplina de Engenharia de Software, em que foi desenvolvido
    um sistema que permite gerir o banco de dados de uma Pizzaria de entregas ao domincílio.
    </h4>


    <!-- <code><?= __FILE__ ?></code> -->

    <p></p>
    <p ><img src="https://www.gourmex.com/images/sliderPromo/pizzas-slider.jpg"
    width="500" ></img></p>

        <h4 style="text-align: left; " >
    <b>Este projeto é da autoria de:</b> <p></p>
    <li style="color:#00ced1;"><span style="color:white">João Miranda <span style="color:#00FF7F">nº23416</span></span></li>
    <li style="color:#00ced1;"><span style="color:white">Leonardo Andrade <span style="color:#00FF7F">nº23415</span></span></li>

    </h4>
</div>


<style>
.about-section {
  padding: 50px;
  text-align: center;
  background-color: #2f4f4f;
  color: white;
}
h4, .h4, h5, .h5, h6, .h6 {
    margin-top: 10px;
    margin-bottom: 50px;
}

h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 20px;
    margin-bottom: 40px;
}
img {
    border: 0;
    margin-bottom: 20px;
}

</style>