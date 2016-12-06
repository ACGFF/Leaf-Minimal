<?php
/**
 * 就如一片叶子般轻松自如吧
 * 
 * @package Leaf
 * @author LiarOnce
 * @version 2.6
 * @link https://www.liaronceme.gq
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
 <div id="pjax-container">
 <style>
 #nav-menu i,#nav-menu:after,#nav-menu:before {
 	background-color: #fff;
 }

 .content2 {
	text-shadow: 1px 2px 3px rgba(0, 0, 0, 0.3);
    letter-spacing: 1px;
    -webkit-font-smoothing: subpixel-antialiased;
    text-align: center;
    color: #fff;
}

.p_part {
    width: 60%;
    margin: 0 auto;
}
 </style>
 
<div class="index">
<div id="screen">
	<div id="mark">
 		<div class="layer" data-depth="0.20">
               <img id="cover" src="<?php $this->options->indeximage(); ?>" />
		</div>
	</div>
</div>
  <div class="vertical-center-child index-container">


    <h1 class="index-title"><?php $this->options->IndexName(); ?></h1>

	<div class="content2">
    <div class="p_part"><p><?php $this->options->IndexIntroduction(); ?></p>
    </div>

    <div class="index-contacts">
		<?php if ($this->options->socialgithub): ?>
			<a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>">
				<i class="fa fa-github-alt"></i>
			</a>
		<?php endif; ?>
		<?php if ($this->options->socialmail): ?>
			<a class="social envelope" target="blank" href="<?php $this->options->socialmail(); ?>">
				<i class="fa fa-envelope"></i>
			</a>
		<?php endif; ?>
			<a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/">
				<i class="fa fa-rss"></i>
			</a>
		<?php if ($this->options->socialbook): ?>
			<a class="social book" target="blank" href="<?php $this->options->socialbook(); ?>">
				<i class="fa fa-book"></i>
			</a>
		<?php endif; ?>
			<a class="social search" id="search-Button" target="blank" href="<?php $this->options->socialweibo(); ?>">
				<i class="fa fa-search"></i>
			</a>
            <div class="site-search col-3 kit-hidden-tb">
                <form id="search" method="post" action="./" role="search">
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input id="search-text" type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                    <button type="submit" id="search-submit" class="submit fa fa-search"></button>
                </form>
            </div>
    </div>


  </div>
</div>
<script>
//首页搜索


	
	var $searchbox = $("#search");
	$searchbox.hide();
$(function(){
$("#search-Button").bind("click",function(event){
	event.preventDefault();
	if($searchbox.is(":visible")){
		$searchbox.fadeOut(100);
	}
	else{
		$searchbox.fadeIn(100);
	}
	
});
});


</script>
</div>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>

