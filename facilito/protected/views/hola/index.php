<!-- vista -->
<h1> Siguenos en twitter <?php echo $twitter; ?> </h1> 
<!-- usa las variables que le envia el controlador -->
<?php foreach($model as $data):?>
<h1><?php echo $data->username; ?></h1> <!-- consulta -->
<?php endforeach; ?>