<?php
$this->breadcrumbs=array(
	'申請會員資料'=>array('index'),
	$model->user->nickname,
);

$this->menu=array(
	array('label'=>'List UserLevel','url'=>array('index')),
	array('label'=>'Create UserLevel','url'=>array('create')),
	array('label'=>'Update UserLevel','url'=>array('update','id'=>$model->row_id)),
	array('label'=>'Delete UserLevel','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->row_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserLevel','url'=>array('admin')),
);
?>

<h1>View UserLevel #<?php echo $model->user->nickname; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'level',
		'title',
		array('name'=>'申請狀態','type'=>'html','value'=>function ($data){return $this->pins_status[$data->status];}),
		'modify',
		'modify_date',
	),
)); ?>
