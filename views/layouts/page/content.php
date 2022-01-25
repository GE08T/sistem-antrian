<?php
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<div class="content-wrapper">
    <section class="content-header">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>