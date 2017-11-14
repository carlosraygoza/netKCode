<?php
/* @var $this GroupHasEmployeeController */
/* @var $data GroupHasEmployee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idGhe')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idGhe), array('view', 'id'=>$data->idGhe)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idGroup')); ?>:</b>
	<?php echo CHtml::encode($data->idGroup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEmployee')); ?>:</b>
	<?php echo CHtml::encode($data->idEmployee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isAdmin')); ?>:</b>
	<?php echo CHtml::encode($data->isAdmin); ?>
	<br />


</div>