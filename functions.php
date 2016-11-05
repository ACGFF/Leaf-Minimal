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
	
	//首页图片
	$indeximage = new Typecho_Widget_Helper_Form_Element_Text('indeximage', NULL, 'http://www.ihewro.com/pic/wall1.jpg', _t('输入图片地址'), _t('在这里输入首页大图地址，建议不超过1M'));
	$form->addInput($indeximage);

	//配置多说
    $duoshuosn = new Typecho_Widget_Helper_Form_Element_Text('duoshuosn',NULL, 'hewro','配置多说short_name', '填写你的多说评论的short_name，使博客的评论系统可用,不填则不启用多说，包括不加载多说js与css<br><font color="#F40">注意：</font>这里的多说css都是主题内置好的，所以多说自定义css里的css最好清空，否则会有不美观的现象发生.<br>博主认证必须修改aseets/css/duoshuo.min.css的博主ID');
    $duoshuosn->input->setAttribute('class', 'mini');
    $form->addInput($duoshuosn);
	
	
	//底部友链HTML代码
	$links = new Typecho_Widget_Helper_Form_Element_Textarea('links', NULL,'<a href="https://www.liaronceme.gq/" class="link" target="_blank">LiarOnce的小站</a><i>/</i>', _t('友链样式的HTML代码'), _t('填入你的HTML代码'));
	$form->addInput($links);
	
	//播放器音乐
	$musiclist = new Typecho_Widget_Helper_Form_Element_Textarea('musiclist', NULL,'{title:"竹取飞翔",artist:"V.A.",mp3:"http://p2.music.126.net/JfbCeSOWhY6EYeJXZq3zSA==/5698768766852980.mp3",cover:"http://p3.music.126.net/nmbBEToX0u5ve4VEb_rEHg==/2524478697438606.jpg?param=106x106",},', _t('音乐播放器的音乐列表'), _t('根据已给的格式填入你的HTML代码'));
	$form->addInput($musiclist);

}




// pjax判断

function is_pjax(){   
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];   
}