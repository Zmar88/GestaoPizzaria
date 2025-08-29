<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<div class="site-about about-section">
    <h1><p style="font-family: Courier New, Courier, monospace;">
    <b><?= Html::encode($this->title) ?></b></p></h1>

    <h3 style="color:#fae6f5;">
       De momento o seu carrinho está vazio!
    </h3>
    <h4>
    Vá ao menu Pizzas e selecione uma pizza que pretende adicionar ao seu carrinho!
    </h4>


    <!-- <code><?= __FILE__ ?></code> -->

    <p></p>
    <p ><img src="https://cdn3.iconfinder.com/data/icons/shopping-and-ecommerce-29/90/empty_cart-512.png"
    width="500" ></img></p>

</div>


<style>
.about-section {
  padding: 50px;
  text-align: center;
  background-color:#633959 ;
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