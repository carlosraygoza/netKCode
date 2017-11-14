<?php
/* @var $this SkillController */
/* @var $data Skill */
?>

<div class="view">
<?php
    /*
    $sql="SELECT nameSkill FROM skill WHERE idSkill=$data->idSkill";
    $command=Yii::app()->db->createCommand($sql)->queryRow();
    echo $command['nameSkill'];
    
    echo CHtml::dropDownList('listname', $data, 
              array('M' => 'Male', 'F' => 'Female'
    ));
    
    /////
    $opts = CHtml::listData(Skill::model()->findAll(),'idSkill','idSkill');
    //to check list
    print_r($opts);
    echo CHtml::dropDownList($data,'idSkill',$data->getName()); 
    
    */
    
              
    ?>
    
    <!-- all info shown -->
    <?php  echo CHtml::encode($data->getAttributeLabel('nameSkill')); ?>:
	<?php  echo CHtml::link(CHtml::encode($data->nameSkill), array('view', 'id'=>$data->idSkill)); ?>
	<br/>

	<!-- 
	<b><?php // echo CHtml::encode($data->getAttributeLabel('idSkill')); ?>:</b>
	<?php // echo CHtml::link(CHtml::encode($data->idSkill), array('view', 'id'=>$data->idSkill)); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('descriptionSkill')); ?>:</b>
	<?php // echo CHtml::encode($data->descriptionSkill); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('complexity')); ?>:</b>
	<?php // echo CHtml::encode($data->complexity); ?>
	<br />
-->

</div>