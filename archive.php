<?php
/**
 * Just Poi it.
 * 
 * @package FrostedWhite
 * @author Archeb
 * @version 1.0
 * @link https://qwq.moe/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
//首次使用主题ReadMe
if(isset($_GET['readflag'])){
    file_put_contents(__DIR__."/readflag.txt",'1');
}
$flag=file_get_contents(__DIR__."/readflag.txt");
if($flag=="0"){
    $this->need('header.php');
    $this->need('readme.php');
    die();
}

//pjax支持
if(isset($_GET['_pjax'])){
}else{
 $this->need('header.php');
}
?>
<?php if(!isset($_GET['_pjax'])){ ?> <div class="row col-9" style="margin-top:30px" id="pjax-container"> <?php } ?>
<?php
$i=0;
while($this->next()): 
$i++;
?>
<div class="timeline col-2">
	<div class="line"><div class="useravatar" id="arb<?php echo $i ?>"><img src="<?php $this->options->themeUrl('./img/avatar.jpeg'); ?>" height="60px" width="60px" /></div></div>
</div>
<div class="article-list col-10">
	<div class="hide" name="articlemain" id="art<?php echo $i ?>">
	    <div class="article-bar">
			<p class="article-info">
				<i class="fa fa-clock-o" aria-hidden="true"></i> 2016年10月24日12:02:45 &nbsp;&nbsp;&nbsp;
				<a href="<?php $this->author->permalink(); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php $this->author(); ?></a> &nbsp;&nbsp;&nbsp;
				<i class="fa fa-tag" aria-hidden="true"></i> <?php $this->category(' '); ?> &nbsp;&nbsp;&nbsp;
			</p>
				<div class="actionbutton"><i class="fa fa-heart-o" aria-hidden="true"></i> 喜欢</div>
				<div class="actionbutton"><a href="<?php $this->permalink() ?>#comments"><i class="fa fa-comments-o" aria-hidden="true"></i> 评论</a></div>
		</div>
    	<div class="article-item">
    	    <div class="row">
        	    <div class="col-8">
        	        <div class="article-content">
            		<a href="<?php $this->permalink() ?>"><h2><?php $this->title() ?></h2></a>
            		<?php $this->content(); ?>
            		</div>
            	</div>
        		<div class="col-1"></div>
        		<a href="<?php $this->permalink() ?>"><div class="article-preview col-4"  style="background-image:url(<?php
        		if(strlen($this->fields->preview)!==0){
                      $this->fields->preview();
                    }else{
                      $this->options->themeUrl('./img/prvs/prv'.$i .'.png'); 
                    }
        		?>)"></div></a>
    	    </div>
    	</div>
    	
	</div>
</div>
<?php endwhile; ?>
 <div class="col-2"></div>
 <div class="pagenavs col-10">
 	<?php $this->pageLink('下一页','next'); ?>
<?php $this->pageLink('上一页'); ?>
</div>
 	</div>
 	<script src="<?php $this->options->themeUrl('./js/waypoint.js'); ?>" type="text/javascript" charset="utf-8"></script>
 	<script>
 	     artx=document.getElementById('art1');
 artx.className="animated fadeInRight";
  artx=document.getElementById('art2');
 artx.className="animated fadeInRight";
  artx=document.getElementById('sideba');
 artx.className="animated fadeInRight sidebar col-3";
   artx=document.getElementById('bloginfo');
 artx.className="animated fadeInRight bloginfo col-12";
 
 	</script>
 	<?php
$i=0;
while($this->next()): 
$i++;
?><script>
var articleitem<?php echo $i ?>= new Waypoint({
  element: document.getElementById('arb<?php echo $i ?>'),
  handler: function(direction) {
   artx=document.getElementById('art<?php echo $i ?>');
   artx.className="animated fadeInRight";
  },offset:'85%'
});</script>
<?php endwhile; ?>

 	<?php $this->need('footer.php'); ?>