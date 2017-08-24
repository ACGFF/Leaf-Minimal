# Leaf-Minimal(2017-08-23更新)

基于2.6版本简化而来

该版更新将部分JQuery库改为BootCDN处调用，如有特殊需要可自行本地化。  
同时该版本去掉了Highlight.js代码高亮，可以自己换成喜欢的。

## What is this?
没有看错，这是基于Leaf 2.6修改的主题

因为不知道为什么，新版2.7用着好卡，而且对HTTPS的支持也有点烦= =（其实是我懒。。。）

所以当时就换回了2.6（还好还在），并且在这个版本的基础上修改和添加2.7以及以后版本的部分功能。

由于学业原因，可能没那么多时间修改它，但我会尽量挤出点时间的。

## 有区别吗?
当然有，虽然改动不大，但终归还是改了。

1，灯箱zoom本地化。

2，BootCDN改为同时支持HTTP以及HTTPS。

3，部分资源本地化。

## 注意
由于多说关闭，这里改用Disqus API作为评论系统，目前已移除所有多说相关代码。  
现在在主题后台可以设置Disqus API相关参数，而Disqus API相关JS和CSS需手动修改`header.php`，需修改的代码已在`header.php`指出。
```html
<!-- 这行是Disqus API的JS路径 --><script src="path/to/iDisqus.min.js"></script>
<!-- 这行是Disqus API的CSS路径 --><link rel="stylesheet" href="path/to/iDisqus.min.css" />
```
改完了记得把注释删了哦。
