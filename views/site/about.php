<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <hr>
    
    <p>
        <?php echo Html::a(
            'index',
            "http://www.manosenelcodigo.com",
            //['site/index'],
            [
                'title' => 'manosenelcódigo'
            ]
        ); ?>
    </p>
    <p>
        <?php echo Html::img(
        '@web/web/img/manos-en-el-codigo.png',
         [
             'alt' => '#manoenelcódigo',
         ]
        ); ?>
    </p>
    
    <hr>
    
    
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
