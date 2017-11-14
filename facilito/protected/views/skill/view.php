<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs=array(
    //    'Skills'=>array('index'),
    //    $model->idSkill,
);

$this->menu=array(
    array('label'=>'List Skill', 'url'=>array('index')),
    array('label'=>'Create Skill', 'url'=>array('create')),
    array('label'=>'Update Skill', 'url'=>array('update', 'id'=>$model->idSkill)),
    array('label'=>'Delete Skill', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSkill),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Skill', 'url'=>array('admin')),
);
?>
<!------------------------- title ------------------------->
<h1><b></b><?php echo $model->nameSkill; ?></h1>
<!-------------------- info of skill ---------------------->
<?php 
$sql="SELECT skill_has_skill.idSkill_parent, skill_has_skill.idSkill_child, skill.nameSkill FROM skill_has_skill 
INNER JOIN skill ON skill_has_skill.idSkill_parent = skill.idSkill
WHERE skill_has_skill.idSkill_child = $idSkill
AND skill_has_skill.idSkill_parent != 0";
//$command = Yii::app()->db->createCommand($sql)->queryRow();
?>
<?php $path =Yii::app()->baseUrl.'/skill/'; ?>
<?php
$command=Yii::app()->db->createCommand($sql)->setFetchMode(PDO::FETCH_OBJ);
$rows=$command->queryAll(); 
//echo $rows[0]->nameSkill; 
//echo $rows[1]->nameSkill;
?>

<?php //information about the actual skill
$this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        //'idSkill',
        //'nameSkill',
        'descriptionSkill',
        'complexity',
    ), 
)); ?>

<?php 
//if there is any parent, not show the view
if(count($rows)!=0){
    //for to get all parents
    for($i = 0; $i < count($rows); $i++){
        // obtain name and id of parent from the query
        $idSkillparent = $rows[$i]->idSkill_parent;
        $nameParent = $rows[$i]->nameSkill;
        $a = $i+1;
        // View of the parents of the actual skill
        $this->widget('zii.widgets.CDetailView', array(
            'data'=>$model,
            'attributes'=>array(
                array(
                    'label'=>'Skill Parent '.$a.'',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($nameParent), $path .$idSkillparent),
                ), ), ));
    }} ?>
<!------------- add/update skill (employeeHasSkill) -------------->
<div>
    <?php $Ehs = Yii::app()->createController('EmployeeHasSkill');
    //if-else to know if this skill is added to employee
    if($ehs->isNewRecord){
        //render the view to add the skill to the actual employee
        $Ehs[0]->renderPartial('/employeeHasSkill/create', array('model'=> $ehs, 'idSkill'=> $idSkill, 'idEmployee'=>$idEmployee));
    }else{
        //render the view to update the skill to the actual employee
        $Ehs[0]->renderPartial('/employeeHasSkill/update', array('model'=> $ehs, 'idSkill'=> $idSkill, 'idEmployee'=>$idEmployee)); } ?>
</div>
<!------------------------- Map ------------------------->
<h1> This <b>skill</b> around the world</h1>
<p> * insert map here * </p>
<!----------------------- filters ----------------------->
<p> * insert Filters here* </p>
<!----------------- grouped by location ----------------->
<?php
$this->renderPartial('groupedLocation', array('model'=>$model, 'idSkill'=>$idSkill))
?>
<!-------------- grouped by people w/skill -------------->
<?php
if(!$ehs->isNewRecord) {
?>
<h1> Grouped by people with this skill </h1>
<?php
    $Ehs = Yii::app()->createController('EmployeeHasSkill');
    $Ehs[0]->renderPartial('/employeeHasSkill/peopleSkill', array('model'=> $tableSkill));
} ?>
<!-- 
$columnsArray = array('id','name','lastname','tel','email');
$rowsArray = array(
    array(1,'Andres','Irizarry','123-123-1234','jose@email.com'),
    array(2,'Fred','Frederick','123-123-1234','fred@email.com'),
    array(3,'Paul','Horstmann','123-123-1234','phor@email.com'),
    array(4,'Kim','Guptha','123-123-1234','kgup@email.com'),
    array(5,'Fred','Frederick','123-123-1234','fred@email.com'),
    array(6,'Elizabeth','Espiano','123-123-1234','querty@email.com'),
    array(7,'Albert','Febensburg','123-123-1234','a@email.com'),
    array(8,'Dan','Sieg','123-123-1234','da@email.com'),
    array(9,'Janice','Breyfogle','123-123-1234','janice@email.com'),
    array(10,'Cesar','Subots','123-123-1234','potapes@email.com'),  
);

$this->widget('ext.htmltableui.htmlTableUi',array(
    'ajaxUrl'=>'site/handleHtmlTable',
    'arProvider'=>'',    
    'collapsed'=>false,
    'columns'=>$columnsArray,
    'cssFile'=>'',
    'editable'=>true,
    'enableSort'=>true,
    'exportUrl'=>'site/exportTable',
    'extra'=>'export',
    // 'footer'=>'Total rows: '.count($rowsArray).' By: José Rullán',
    'formTitle'=>'Form Title',
    'rows'=>$rowsArray,
    'sortColumn'=>1,
    'sortOrder'=>'desc',
    // 'subtitle'=>'Rev 1.3.5',
    //'title'=>'Table 2',
));

-->
