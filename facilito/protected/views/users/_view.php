<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<!-- Este documento es para la impresión de datos de los usuarios - CRUD -->

<div class="media">

	<b>
	<br />
<div class="media-body">
    <h1 class="media-heading"> 
        <b><?php //echo CHtml::encode($data->getAttributeLabel('username')); ?></b>
	<?php echo CHtml::encode($data->username); ?>
	<br/>
    </h1>
</div>
    <?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>