<h1> Countries </h1>
<?php echo CHtml::link("Crear", array("create")) ?>
<!-- aceder mediante el array "countries" (enviado desde el controlador) -->
<?php foreach($countries as $data): //Cada iteración será una instancia del modelo ?>

<h3>
    <label class="badge badge-info"><?php echo $data->id; ?></label> 
    <?php echo $data->name; ?>
    <!-- createUrl para crear links (ruta, array con los parametros -clave valor-) -->
    <a href="<?php echo $this->createUrl("enabled", array("id"=>$data->id));  ?>"> 
        <span class="label label-<?php echo $data->status==1?"info":"warning";?>">
            <?php echo $data->status==1?"Enable":"Disable"; ?> 
        </span>
    </a>
</h3>


<?php
// link para update
//CHtml necesita (label, ruta del controlador o la acción(array (controlador o accion a peticion, clave valor de parametros get)) )
 echo CHtml::link("Actualizar", array("update", "id"=>$data->id)); ?> |
<?php 
//confirm para pop-up
 echo CHtml::link("Borrar", array("delete", "id"=>$data->id), array("confirm"=>"Delete?")); ?> |
 <?php
//ver detalle
echo CHtml::link("Ver", array("view", "id"=>$data->id)); ?>
<?php endforeach; ?>


