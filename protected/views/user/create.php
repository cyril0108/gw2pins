<?php
$this->breadcrumbs=array(
	'Create',
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index')),
	array('label'=>'Manage User','url'=>array('admin')),
);
?>

<h1>申請加入 PiNs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>