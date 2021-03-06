<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column2';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
        
        public $webmaster=array('cyril');
        public $webmanager=array('cyril','pins','喵寶','pandia');
        public $pins_status=array(
            '1'=>'申請中',
            '2'=>'額滿',
            '3'=>'遞補中',
            '4'=>'完成入會',
        );
        public $post_category=array('教學','公會消息',);
        public $post_show=array('關閉','顯示');
}