<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
    <!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
    <!----------------------- title ----------------------->
    <title>
        <?php echo CHtml::encode($this->pageTitle); ?>
    </title>
</head>

<body>
    <!----------------------- page ----------------------->
    <div class="container" id="page">
        <!----------------------- header ----------------------->
        <div id="header">
            <div id="logo">
                <?php echo CHtml::encode(Yii::app()->name); ?>
            </div>
        </div>
        <!----------------------- mainmenu ----------------------->
        <div id="mainmenu">
            <?php $this->widget('zii.widgets.CMenu',array(
			 'items'=>array(
            array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Group Editor', 'url'=>array('/groupp'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Skill Editor', 'url'=>array('/skill'/*, 'view'=>'about'*/), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Search', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Wiki', 'url'=>array('/site/page', 'view'=>'wiki'), 'visible'=>!Yii::app()->user->isGuest),
            //array('label'=>'Login', 'url'=>array(''), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Welcome '.Yii::app()->user->name.'', 'url'=>array('/employee'), 'view'=>'view', 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Log out', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            )));
            ?>
        </div>
        <!----------------------- breadcrumbs ----------------------->
        <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
        <?php endif?>
        <!----------------------- content ----------------------->
        <?php echo $content; ?>
        <!----------------------- footer ----------------------->
        <div id="footer">
            Copyright &copy;
            <?php echo date('Y'); ?> Continental Corporation<br/>
            <?php echo CHtml::link('Comments or Suggestions', $this->createAbsoluteUrl('/site/contact',array('url'=>array('site/contact')))); ?>
        </div>
    </div>
</body>

</html>