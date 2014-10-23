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
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-56016882-1', 'auto');
            ga('send', 'pageview');
        </script>
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
                array('label'=>'文章列表', 'url'=>array('/post/index')),
                array('label'=>'連絡', 'url'=>array('/site/contact')),
                array('label'=>'Wiki', 'url'=>'/gw2wiki-zh/index.php'),
            ),
        ),
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'PiNs申請管理', 'url'=>array('userLevel/index'), 'visible'=>in_array(Yii::app()->user->name, $this->webmanager)),
                array('label'=>'發文功能', 'url'=>'#', 'visible'=>in_array(Yii::app()->user->name, $this->webmanager),
                    'items'=>array(
                        array('label'=>'發表文章', 'url'=>array('post/create')),
                        array('label'=>'更新文章', 'url'=>array('post/index')),
                    ),
                ),
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
