<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tocheck */

$this->title = 'Create Comment';
$this->params['breadcrumbs'][] = ['label' => 'Tochecks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tocheck-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
