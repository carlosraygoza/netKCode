<?php
/* @var $this SkillController */
/* @var $model Skill */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSkill'); ?>
		<?php echo $form->textField($model,'idSkill'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nameSkill'); ?>
		<?php echo $form->textField($model,'nameSkill',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descriptionSkill'); ?>
		<?php echo $form->textField($model,'descriptionSkill',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complexity'); ?>
		<?php echo $form->textField($model,'complexity',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->