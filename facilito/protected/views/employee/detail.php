<?php // foreach($employee as $data): //Cada iteración será una instancia del modelo ?>

<h3>
    <label class="badge badge-info"><?php echo $employee->id; ?></label> 
    <?php echo $data->name; ?>
    <!-- createUrl para crear links (ruta, array con los parametros -clave valor-) -->
    <a href="<?php echo $this->createUrl("enabled", array("id"=>$data->id));  ?>"> 
        <span class="label label-<?php echo $data->status==1?"info":"warning";?>">
            <?php echo $data->status==1?"Enable":"Disable"; ?> 
        </span>
    </a>
</h3>
<?php // endforeach; ?>