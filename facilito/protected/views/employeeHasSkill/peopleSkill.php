<?php
/* @var $this EmployeeHasSkillController */
/* @var $model EmployeeHasSkill */

$this->breadcrumbs=array(
	'Employee Has Skills'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EmployeeHasSkill', 'url'=>array('index')),
	array('label'=>'Create EmployeeHasSkill', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#employee-has-skill-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-has-skill-grid',
    
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'idEhs',
		'idSkill',
		'idEmployee',
        'idEmployee0.nameEmployee',
        'idEmployee0.idTeam',
        'idEmployee0.idLocation',
        'levelExpertise',
		'levelInterest',
		//'IsTrainer',
	),
)); ?>
