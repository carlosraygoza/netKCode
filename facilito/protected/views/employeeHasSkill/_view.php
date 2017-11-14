<?php
/* @var $this EmployeeHasSkillController */
/* @var $data EmployeeHasSkill */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEhs')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEhs), array('view', 'id'=>$data->idEhs)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSkill')); ?>:</b>
	<?php echo CHtml::encode($data->idSkill); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEmployee')); ?>:</b>
	<?php echo CHtml::encode($data->idEmployee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('levelExpertise')); ?>:</b>
	<?php echo CHtml::encode($data->levelExpertise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('levelInterest')); ?>:</b>
	<?php echo CHtml::encode($data->levelInterest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsTrainer')); ?>:</b>
	<?php echo CHtml::encode($data->IsTrainer); ?>
	<br />


</div>