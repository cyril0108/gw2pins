<?php /* @var $this Controller */
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span12">
        <?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
            'heading'=>'Welcome to PiNs',
            'htmlOptions'=>array('class'=>'index-hero-unit'),
        )); ?>

        <p><?php echo CHtml::encode("Phenix With Nine Tails.");?></p>

        <?php $this->endWidget(); ?>
        <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
    </div>
</div>
<div class="row">
    <div class="span9">       
        <div id="content" style="width: 98%;">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span3">
        <div id="sidebar">
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Operations',
            ));
            $this->widget('bootstrap.widgets.TbMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
        ?>
        </div><!-- sidebar -->
        <div class="row">
            <!-- Sidebar TODO -->
            <?php /** @var BootActiveForm $form */
            $loginForm=new LoginForm;
            if(Yii::app()->user->isGuest) {
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id'=>'login-form',
                'type'=>'vertical',
                'htmlOptions'=>array('class'=>'well'),
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                    'afterValidate' => 'js:function(form, data, hasError) {
                        if (!hasError){
                            str = $("#login-form").serialize() + "&ajax=login-form";

                            $.ajax({
                                type: "POST",
                                url: "' . Yii::app()->createUrl('site/login') . '",
                                data: str,
                                dataType: "json",
                                beforeSend : function() {
                                    $("#buttonLogin").attr("disabled",true);
                                },
                                success: function(data, status) {
                                    if(data.authenticated)
                                    {
                                        window.location = data.redirectUrl;
                                    }
                                    else
                                    {
                                        $.each(data, function(key, value) {
                                            var div = "#"+key+"_em_";
                                            $(div).text(value);
                                            $(div).show();
                                        });
                                        $("#buttonLogin").attr("disabled",false);
                                    }
                                },
                                error: function() {
                                    $("#buttonLogin").attr("disabled",false);
                                },
                            });
                            return false;
                        }
                    }',
                ),
            )); ?>

            <?php echo $form->textFieldRow($loginForm, 'username', array('class'=>'span3')); ?>
            <?php echo $form->passwordFieldRow($loginForm, 'password', array('class'=>'span3')); ?>
            <?php echo $form->checkboxRow($loginForm, 'rememberMe'); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit',
                'type'=>'primary',
                'loadingText'=>'loading...',
                'label'=>'登入',
                'htmlOptions'=>array('id'=>'buttonLogin'))); ?>

            <?php $this->endWidget(); } else {?>
            <div class="well form-vertical">
                Hello, <?php echo Yii::app()->user->name;?>
                <div>
                    <?php $this->widget('bootstrap.widgets.TbButton', array(
                        'url'=>array('/site/logout'),
                        'label'=>'登出',
                        'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                        'size'=>'small', // null, 'large', 'small' or 'mini'
                    )); ?>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>