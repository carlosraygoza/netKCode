<?php
/* @var $this GrouppController */
/* @var $model Groupp */

$this->breadcrumbs=array(
	'Groupps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Groupp', 'url'=>array('index')),
	array('label'=>'Manage Groupp', 'url'=>array('admin')),
);
?>

<h1>Create Groupp</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>