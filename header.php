<?php
/*
Template Name:Koobox
Description:仿Koobox主题
Version:1.0
Author:90safe
Author Url:http://www.90sex.org
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_URL; ?>style.css" />
<link rel="shortcut icon" href="favicon.ico" />
<?php doAction('index_head'); ?>
<style> 
body{  	
table-layout:fixed; word-break: break-all; overflow:auto;
} 
</style>
</head>

<body>
<div  id="page">
  <div id="head">
    <div id="topmenu" >
	  <div class="subpage">
		<div class="toppage"  style="position:absolute">
			    <?php blog_navi();?>
	    </div>
		</div>
      <div class="clear"></div>
    </div>
    <div id="header">
      <div id="blogname">
          <h1><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>
        <div id="blogtitle"><h2><?php echo $bloginfo; ?></h2></div>
      </div>
    <div class="clear"></div>
  </div>
</div>
<div class="mainmenus">
<div class="mainmenu">
  <div class="topnav">

  </div>
  <div class="search">
    <div class="search_site addapted" style="overflow: hidden; width: 150px;">
	 <form method="get" id="searchform" action="<?php echo BLOG_URL; ?>index.php">
        <fieldset id="search">      
          <input value="Search" onclick="this.value='';" name="keyword" id="s" type="text" />
          <input  id="searchsubmit" class="button" type="submit" />    
        </fieldset>
      </form>
    </div>
  </div>
  <div class="clear"></div>
</div>
</div>
