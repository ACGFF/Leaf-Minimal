<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!is_pjax()) { ?>

<div id="menu" class="vertical-center-child menu">
  <a class="transition m-iterm" href="<?php $this->options->siteUrl(); ?>">home</a>
  <a class="transition m-iterm" href="<?php Helper::options()->siteUrl()?>archive.html">archive</a>
  <a class="transition m-iterm" href="<?php Helper::options()->siteUrl()?>about.html">about</a>
</div>
<div id="menu-trigger" class="menu-trigger">
<div id="nav-menu">
<i></i>
</div>
</div>
<script src='<?php $this->options->themeUrl('assets/js/nprogress.js'); ?>'></script>
<link rel='stylesheet' href='<?php $this->options->themeUrl('assets/css/nprogress.css'); ?>'/>
<script src='<?php $this->options->themeUrl('assets/js/jquery.parallax.js'); ?>'></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/script.js'); ?>"></script>
<link rel='stylesheet' href='<?php $this->options->themeUrl('assets/css/solarized-dark.css'); ?>'/>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/highlight.pack.js'); ?>"></script>
<script>hljs.initHighlightingOnLoad();</script>



<!--Qpalyer author:https://32mb.space-->
<div id="QPlayer">
<div id="pContent">
	<div id="player">
		<span class="cover"></span>
		<div class="ctrl">
			<div class="musicTag marquee">
				<strong>Title</strong>
				 <span> - </span>
				<span class="artist">Artist</span>
			</div>
			<div class="progress">
				<div class="timer left">0:00</div>
				<div class="contr">
					<div class="rewind icon"></div>
					<div class="playback icon"></div>
					<div class="fastforward icon"></div>
				</div>
				<div class="right">
					<div class="liebiao icon"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="ssBtn">
	        <div class="adf"></div>
    </div>
</div>
<ol id="playlist"></ol>
</div>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/jquery.marquee.min.js'); ?>"></script>
<script>
	var	playlist = [<?php $this->options->musiclist(); ?>];
  var isRotate = true; //专辑图片旋转，true为开启，false为关闭
  var autoplay = true; //自动播放，true为开启，false为关闭
</script>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/player.js'); ?>"></script>
<script>

function bgChange(){
	var lis= $('.lib');
	for(var i=0; i<lis.length; i+=2)
	lis[i].style.background = 'rgba(246, 246, 246, 0.5)';
}
window.onload = bgChange;
</script>
<!--Qpalyer end!-->


<!--灯箱zoom.js-->
<script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('assets/js/zoom.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
        var setupContents = function () {
            $(".post-content img:not(article .link-box img, img[no-zoom])").each(function() {
                $(this).attr('data-action', 'zoom');
                if($(this).next().is('br')){
                    $(this).next().remove();
                }
            });
          
        };
 setupContents();
</script>


<script>
//pjax 刷新

$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
    container: '#pjax-container',
	fragment: '#pjax-container',
    timeout: 8000
}).on('pjax:send',
function() {
    NProgress.start();
	
}).on('pjax:complete',
function() {
NProgress.done();
imageeffct();
//linkshow();
 setupContents();
lue();
reHighlightCodeBlock();
if ($('.ds-thread').length > 0) { if (typeof DUOSHUO !== 'undefined') DUOSHUO.EmbedThread('.ds-thread'); else $.getScript("<?php $this->options->themeUrl('assets/js/embed.js') ?>"); }
});

</script>

<script>
/*
var $content = $("#friends");
$content.hide();
function linkshow(){
$(function(){
$("#friend-head").bind("click",function(){
	if($content.is(":visible")){
		$content.fadeOut();
	}
	else{
		$content.fadeIn();
	}
})
});
}
linkshow();*/
</script>



</body>
</html>
<?php } ?>
