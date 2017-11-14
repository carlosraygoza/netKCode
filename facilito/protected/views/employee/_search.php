<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEmployee'); ?>
		<?php echo $form->textField($model,'idEmployee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nameEmployee'); ?>
		<?php echo $form->textField($model,'nameEmployee',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idDirectSupervisor'); ?>
		<?php echo $form->textField($model,'idDirectSupervisor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namePicture'); ?>
		<?php echo $form->textField($model,'namePicture',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'typePicture'); ?>
		<?php echo $form->textField($model,'typePicture',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sizePicture'); ?>
		<?php echo $form->textField($model,'sizePicture',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idLocation'); ?>
		<?php echo $form->textField($model,'idLocation',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'businessUnit'); ?>
		<?php echo $form->textField($model,'businessUnit',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discipline'); ?>
		<?php echo $form->textField($model,'discipline',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTeam'); ?>
		<?php echo $form->textField($model,'idTeam',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hiringDate'); ?>
		<?php echo $form->textField($model,'hiringDate',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pdc'); ?>
		<?php echo $form->textField($model,'pdc',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hide'); ?>
		<?php echo $form->textField($model,'hide'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->