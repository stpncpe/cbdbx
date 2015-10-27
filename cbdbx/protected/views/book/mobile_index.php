<?php

$this->menu=array(
	array('label'=>'Create Book', 'url'=>array('create')),
	array('label'=>'Manage Book', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.mobile.ListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_mview',
)); ?>
