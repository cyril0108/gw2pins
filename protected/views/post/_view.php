<div class="alert alert-info">
    <div class="row-fluid">
        <a href="<?php echo Yii::app()->baseUrl.'/post/view/'.$data->row_id;?>">
            <div class="span2"><?php echo $this->post_category[$data->category];?></div>
            <div class="span6"><?php echo $data->title?></div>
            <div class="span2"><?php echo $data->user->nickname;?></div>
            <div class="span2"><?php echo $data->created_date;?></div>
        </a>
    </div>
</div>