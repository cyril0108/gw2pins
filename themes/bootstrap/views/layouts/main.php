<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh" />
        <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl;?>/favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'inverse', // null or 'inverse'
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'首頁', 'url'=>array('/site/index')),
                array('label'=>'申請', 'url'=>array('/user/create')),
                array('label'=>'關於PiNs', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'連絡', 'url'=>array('/site/contact')),
                array('label'=>'Wiki', 'url'=>'/gw2wiki-zh/index.php'),
            ),
        ),
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'PiNs申請管理', 'url'=>array('userLevel/index'), 'visible'=>in_array(Yii::app()->user->name, $this->webmanager)),
                array('label'=>'登出 ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php echo $content; ?>

	<div class="clear"></div>

        <div id="footer" class="text-center bg-footer">
            <strong>Copyright &copy; <?php echo date('Y'); ?> by Phenix With Nine Tails, PiNs. All Rights Reserved.</strong>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
