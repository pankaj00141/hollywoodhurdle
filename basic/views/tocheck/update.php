<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tocheck */

$this->title = 'Update Comment: ' . $model->post_id;
$this->params['breadcrumbs'][] = ['label' => 'Tochecks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->post_id, 'url' => ['view', 'id' => $model->post_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tocheck-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>



