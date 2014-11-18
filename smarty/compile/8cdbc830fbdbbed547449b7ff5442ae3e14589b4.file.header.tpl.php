<?php /* Smarty version Smarty-3.1.13, created on 2014-11-03 10:27:04
         compiled from "/home/zeyu/Workspace/blog/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:896692601539174115275a8-54768937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cdbc830fbdbbed547449b7ff5442ae3e14589b4' => 
    array (
      0 => '/home/zeyu/Workspace/blog/views/header.tpl',
      1 => 1405391139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '896692601539174115275a8-54768937',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53917411594f16_97688472',
  'variables' => 
  array (
    'category_id' => 0,
    'title' => 0,
    'background' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53917411594f16_97688472')) {function content_53917411594f16_97688472($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<script type="text/javascript" src="../resource/jquery/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="../resource/jquery/js/jquery.alerts.js"></script>
	<script type="text/javascript" src="../resource/bootstrap/js/bootstrap.min.js"></script>
	<script src="../resource/ace-master/build/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
	<link href="../resource/bootstrap/css/docs.css" rel="stylesheet" type="text/css">
	<link href="../resource/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
	<link href="../resource/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
	<link href="../resource/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../resource/bootstrap/css/prettify.css" rel="stylesheet" type="text/css">
	<link href="../resource/bootstrap/css/github.min.css" rel="stylesheet" type="text/css">
	<link href="../resource/jquery/css/jquery.alerts.css" rel="stylesheet" type="text/css">
	<link href="../resource/jquery/css/jquery.ui.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="images/icon.png">
	<?php if ($_smarty_tpl->tpl_vars['category_id']->value==2){?>
	<?php if ($_smarty_tpl->tpl_vars['category_id']->value==1){?>
	<link href="../resource/bootstrap/css/site.css" rel="stylesheet">
	<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['title']->value=='龙潭相册'){?>
	<script type="text/javascript" src="../resource/datetimepicker-master/js/bootstrap-datetimepicker.js"></script>
	<link href="../resource/datetimepicker-master/build/build_standalone.less" rel="stylesheet" type="text/css">
	<link href="../resource/datetimepicker-master/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
	<?php }?>
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
	<title>龍潭齋<?php if ($_smarty_tpl->tpl_vars['title']->value!=''){?>&nbsp;&nbsp;☆&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></title>
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
		<ul class="nav navbar-nav">
			<li class="active">
			<a href="/html/index.php">龙潭斋</a>
			</li>
			<li>
			<a href="/html/note.php">读书笔记</a>
			</li>
			<li>
			<a href="/html/debin.php?category=4">技术分享</a>
			</li>
			<li>
			<a href="/html/debin.php?category=3">龙渊阁记</a>
			</li>
			
			<li>
			<a href="/html/earnings.php">龙泉财报</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a href="/html/search.php">检索</a>
			</li>
			<li>
			<a href="/html/test.php">草稿</a>
			</li>
			<li>
			<a href="/html/pictures.php">相册</a>
			</li>
		</ul>
		</nav>
	</header>
	<body style="background: url(<?php echo $_smarty_tpl->tpl_vars['background']->value;?>
) fixed no-repeat; background-size: cover;">
		<link href='../resource/bootstrap/css/nav.css'  rel="stylesheet">
<?php }} ?>