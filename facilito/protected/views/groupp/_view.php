<?php
/* @var $this GrouppController */
/* @var $data Groupp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameGroup')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nameGroup), array('view', 'id'=>$data->idGroup)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameGroup')); ?>:</b>
	<?php echo CHtml::encode($data->nameGroup); ?>
	<br />


</div>