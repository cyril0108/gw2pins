<?php /* @var $this Controller */

$cs = Yii::app()->getClientScript();
$cs->registerScript('login',"
    $('#buttonLogin').click(function() {
        var btn = $(this);
        btn.button('loading'); // call the loading function
        setTimeout(function() {
            btn.button('reset'); // call the reset function
        }, 3000);
    });
", CClientScript::POS_END);
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
            <?php /** @var BootActiveForm $form */
            if(Yii::app()->user->isGuest) {
            $loginForm = new LoginForm;
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id'=>'verticalForm',
                'htmlOptions'=>array('class'=>'well'),
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