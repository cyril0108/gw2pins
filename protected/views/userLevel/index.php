<?php
$this->breadcrumbs=array(
	'User Levels',
);

$this->menu=array(
	array('label'=>'Create UserLevel','url'=>array('create')),
	array('label'=>'Manage UserLevel','url'=>array('admin')),
);
?>

<h1>User Levels</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
