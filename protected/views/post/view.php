<?php
$baseUrl = Yii::app()->baseUrl;
$this->breadcrumbs=array(
	'文章列表'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post','url'=>array('index')),
	array('label'=>'Create Post','url'=>array('create')),
	array('label'=>'Update Post','url'=>array('update','id'=>$model->row_id)),
	array('label'=>'Delete Post','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->row_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post','url'=>array('admin')),
);
?>

<h1><?php echo $model->title; ?></h1>
<div class="row-fluid">
    <p class="alert alert-info">Created By <strong><a href="<?php echo $baseUrl.'/user/view/'.$model->user->row_id;?>"><?php echo $model->user->nickname;?></a></strong>
        <span class="pull-right"><?php echo $model->created_date;?></span>
    </p>
</div>

<?php echo $model->content;?>

<?php // $this->widget('bootstrap.widgets.TbDetailView',array(
//	'data'=>$model,
//	'attributes'=>array(
//		'row_id',
//		'user_id',
//		'title',
//		'content',
//		'created_date',
//		'catagory',
//		'show',
//	),
//)); ?>
