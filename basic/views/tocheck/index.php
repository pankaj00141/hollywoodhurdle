<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tocheck-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'post_id',
            'post_title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
