<?php
/* @var $this SkillHasSkillController */
/* @var $data SkillHasSkill */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSkill_has_Skill')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSkill_has_Skill), array('view', 'id'=>$data->idSkill_has_Skill)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSkill_parent')); ?>:</b>
	<?php echo CHtml::encode($data->idSkill_parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSkill_child')); ?>:</b>
	<?php echo CHtml::encode($data->idSkill_child); ?>
	<br />


</div>