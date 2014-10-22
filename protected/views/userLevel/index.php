<?php
$this->breadcrumbs=array(
	'申請會員資料',
);

$this->menu=array(
	array('label'=>'Create UserLevel','url'=>array('create')),
	array('label'=>'Manage UserLevel','url'=>array('admin')),
);
?>

<h1>申請會員資料</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'text', 'header'=>'#', 'value'=>'$row+1'),
        array('name'=>'text','type'=>'html','header'=>'Register','value'=>'$data->user->nickname'),
        array('name'=>'text','type'=>'html','header'=>'Game ID','value'=>'$data->user->game_id'),
        array('name'=>'text','type'=>'html','header'=>'申請狀態','value'=>function ($data){return $this->pins_status[$data->status];}),
        array('name'=>'text','type'=>'html','header'=>'申請日期','value'=>'$data->user->created_date'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}',
        ),
    ),
)); ?>