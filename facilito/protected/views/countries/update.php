<h1> Actualizando el país # <?php echo $model->id ?> </h1>
<?php
//widget del framework para crear formularios
//this es el controlador countries.
//controllers hijos de CController tienen el metodo widget 
//inicio de formulario
$form = $this->beginWidget("CActiveForm");?>
<!-- CAMPOS -->
<?php
//TextField recibe modelo y nombre
echo $form->TextField($model, "name");
//error
echo $form->error($model, "name"); ?>

<?php
//TextField recibe modelo y nombre
echo $form->TextField($model, "status");
//error
echo $form->error($model, "status"); ?>

<?php
// boton de submit, + array(con la clase CSS)
echo CHtml::submitButton("Actualizar", array("class"=> "btn btn-primary btn-large"));
?>

<?php 
//cierre de formulario
$this->endWidget(); ?>