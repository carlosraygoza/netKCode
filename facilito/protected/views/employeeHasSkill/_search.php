<?php
/* @var $this EmployeeHasSkillController */
/* @var $model EmployeeHasSkill */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEhs'); ?>
		<?php echo $form->textField($model,'idEhs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idSkill'); ?>
		<?php echo $form->textField($model,'idSkill'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEmployee'); ?>
		<?php echo $form->textField($model,'idEmployee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'levelExpertise'); ?>
		<?php echo $form->textField($model,'levelExpertise'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'levelInterest'); ?>
		<?php echo $form->textField($model,'levelInterest'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IsTrainer'); ?>
		<?php echo $form->textField($model,'IsTrainer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->