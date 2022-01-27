<?php
use yii\helpers\Html;
use yii\bootstrap4\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<!-- Navbar -->
<nav class="navbar navbar-navbar-light" style="background-color: #f0f0f0;">

    <!-- Left navbar links -->
    
    <?php
      echo Nav::widget([ 
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => [
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
      ]);
    ?>
  </nav>
<!-- /.navbar -->