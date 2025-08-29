<?php

/* @var $this yii\web\View */

$this->title = 'Pizzaria Online';
?>
<div class="site-index"></div>

<div class="bg-text">

    <div class="jumbotron" style="color:#ffff; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
        <h1>Sistema de Gestão</h1>

        <p class="lead"> de uma Pizzaria de Entregas ao Domincílio</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">

    <p><h4 style="text-align:center"><kbd>Aqui poderás gerir e contribuir para a gestão da pizzaria tendo em conta o teu cargo</kbd></h4></p>
    <p></p>
    
    </div>
    </div>


<style>

.site-index{
    filter: blur(2px);
    -webkit-filter: blur(2px);
    height: 700px;
    background-size:cover;
    background-image: url(https://diariodorio.com/wp-content/uploads/2020/07/daleopizzaria_20200710_144435_0.jpg);
}

.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  padding: 20px;
  text-align: center;
}
</style>