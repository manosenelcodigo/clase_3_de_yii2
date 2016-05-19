<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="<?php echo Yii::$app->homeUrl ?>/css/materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::$app->homeUrl ?>/css/azul/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php $this->beginBody() ?>
    <hr>
    <?php echo $content; ?>
    <hr>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
