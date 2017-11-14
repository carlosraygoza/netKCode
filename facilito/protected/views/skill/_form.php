<?php
/* @var $this SkillController */
/* @var $model Skill */
/* @var $form CActiveForm */
?>

<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'skill-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>
    <!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->
    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'nameSkill'); ?>
        <?php echo $form->textField($model,'nameSkill',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'nameSkill'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'complexity'); ?>
        <?php echo $form->textField($model,'complexity',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'complexity'); ?>
    </div>
    
    <div class="row">
       <?php echo $form->labelEx(SkillHasSkill::model(), 'idSkill_parent'); ?>
       <?php echo $form->textField(SkillHasSkill::model(), 'idSkill_parent'); ?>
       <?php echo $form->error(SkillHasSkill::model(), 'idSkill_parent'); ?>
        
        <!-- drop down list to get all data of skills -->
        <?php echo $form->dropDownList($model, 'nameSkill', CHtml::listData(Skill::model()->findAll(), 'idSkill', 'nameSkill'), array('empty' => 'N/A'));?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'descriptionSkill'); ?>
        <?php echo $form->textField($model,'descriptionSkill',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'descriptionSkill'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->