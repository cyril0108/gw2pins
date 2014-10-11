<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
        <?php /** @var BootActiveForm $form */
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
                            error: function(xhr, ajaxOptions, thrownError) {
                                $("#buttonLogin").attr("disabled",false);
                            },
                        });
                        return false;
                    }
                }',
            ),
        )); ?>
        <?php echo $form->textFieldRow($model, 'username', array('class'=>'span3')); ?>
        <?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
        <?php echo $form->checkboxRow($model, 'rememberMe'); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit',
            'type'=>'primary',
            'loadingText'=>'loading...',
            'label'=>'登入',
            'htmlOptions'=>array('id'=>'buttonLogin'))); ?>
        <?php $this->endWidget();?>
</div><!-- form -->