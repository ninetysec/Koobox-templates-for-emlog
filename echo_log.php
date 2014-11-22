<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
<div class="main">
<div id="map">
<div class="site">当前位置：<a title="返回首页" href="<?php echo BLOG_URL; ?>">首页</a> &gt; <?php blog_sort($logid); ?> &gt; 正文</div>
</div>
<div class="article">
<div class="article_head">
<div class="author_pic"><img src="<?php echo TEMPLATE_URL; ?>images/author_pic.png" /></div>
<h1><?php blog_sort($logid); ?> <?php echo $log_title; ?></h1>
<div class="article_info">
    <span class="comm">Author：<?php blog_author($author); ?> </span><span class="comm">Date：<?php echo gmdate('Y-n-j G:i', $date); ?> </span><span class="comm">Sort：<?php blog_sort($logid); ?></span><span><?php editflg($logid,$author); ?></span>
</div>
</div>
<div class="clear"></div>
 <div class="context entry-content">
      <p><?php echo $log_content; ?></p><br/><br/>
      <div class="clear"></div>
      <div class="article_info_bottom2"><?php blog_tag($logid); ?></div><br/>
      <div class="clear"></div>
      <div class="pre_nex">
      <div><?php neighbor_log($neighborLog); ?></div>
      </div>
      </div>
  </div>
<div class="article"> 
	<div class="commenttitle"><h3 id="comments"></h3></div>
	<ol  class="commentlist">
		<?php blog_comments($comments,$logid); ?>
	</ol>
	<div id="respond_box">
		<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	</div>
</div>
</div>
<div  id="sidebar">
	<?php 
	include View::getView('side');
	?>
</div>
</div>
<?php
 include View::getView('footer');
?>
