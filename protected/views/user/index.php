<?php
$this->breadcrumbs=array(
	'個人資料',
);

$this->menu=array(
	array('label'=>'Create User','url'=>array('create')),
	array('label'=>'Manage User','url'=>array('admin')),
);
?>
<section>
    <ul class="inline">
        <li>
            <img src="<?php echo Yii::app()->baseUrl.'/images/400_F_40438872_0pimz7ARslxU7XM3VmFmxawbLPqUPJdF.jpg';?>" class="img-polaroid img-guild">
        </li>
        <li>
            <h1><?php echo $userModel->nickname;?></h1>
        </li>
    </ul>
</section>
<section>
    <div class="row-fluid">
        <div class="span10 offset2">
            <?php $this->widget('bootstrap.widgets.TbDetailView', array(
                'data'=>array(
                    'game_id'=>$userModel->game_id,
                    'account'=>$userModel->account,
                    'name'=>$userModel->last_name.' '.$userModel->first_name,
                    'nickname'=>$userModel->nickname,
                    'email'=>$userModel->email,
                    'intro'=>$userModel->intro,
                    'created_date'=>$userModel->created_date
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
<section>
    <div class="row-fluid">
        <div class="span10 offset2">
            <?php $this->widget('bootstrap.widgets.TbDetailView', array(
                'data'=>array(
                    'level'=>$userModel->user_level->level,
                    'title'=>$userModel->user_level->title,
                    'status'=>$this->pins_status[$userModel->user_level->status],
                    'modify'=>$userModel->user_level->modify,
                    'modify_date'=>$userModel->user_level->modify_date,
                ),
                'attributes'=>array(
                    array('name'=>'level', 'label'=>'網站等級'),
                    array('name'=>'title', 'label'=>'頭銜'),
                    array('name'=>'status', 'label'=>'PiNs 申請狀態'),
                    array('name'=>'modify', 'label'=>'更新者'),
                    array('name'=>'modify_date', 'label'=>'更新日期'),
                ),
            )); ?>
        </div>
    </div>
</section>