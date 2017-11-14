<?php
/* @var $this GrouppController */
/* @var $model Groupp */

$this->breadcrumbs=array(
	'Groupps'=>array('index'),
	$model->idGroup,
);

$this->menu=array(
	array('label'=>'List Groupp', 'url'=>array('index')),
	array('label'=>'Create Groupp', 'url'=>array('create')),
	array('label'=>'Update Groupp', 'url'=>array('update', 'id'=>$model->idGroup)),
	array('label'=>'Delete Groupp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idGroup),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Groupp', 'url'=>array('admin')),
);
?>

<!---------------------- Groups ------------------------->
<br><h1><b>Groups</b> in your profile </h1>
<?php
//$this->renderPartial('groupsAdded'); //, array('model'=>$model)); //, 'idEmployee'=>$model->idEmployee))
?>

<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idGroup',
		'nameGroup',
	),
)); 
 ?>
