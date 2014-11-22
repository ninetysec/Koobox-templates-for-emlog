<?php 
/**
 * 首页文章列表部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php doAction('index_loglist_top'); ?>
<div id="roll">
  <div title="回到顶部" id="roll_top"></div>
  <div title="转到底部" id="fall"></div>
</div>
<div id="content">
<div class="main">
	<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>

      <div class="article">
        <div class="entry-content">
			<h2 class="entry-title"><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>" rel="bookmark" title="详细阅读：<?php echo $value['log_title']; ?>"><?php echo $value['log_title']; ?></a></h2>
	<p><?php echo $value['log_description']; ?></p>
        </div>
        <div class="info"><span class="comm">Date：<?php echo gmdate('Y-n-j G:i', $value['date']); ?></span><span class="comm">Sort：<?php blog_sort($value['logid']); ?> </span><span class="comm">Read：<?php echo $value['views']; ?></span><span class="comm">Remark：<?php echo $value['comnum']; ?></span></div>
        <div class="clear"></div>
        <div class="more"><a href="<?php echo $value['log_url']; ?>" title="详细阅读：<?php echo $value['log_title']; ?>" rel="bookmark" class="read-more-icon addapted"><strong>Read</strong><span></span></a></div>
      </div>
	<div class="clear"></div>
	<div style="clear:both;"></div>
<?php 
endforeach;
else:
?>
	<div class="article">
<h3 style="margin: 15px;">非常抱歉，无法搜索到与之相匹配的信息。</h3>
	</div>
<?php endif;?>

	<div class="navigation">
		<div class="pagination">
				<?php echo $page_url;?>
		</div>
	</div>
</div>
<div id="sidebar">
	<?php 
	include View::getView('side');
	?>
</div>
</div>
<?php
include View::getView('footer');
?>
