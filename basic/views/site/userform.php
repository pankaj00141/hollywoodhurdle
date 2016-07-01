<?php

use yii\helpers\Html ;
use yii\bootstrap\ActiveForm;
?>

<?php
    if(Yii::$app->session->hasFlash('success')){
        echo Yii::$app->session->getFlash('session');
    }
?>

<?php  $form = Activeform::begin() ; ?>
<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>

<?= Html::submitButton('submit',['class'=>'btn btn-success']); ?>









