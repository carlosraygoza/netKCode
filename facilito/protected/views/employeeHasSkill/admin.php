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

<h1>Manage Employee Has Skills</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
