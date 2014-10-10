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
        <!-- sidebar -->
        <div class="row">
            <!-- Sidebar TODO -->
            
        </div>
    </div>
</div>
<?php $this->endContent(); ?>