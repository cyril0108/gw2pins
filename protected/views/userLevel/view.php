<?php
$this->breadcrumbs=array(
	'User Levels'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List UserLevel','url'=>array('index')),
	array('label'=>'Create UserLevel','url'=>array('create')),
	array('label'=>'Update UserLevel','url'=>array('update','id'=>$model->row_id)),
	array('label'=>'Delete UserLevel','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->row_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserLevel','url'=>array('admin')),
);
?>

<h1>View UserLevel #<?php echo $model->row_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'row_id',
		'account',
		'level',
		'title',
		'status',
		'modify',
		'modify_date',
	),
)); ?>
