<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
    //'Employees'=>array('index'),
    //$model->idEmployee,
);

$this->menu=array(
    array('label'=>'List Employee', 'url'=>array('index')),
    array('label'=>'Create Employee', 'url'=>array('create')),
    array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->idEmployee)),
    array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEmployee),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nameEmployee; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        //'idEmployee',
        //'nameEmployee',
        //'username',
        //'password',
        'idDirectSupervisor',
        //'namePicture',
        //'typePicture',
        //'sizePicture',
        'businessUnit',
        'discipline',
        'idTeam',
        'hiringDate',
        'pdc',
        'idLocation',
        'hide',
    ),
)); ?>
<!---------------------- skill ------------------------->
<br><h1><b>Skills</b> in your profile </h1>
<?php
$this->renderPartial('skillTable', array('model'=>$model, 'idEmployee'=>$model->idEmployee))
?>
<!---------------------- groups ------------------------>
<br><h1><b>Groups</b> in your profile </h1>
<?php
$this->renderPartial('groupTable', array('model'=>$model, 'idEmployee'=>$model->idEmployee))
?>
<!---------------------- roles ------------------------>
<h1> Roles </h1>


<?php 
?>
