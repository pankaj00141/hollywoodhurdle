<?php
use yii\widgets\Menu;

echo " hiii"  ;


echo Menu::widget([
'activateItems' => false,
'items' => [
['label' => 'Home', 'url' => ['@deora']],
['label' => 'Products', 'url' => ['product/index']],
['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
],
]);

?>

