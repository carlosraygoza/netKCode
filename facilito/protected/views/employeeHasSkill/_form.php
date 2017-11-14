<?php
/* @var $this EmployeeHasSkillController */
/* @var $model EmployeeHasSkill */
/* @var $form CActiveForm */
?>

 <?php
    $_id = Yii::app()->user->getId();    
    //query to know if the current skill is added to signed-in employee 
    $sql="SELECT * FROM employee_has_Skill
    INNER JOIN Employee
    ON employee_has_Skill.idEmployee = Employee.idEmployee
    INNER JOIN Location
    ON Employee.idLocation = Location.idLocation
    WHERE Employee.idEmployee = $_id and employee_has_Skill.idSkill = $idSkill";
    $command = Yii::app()->db->createCommand($sql)->queryRow();
    ?>

    <?php //Text changes if skill is added
    if(!$command){ //skill not in My profile ?>
    <br/><h1> Want to <b>add</b> this skill to your profile? </h1>
    <p>Fill the options below and submit!</p>
    <?php }else{ //skill in profile ?>
    <br/><h1> Want to <b>update</b> this skill to your profile? </h1>
    <p>Change the options below and submit!</p>
    <?php } ?>
    <!-- Table with the dropdown list of lvl Interest&Expertise-->
    <?php
    $expertise = $command['levelExpertise'];
    $interest = $command['levelInterest'];
    $trainer = $command['IsTrainer'];
    $idEhs = $command['idEhs'];

    ?>
    
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'employee-has-skill-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

<!--    <p class="note">Fields with <span class="required">*</span> are required.</p>-->
    <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <?php $form->labelEx($model,'idEmployee'); ?>
         <!-- array inside textfiel assign the value to the new var -->
        <?php echo $form->hiddenField($model,'idEmployee',array('value'=>$idEmployee)); ?>
        <?php echo $form->error($model,'idEmployee'); ?>
    </div>

    <div class="row">
        <?php $form->labelEx($model,'idSkill'); ?>
        <!-- array inside textfiel assign the value to the new var -->
        <?php echo $form->hiddenField($model, 'idSkill', array('value'=>$idSkill)); ?>
        <?php echo $form->error($model,'idSkill'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'levelExpertise'); ?>
        <?php echo $form->dropDownList($model, 'levelExpertise', array('0' => '0 = No experience', '1' => '1 = Basic knowledge', '2' => '2 = Experienced', '3' => "3 = Guru"), array('empty' => '(Select an option)')); ?>
        <?php echo $form->error($model,'levelExpertise'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'levelInterest'); ?>
        <?php echo $form->dropDownList($model,'levelInterest', array('0' => '0 = Leave me alone', '1' => '1 = Sounds cool','2' => '2 = Interested', '3' => "3 = Can't get enough!"), array('empty' => '(Select an option)')); ?>
        <?php echo $form->error($model,'levelInterest'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'IsTrainer'); ?>
        <?php echo $form->dropDownList($model,'IsTrainer', array('0' => 'No', '1' => 'Yes!'), array('empty' => '(Select an option)')); ?>
        <?php echo $form->error($model,'IsTrainer'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Submit'); ?>
    </div>
 <?php 
    if($command){
          echo CHtml::link('Delete',"#", array("submit"=>array('employeeHasSkill/delete', 'id'=>$model->idEhs, 'idSkill'=>$idSkill), 'confirm' => 'Are you sure?')); 
    }?>
    <?php $this->endWidget(); ?>
   

</div><!-- form -->