<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\UserAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

UserAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
    
    <!-- Navbar -->
    <?php 
        $this->beginContent('@app/views/layouts/page-user/header.php');
        $this->endContent();
    ?>
    <!-- /.navbar -->

    <!-- Content -->
    <?= $this->render(
        '@app/views/layouts/page-employee/content.php',
        [
            'content' => $content,
        ]
    ) ?>
    <!-- /.content -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
