<?php /* @var $this Controller */
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span12">
        <?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
            'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
            'htmlOptions'=>array('class'=>'index-hero-unit'),
        )); ?>

        <p>Congratulations! You have successfully created your Yii application.</p>

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
        <div id="content">
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
                                error: function(data, status) {
                                    alert(data.error);
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

            <?php $this->endWidget(); }?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>