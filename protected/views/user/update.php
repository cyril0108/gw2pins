<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->row_id=>array('view','id'=>$model->row_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index')),
	array('label'=>'Create User','url'=>array('create')),
	array('label'=>'View User','url'=>array('view','id'=>$model->row_id)),
	array('label'=>'Manage User','url'=>array('admin')),
);
?>

<h1>更新資料 <?php echo $model->account; ?></h1>

<?php echo $this->renderPartial('_form_update',array('model'=>$model)); ?>