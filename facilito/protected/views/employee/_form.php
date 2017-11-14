<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idEmployee'); ?>
		<?php echo $form->textField($model,'idEmployee'); ?>
		<?php echo $form->error($model,'idEmployee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nameEmployee'); ?>
		<?php echo $form->textField($model,'nameEmployee',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nameEmployee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idDirectSupervisor'); ?>
		<?php echo $form->textField($model,'idDirectSupervisor',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'idDirectSupervisor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namePicture'); ?>
		<?php echo $form->textField($model,'namePicture',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'namePicture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'typePicture'); ?>
		<?php echo $form->textField($model,'typePicture',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'typePicture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sizePicture'); ?>
		<?php echo $form->textField($model,'sizePicture',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sizePicture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idLocation'); ?>
		<?php echo $form->textField($model,'idLocation',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'idLocation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'businessUnit'); ?>
		<?php echo $form->textField($model,'businessUnit',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'businessUnit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discipline'); ?>
		<?php echo $form->textField($model,'discipline',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'discipline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idTeam'); ?>
		<?php echo $form->textField($model,'idTeam',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'idTeam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hiringDate'); ?>
		<?php echo $form->textField($model,'hiringDate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hiringDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pdc'); ?>
		<?php echo $form->textField($model,'pdc',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pdc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hide'); ?>
		<?php echo $form->textField($model,'hide'); ?>
		<?php echo $form->error($model,'hide'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->