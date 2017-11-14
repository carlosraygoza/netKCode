<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('idEmployee')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idEmployee), array('view', 'id'=>$data->idEmployee)); ?>
    <br />

   <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
    <?php echo CHtml::encode($data->username); ?>
    <br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('nameEmployee')); ?>:</b>
    <?php echo CHtml::encode($data->nameEmployee); ?>
    <br />

       <b><?php echo CHtml::encode($data->getAttributeLabel('idDirectSupervisor')); ?>:</b>
       <?php echo CHtml::encode($data->idDirectSupervisor); ?>
	<br />
      
       <b><?php echo CHtml::encode($data->getAttributeLabel('businessUnit')); ?>:</b>
	<?php echo CHtml::encode($data->businessUnit); ?>
	<br />
   
   	<b><?php echo CHtml::encode($data->getAttributeLabel('discipline')); ?>:</b>
	<?php echo CHtml::encode($data->discipline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTeam')); ?>:</b>
	<?php echo CHtml::encode($data->idTeam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hiringDate')); ?>:</b>
	<?php echo CHtml::encode($data->hiringDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pdc')); ?>:</b>
	<?php echo CHtml::encode($data->pdc); ?>
    <br />
   
    
    	<b><?php echo CHtml::encode($data->getAttributeLabel('idLocation')); ?>:</b>
	<?php echo CHtml::encode($data->idLocation); ?>
	<br />
    <!-- 
    <b><?php /* echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password);  ?>
    <br/> 
    
    <b><?php /* echo CHtml::encode($data->getAttributeLabel('namePicture')); ?>:</b>
	<?php echo CHtml::encode($data->namePicture);   ?>
        <br /> 

       
        <b><?php echo CHtml::encode($data->getAttributeLabel('typePicture')); ?>:</b>
        <?php echo CHtml::encode($data->typePicture); ?>
        <br />

        <?php 
	<b><?php echo CHtml::encode($data->getAttributeLabel('sizePicture')); ?>:</b>
	<?php echo CHtml::encode($data->sizePicture); ?>
	<br /> 

	<b><?php echo CHtml::encode($data->getAttributeLabel('hide')); ?>:</b>
	<?php echo CHtml::encode($data->hide); ?>
	<br />

	*/ ?>
-->
        </div>