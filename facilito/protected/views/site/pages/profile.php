<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Wiki';
$this->breadcrumbs=array('My profile');
?>
<!-- aceder mediante el array "countries" (enviado desde el controlador) -->
<?php foreach($employees as $data): //Cada iteración será una instancia del modelo ?>

<h3>
    <label class="badge badge-info"><?php echo $data->id; ?></label> 
    <?php echo $data->nameEmployee; ?>
    <!-- createUrl para crear links (ruta, array con los parametros -clave valor-) -->
</h3>

<?php endforeach; ?>