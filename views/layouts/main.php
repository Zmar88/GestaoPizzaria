<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Pizzaria'/*Yii::$app->name*/,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Quem somos?', 'url' => ['/site/about'] , 'visible' => Yii::$app->user->isGuest],
            ['label' => 'Pizzas', 'url' => ['/pizza'], 'visible' => Yii::$app->user->isGuest],
            ['label' => 'Carrinho', 'url' => ['/site/contact'], 'visible' => Yii::$app->user->isGuest],
            //ADMIN
            ['label' => 'Clientes', 'url' => ['/cliente'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="admin" ],
            ['label' => 'Encomendas', 'url' => ['/encomenda'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="admin" ],
            ['label' => 'Entregas', 'url' => ['/entrega'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="admin" ],
            ['label' => 'Fornecedor', 'url' => ['/fornecedor'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="admin" ],
            ['label' => 'Funcionarios', 'url' => ['/funcionario'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="admin" ],
            ['label' => 'Pizzas', 'url' => ['/pizza'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="admin" ],
            ['label' => 'Turnos', 'url' => ['/turno'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="admin" ],
            ['label' => 'Ingredientes', 'url' => ['/ingrediente'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="admin" ],
            ['label' => 'Codigos Postais', 'url' => ['/codpostal'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="admin" ],
            //Cozinha
            ['label' => 'Turnos', 'url' => ['/turno'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="cozinha" ],
            ['label' => 'Ingredientes', 'url' => ['/ingrediente'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="cozinha" ],
            ['label' => 'Pizzas', 'url' => ['/pizza'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="cozinha" ],
            ['label' => 'Encomendas', 'url' => ['/encomenda'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="cozinha" ],
            //Entregador
            ['label' => 'Turnos', 'url' => ['/turno'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="entregador" ],
            ['label' => 'Encomendas', 'url' => ['/encomenda'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="entregador" ],
            ['label' => 'Entregas', 'url' => ['/entrega'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="entregador" ],
            //Armazem
            ['label' => 'Turnos', 'url' => ['/turno'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="armazem" ],
            ['label' => 'Ingredientes', 'url' => ['/ingrediente'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="armazem" ],
            //Balcao
            ['label' => 'Turnos', 'url' => ['/turno'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="balcao" ],
            ['label' => 'Encomendas', 'url' => ['/encomenda'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="balcao" ],
            ['label' => 'Clientes', 'url' => ['/cliente'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="balcao" ],
            ['label' => 'Codigos Postais', 'url' => ['/codpostal'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="balcao" ],
            //Cliente
            ['label' => 'Pizzas', 'url' => ['/pizza'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="cliente" ],
            ['label' => 'Carrinho', 'url' => ['/site/contact'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="cliente" ],
            ['label' => 'Perfil', 'url' => ['/custom'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="cliente" ],
            //EXEMPLO
            ['label' => 'Clientess', 'url' => ['/cliente'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username=="code.epicenter" ],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'                
            )


        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; João Miranda & Leonardo Andrade <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
