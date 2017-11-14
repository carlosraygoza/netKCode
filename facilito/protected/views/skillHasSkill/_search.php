<?php
/* @var $this SkillHasSkillController */
/* @var $model SkillHasSkill */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSkill_has_Skill'); ?>
		<?php echo $form->textField($model,'idSkill_has_Skill'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idSkill_parent'); ?>
		<?php echo $form->textField($model,'idSkill_parent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idSkill_child'); ?>
		<?php echo $form->textField($model,'idSkill_child'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->