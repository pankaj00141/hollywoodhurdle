<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;
use app\assets\AppAsset;
use app;

// You can use the registerAssetBundle function if you'd like
AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title><?php echo Html::encode($this->title); ?></title>
<meta property='og:site_name' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:title' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:description' content='<?php echo Html::encode($this->title); ?>' />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel='stylesheet' type='text/css' href='/web/css/main.css' title='wsite-theme-css' />
<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Telex' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
<?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
<?php $this->beginBody(); ?>
<div id="wrap">
  <div id="header-container">
    <table id="header">
      <tr>
        <td id="logo"><span class='wsite-logo'><a href='/'><span id="wsite-title"><?php echo "HollywoodHurdle.com"; ?></span></a></span></td>
        <td id="header-right">
          <table>
            <tr>
              <td class="phone-number"></td>
              <td class="social"></td>
              <td class="search"></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <div id="topnav">
      <div id="nav-right">
        <div id="nav-inner">
        <?php echo Menu::widget(array(
        'options' => array('class' => 'nav'),
        'items' => array(
           array('label' => 'Home', 'url' => array('/site/index')),
           array('label' => 'About', 'url' => array('/site/about')),
           array('label' => 'Feedback', 'url' => array('/site/contact')),
            array('label' => 'Comments', 'url' => array('/tocheck/index')),

            array('label' => 'Term of Use', 'url' => array('/site/termofuse')),
            Yii::$app->user->isGuest ?
            array('label' => 'Login', 'url' => array('/site/login')) :
            array('label' => 'Logout (' . Yii::$app->user->identity->username .')' , 'url' => array('/site/logout')),
        ),
      )); ?>
          <div style="clear:both"></div>
        </div>
      </div>
    </div>
  </div>
  <div id="main">
    <div id="banner">
      <div class="wsite-header"></div>
    </div>
    <div id="content"><div id='wsite-content' class='wsite-not-footer'>
      <?php echo $content; ?>
</div>
</div>
  </div>



  <div id="footer"><?php echo "HollywoodHurdle.com"; ?>
</div>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>