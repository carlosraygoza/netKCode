<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
//$this->breadcrumbs=array(
//	'Login',
//);
?>
<?php 
if(!Yii::app()->user->isGuest){
    //redirect to index if user already logged in
    $this->redirect(array("site/index"));
}else{
?>

<h1>Login</h1>

<!-- <p>Please fill out the following form with your login credentials:</p> -->

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->
    <p class="hint">
			Please log in using your Windows login details.
    </p><br>
	<div>
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Submit',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
<?php 
//end else 
} 
?>