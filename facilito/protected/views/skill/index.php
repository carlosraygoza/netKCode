<?php
/* @var $this SkillController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Skills',
);

$this->menu=array(
	array('label'=>'Add new Skill', 'url'=>array('create')),
	array('label'=>'Manage Skill', 'url'=>array('admin')),
);
?>

<h1>Skills</h1>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
