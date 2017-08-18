<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig(Typecho_Widget_Helper_Form $form) {
	
	//首页文字
	$IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, 'Leaf Hewro', _t('首页的英文字母'), _t('在这里输入字母，不要太长'));
	$form->addInput($IndexName);

	//首页介绍文字
	$IndexIntroduction = new Typecho_Widget_Helper_Form_Element_Text('IndexIntroduction', NULL, '我们笑着说再见，却深知再见遥遥无期。', _t('首页的一行介绍文字'), _t('在这里输入字母，不要太长'));
	$form->addInput($IndexIntroduction);
	
	//首页图标
    $socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('输入GitHub链接'), _t('在这里输入GitHub链接,带http://'));
	$form->addInput($socialgithub);
	$socialbook = new Typecho_Widget_Helper_Form_Element_Text('socialbook', NULL,'https://www.liaronceme.gq/', _t('输入另一个博客的地址'), _t('在这里输入另一个博客链接,带http://'));
	$form->addInput($socialbook);
	$socialmail = new Typecho_Widget_Helper_Form_Element_Text('socialmail', NULL, 'mailto:1062787843@qq.com', _t('输入邮箱地址'), _t('在这里输邮箱地址,如mailto:ihewro@163.com'));
	$form->addInput($socialmail);
    $bbs = new Typecho_Widget_Helper_Form_Element_Text('bbs', NULL, NULL, _t('输入论坛地址'), _t('论坛地址'));
	$form->addInput($bbs);
	
	//首页图片
	$indeximage = new Typecho_Widget_Helper_Form_Element_Text('indeximage', NULL, 'http://www.ihewro.com/pic/wall1.jpg', _t('输入图片地址'), _t('在这里输入首页大图地址，建议不超过1M'));
	$form->addInput($indeximage);
	
	//底部友链HTML代码
	$links = new Typecho_Widget_Helper_Form_Element_Textarea('links', NULL,'<a href="https://www.liaronceme.gq/" class="link" target="_blank">LiarOnce的小站</a><i>/</i>', _t('友链样式的HTML代码'), _t('填入你的HTML代码'));
	$form->addInput($links);
	
	//播放器音乐
	//播放器列表
	$musiclist = new Typecho_Widget_Helper_Form_Element_Textarea('musiclist', NULL,'{title:"竹取飞翔",artist:"V.A.",mp3:"http://p2.music.126.net/JfbCeSOWhY6EYeJXZq3zSA==/5698768766852980.mp3",cover:"http://p3.music.126.net/nmbBEToX0u5ve4VEb_rEHg==/2524478697438606.jpg?param=106x106",},', _t('音乐播放器的音乐列表'), _t('根据已给的格式填入你的HTML代码'));
	$form->addInput($musiclist);
	//播放器专辑图片旋转
	$musicalbum = new Typecho_Widget_Helper_Form_Element_Text('musicalbum',NULL, 'true','专辑图片旋转','专辑图片旋转，可用值为 true/false，true为开启，false为关闭');
	$musicalbum->input->setAttribute('class', 'mini');
	$form->addInput($musicalbum);
	//播放器自动播放
	$musicauto = new Typecho_Widget_Helper_Form_Element_Text('musicauto',NULL, 'true','自动播放','自动播放，可用值为 true/false，true为开启，false为关闭');
	$musicauto->input->setAttribute('class', 'mini');
	$form->addInput($musicauto);

	//Disqus API
	//Disqus Shortname
	$disqusshort = new Typecho_Widget_Helper_Form_Element_Text('disqusshort',NULL, NULL,'配置Disqus Shortname', '填写你设置的Disqus Shortname。<br><font color="#F40">注意：</font>Disqus API的JS和CSS资源需手动修改主题的header.php文件，否则无法正常使用，相关代码已在主题header.php中指出。');
	$disqusshort->input->setAttribute('class', 'mini');
	$form->addInput($disqusshort);
        //API路径
	$disqusapi = new Typecho_Widget_Helper_Form_Element_Text('disqusapi',NULL, NULL,'配置Disqus API地址', '填写你设置的Disqus API地址，使博客的评论系统可用,请提前设置好Disqus API相关设置');
	$form->addInput($disqusapi);
	//API网站
	$disqussite = new Typecho_Widget_Helper_Form_Element_Text('disqussite',NULL, NULL,'配置Disqus API网站域名', '填写你设置的Disqus API的指定网站域名');
	$form->addInput($disqussite);

}




// pjax判断

function is_pjax(){   
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];   
}