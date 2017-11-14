<h1> Create countries </h1>
<?php
//widget del framework para crear formularios
//this es el controlador countries.
//controllers hijos de CController tienen el metodo widget 
//inicio de formulario
$form = $this->beginWidget("CActiveForm");?>
<!-- CAMPOS -->
<b> Nombre </b><br>
<?php
//TextField recibe modelo y nombre
echo $form->TextField($model, "name");
//error
echo $form->error($model, "name"); ?>
<br> <b> Status </b> <br>
<?php
//TextField recibe modelo y nombre
echo $form->TextField($model, "status");
//error
echo $form->error($model, "status"); ?>
<br> 
<?php
// boton de submit, + array(con la clase CSS)
echo CHtml::submitButton("Crear", array("class"=> "btn btn-primary btn-large"));
?>

<?php 
//cierre de formulario
$this->endWidget(); ?>