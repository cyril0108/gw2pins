<?php
$this->breadcrumbs=array(
	'User Levels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserLevel','url'=>array('index')),
	array('label'=>'Manage UserLevel','url'=>array('admin')),
);
?>

<h1>Create UserLevel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>