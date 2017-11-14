<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
<!--
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php // echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php // echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php // echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php // echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php // echo Yii::app()->theme->baseUrl;?>/ico/favicon.png">
-->
  </head>
  <body>
<!------------------- MENU ------------------->
<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">NetKompetenz</a>

      <div class="nav-collapse collapse pull-right">
        <?php $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array("class"=>"nav"),
          'items'=>array(
            array('label'=>'Home', 'url'=>array('/site/index')),
            array('label'=>'Group Editor', 'url'=>array('/site/groupEditor')),
            array('label'=>'Tree Editor', 'url'=>array('/site/page', 'view'=>'about')),
            array('label'=>'Search', 'url'=>array('/site/page', 'view'=>'about')),
            array('label'=>'Wiki', 'url'=>array('/site/page', 'view'=>'wiki')),
           // array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
          ),
        )); ?>

      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>



<!------------------- CONTENT ------------------->



<?php 
// almacenar si si existe msj de sesión
      /*
if(($msgs=Yii::app()->user->getFlashes())!==null): ?>
<div class="container">
    <div class="row-fluid">
        <div class="span12">       
            <?php foreach($msgs as $type => $message): ?>
                <!-- Mensaje de alerta -->
                <div class="alert alert-<?php echo $type?>">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4><?php echo ucfirst($type) ?></h4>
                    <?php echo $message ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div> 
<?php endif; */ ?> 
<?php echo $content;?>

<?php 
      /*
if(($msgs=Yii::app()->user->getFlashes())!==null and $msgs!==array()):?>
  <div class="container" style="padding-top:0">
    <div class="row-fluid">
      <div class="span12">
        <?php foreach($msgs as $type => $message):?>
          <div class="alert alert-<?php echo $type?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><?php echo ucfirst($type)?>!</h4>
            <?php echo $message?>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
<?php endif; */?>

<!------------------- FOOTER ------------------->
 <section class="footer-credits">
    <div class="container">
        <ul class="clearfix">
            <li>© 2017 Continental Corporation</li>
            <li>
            <?php
            echo CHtml::link('Comments or suggestions', $this->createAbsoluteUrl('contact',array('url'=>array('/site/contact'))));
            ?>
            </li>
        </ul>
    </div>
    <!--close footer-credits container-->
</section>

  <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>
  </body>
</html>
