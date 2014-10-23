<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<section>
    <h3>PiNs 公會簡介.</h3>
    <p><?php echo CHtml::encode('Phenix With Nine Tails, PiNs，是一個存在泰瑞亞大陸的新興工會（北美 Jade Quarry 伺服器）。'
            . '由幾個對 GW2 這款遊戲有熱情的玩家成立，並共同捐款研發遊戲中工會裡必要的一些基礎的設施，'
            . 'PiNs 成立的最大願望，就是可以跟我們同樣喜愛 GW2 這款遊戲的線上玩家，一起完整體驗與探索泰瑞亞大陸上的一切。')?></p>
    <p><?php echo CHtml::encode("我們知道只靠個人力量是很難完成許多事情的，尤其 Guild Wars 2 (GW2) 是一款純英線上遊戲，"
            . "與玩家的互動中免不了希望能夠使用共通的語言，熟悉的文字，我們也不希望語言的隔閡，導致新手們覺得很難融入遊戲世界，"
            . "或者是對劇情事件的不熟悉，而錯失許多體驗這款遊戲的樂趣；另外一個最重要的原因是，我們希望能夠在線上找到志同道合的好朋友，"
            . "一起來體驗這款遊戲的魅力，期望大家上線，來到 PiNs 會有回到遊戲中的家的感覺。");?></p>

    <p><?php echo CHtml::encode("PiNs 並不想限定公會在遊戲中的發展與定位，有人喜愛 PVE，有人喜愛 PVP，有人愛當農夫，"
            . "有人愛打戰場／副本，但是我們都需要一個在泰瑞亞大陸上的家。所以我們會努力規劃各種工會活動，"
            . "發展初期，會以 PVE 內容為主，包含，公會任務／副本／故事劇情／各種事件、開圖，而 PVP 的部分，"
            . "我們希望能夠招募到有經驗也願意帶領大家的指揮官，一旦有足夠的會員有興趣參與 PVP／WvW 活動，"
            . "PiNs 也會依照會員們的需求進行各種研發，與開放 PVP／WvW 團。");?></p>

    <p><?php echo CHtml::encode("PiNs 期望與公會會員一起探索 GW2 的遊戲全貌，也希望所有 PiNs 成員都可以輕輕鬆鬆不無聊的度過在線上的遊戲時光。");?></p>
</section>
<section>
    <h3>公會分組.</h3>
    <p><?php echo CHtml::encode("PiNs 成員，只要通過了招募階段，即可自由選擇各自的組別，PiNs 的組別由四個元素組成"
            . "每個組別會由 1~ 多位組長帶領。並且各組別的事務交由各組別討論與決定，再由幹部公告。");?></p>

    <div>
        <blockquote class="text-info"><?php echo CHtml::encode("air / 主研發、開任務、帶團");?></blockquote>
        <blockquote class="text-info"><?php echo CHtml::encode("earth / 主招生、公會活動規劃");?></blockquote>
        <blockquote class="text-info"><?php echo CHtml::encode("fire / 主戰場指揮、EoTM、WvW、PVP");?></blockquote>
        <blockquote class="text-info"><?php echo CHtml::encode("water / 主打醬油、SUPPORT各組別");?></blockquote>
    </div>
</section>
<section>
    <h3>關於 PiNs.</h3>
    <p><strong class="text-error">P</strong>henix W<strong class="text-error">i</strong>th <strong class="text-error">N</strong>ine Tail<strong class="text-error">s</strong>, PiNs.
        <?php echo CHtml::encode("九尾鳳凰，鳳凰是浴火重生的神獸，"
            . "我們希望藉由鳳凰象徵玩家們能在 GW2 這款說老不老說年輕也不年輕的遊戲中，"
            . "重新燃起對遊戲的熱情與感動；至於為什麼是九條尾巴，就要請大家自己去研究一下火影忍者了（笑 www）。");?></p>
    <p><?php echo CHtml::encode("我們有以下幾點核心聲明，請想要加入的玩家們務必認同，與配合。");?></p>
    
    <div>
        <blockquote class="text-info"><?php echo CHtml::encode("FUN is EVERYTHING");?>
            <small><?php echo CHtml::encode("既然是遊戲，從中得到樂趣絕對是最重要的事情。");?></small>
        </blockquote>
        <blockquote class="text-info"><?php echo CHtml::encode("公會需要大家的認同");?>
            <small><?php echo CHtml::encode("如果可以，請多多代表，並且多與公會其他成員互動，你想要怎樣的公會，只有你自己最清楚。");?></small>
        </blockquote>
        <blockquote class="text-info"><?php echo CHtml::encode("互相尊重、包容、體諒");?>
            <small><?php echo CHtml::encode("人與人相處難免有磨擦或是意見相左的地方，希望大家都能夠多用同理心去看待事情；"
                    . "雖然線上遊戲是虛擬世界，如果真的有衝突，也不可在公會頻道謾罵或是人身攻擊，請切記。");?></small>
        </blockquote>
        <blockquote class="text-info"><?php echo CHtml::encode("泰瑞亞的 PiNs 需要你的參與");?>
            <small><?php echo CHtml::encode("公會有任何活動，如果你的時間允許，就多多來參加吧，啾咪～");?></small>
        </blockquote>
    </div>
</section>