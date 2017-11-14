<?php
/* @var $this GrouppController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groupps',
);

$this->menu=array(
	array('label'=>'Create Groupp', 'url'=>array('create')),
	array('label'=>'Manage Groupp', 'url'=>array('admin')),
);
?>

    <h1>Group Editor</h1>
    <table style="width:auto">
        <tr>
            <th> Want to create a new group? </th>
            <th> Or want to edit an existent? </th>
        </tr>
        <tr>
            <th>
                <input type="text">
            </th>
            <th>
                <select>
    <option value="cero"> - Select an option </option>
    </select>
            </th>
        </tr>
    </table>
<!---------------------- Groups ------------------------->
<br><h1><b>Groups</b> in your profile </h1>
<?php
    $this->renderPartial('groupsAdded'); //, array('model'=>$model)); //, 'idEmployee'=>$model->idEmployee))
?>

<!-- --------------------------------------------------- -->
    <p> <?php /*echo $this->id ?></p>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    //'id' => $dataProvider->idGroup,
)); */ ?>


