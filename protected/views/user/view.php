<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->row_id,
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index')),
	array('label'=>'Create User','url'=>array('create')),
	array('label'=>'Update User','url'=>array('update','id'=>$model->row_id)),
	array('label'=>'Delete User','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->row_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User','url'=>array('admin')),
);
?>

<section>
    <ul class="inline">
        <li>
            <img src="../../images/400_F_40438872_0pimz7ARslxU7XM3VmFmxawbLPqUPJdF.jpg" class="img-polaroid img-guild">
        </li>
        <li>
            <h1><?php echo $model->nickname;?></h1>
        </li>
    </ul>
</section>
<section>
    <div class="row-fluid">
        <div class="span10 offset2">
            <?php $this->widget('bootstrap.widgets.TbDetailView', array(
                'data'=>array(
                    'game_id'=>$model->game_id,
                    'account'=>$model->account,
                    'name'=>$model->last_name.' '.$model->first_name,
                    'nickname'=>$model->nickname,
                    'email'=>$model->email,
                    'intro'=>$model->intro,
                    'created_date'=>$model->created_date
                    ),
                'attributes'=>array(
                    array('name'=>'game_id', 'label'=>'遊戲ID'),
                    array('name'=>'account', 'label'=>'帳號'),
                    array('name'=>'name', 'label'=>'姓名'),
                    array('name'=>'nickname', 'label'=>'暱稱'),
                    array('name'=>'email', 'label'=>'電子信箱'),
                    array('name'=>'intro', 'label'=>'簡介'),
                    array('name'=>'created_date', 'label'=>'註冊日期'),
                ),
            )); ?>
        </div>
    </div>
</section>