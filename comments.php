<div id="comment"> 
<?php if($this->allow('comment')): ?>
<script>
var disq = new iDisqus('comment', {
    forum: '<?php $this->options->disqusshort();?>',
    api: '<?php $this->options->disqusapi();?>',
    site: '<?php $this->options->disqussite();?>',
    mode: 1,
    timeout: 3000,
    init: true
});
</script>
<?php else: ?>
<h4><?php _e('评论已关闭'); ?></h4> 
<?php endif; ?> 
</div>