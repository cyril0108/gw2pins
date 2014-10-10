<?php
$this->breadcrumbs=array(
	'User Levels'=>array('index'),
	$model->title=>array('view','id'=>$model->row_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserLevel','url'=>array('index')),
	array('label'=>'Create UserLevel','url'=>array('create')),
	array('label'=>'View UserLevel','url'=>array('view','id'=>$model->row_id)),
	array('label'=>'Manage UserLevel','url'=>array('admin')),
);
?>

<h1>Update UserLevel <?php echo $model->row_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>