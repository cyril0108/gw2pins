<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Thank You';
$this->breadcrumbs=array(
	'Thank You',
);
?>
<section class="thank-you">
    <h3>PiNs 感謝您的申請.</h3>
    <p><?php echo CHtml::encode('請注意以下幾點：')?></p>
    <div class="well span5 text-error">
        <ol>
            <li>完成網站註冊，並不表示您已經成功加入 PiNs。</li>
            <li>請於 PiNs 負責招募會員的幹部上線收人時段，上線並且完成入會。</li>
            <li>公會收人以網站申請時間為依據，先申請優先邀請。</li>
        </ol>
    </div>
</section>