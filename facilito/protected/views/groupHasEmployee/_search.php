<?php
/* @var $this GroupHasEmployeeController */
/* @var $model GroupHasEmployee */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idGhe'); ?>
		<?php echo $form->textField($model,'idGhe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idGroup'); ?>
		<?php echo $form->textField($model,'idGroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEmployee'); ?>
		<?php echo $form->textField($model,'idEmployee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isAdmin'); ?>
		<?php echo $form->textField($model,'isAdmin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->