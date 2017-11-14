<?php
/* @var $this GroupHasEmployeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Group Has Employees',
);

$this->menu=array(
	array('label'=>'Create GroupHasEmployee', 'url'=>array('create')),
	array('label'=>'Manage GroupHasEmployee', 'url'=>array('admin')),
);
?>

<h1>Group Has Employees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
