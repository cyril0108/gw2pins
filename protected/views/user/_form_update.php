<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
        'type'=>'horizontal',
        'htmlOptions'=>array('class'=>'bg-register')
)); ?>

	<p class="help-block">欄位 <span class="required">*</span> 必填.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'account',array('class'=>'span5','maxlength'=>15,'disabled'=>TRUE)); ?>
        
        <?php echo $form->textFieldRow($model,'game_id',array('class'=>'span5','maxlength'=>15, 'placeholder'=>'pins.1314')); ?>

        <?php echo $form->textFieldRow($model,'last_name',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'first_name',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'nickname',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textAreaRow($model,'intro',array('rows'=>6, 'cols'=>50, 'class'=>'span5')); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>1024)); ?>
        
        <?php echo $form->passwordFieldRow($model,'repeatpassword',array('class'=>'span5','maxlength'=>1024,
            'placeholder'=>'不更改密碼可免填')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '送出申請' : '修改',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
