<?php /* Smarty version Smarty-3.1.13, created on 2014-11-19 13:17:06
         compiled from "/home/zeyu/Workspace/blog/views/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10899578025392b9a852e754-25256862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb52e7f2cc1c9dcded8555d62be3cfe4ddbe2ed1' => 
    array (
      0 => '/home/zeyu/Workspace/blog/views/search.tpl',
      1 => 1416367517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10899578025392b9a852e754-25256862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5392b9b902b122_25797795',
  'variables' => 
  array (
    'search_text' => 0,
    'tags' => 0,
    'info' => 0,
    'tags_count' => 0,
    'dates' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5392b9b902b122_25797795')) {function content_5392b9b902b122_25797795($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="../resource/bootstrap/css/site.css" rel="stylesheet">
<script src="../resource/bootstrap/js/jquery.js"></script>
<script language="javascript">
function js_label(label_id)
{
	var item = $('#icon_'+label_id);
	if (item.hasClass('glyphicon-bookmark'))
	{
		item.removeClass('glyphicon-bookmark');
		item.addClass('glyphicon-ok');
	}
	else
	{
		item.removeClass('glyphicon-ok');
		item.addClass('glyphicon-bookmark');
	}
}

function set_opt_type(opt_type)
{
	$("#chose_btn").html($('#'+opt_type).html() + ' <span class="caret"></span>');
	$("#chose_btn").val($('#'+opt_type).attr("id"));
}

function js_commit()
{
	var form = document.createElement("form");
	form.setAttribute("method", 'post');
	form.setAttribute("action", 'debin.php');

	hiddenField = document.createElement("input");
	hiddenField.setAttribute("type", "hidden");
	hiddenField.setAttribute("name", 'category');

	if ($("#chose_btn").val() != 'mood')
		hiddenField.setAttribute("value", '0');
	else
		hiddenField.setAttribute("value", 'mood');

	form.appendChild(hiddenField);

	hiddenField = document.createElement("input");
	hiddenField.setAttribute("type", "hidden");
	hiddenField.setAttribute("name", 'opt_type');
	hiddenField.setAttribute("value", $("#chose_btn").val());
	form.appendChild(hiddenField);

	hiddenField = document.createElement("input");
	hiddenField.setAttribute("type", "hidden");
	hiddenField.setAttribute("name", 'search');
	hiddenField.setAttribute("value", $('#search').val());
	form.appendChild(hiddenField);

	var tags = Array();

	var items = $('.tag_icon');
	for (var i=0; i<items.length; ++i)
	{
		var item = items.eq(i);
		if (item.hasClass('glyphicon-ok'))
		{
			tags.push(item.attr('id'));
		}
	}
	
	var items = $('.date_icon');
	for (var i=0; i<items.length; ++i)
	{
		var item = items.eq(i);
		if (item.hasClass('glyphicon-ok'))
		{
			tags.push(item.attr('id'));
		}
	}

	hiddenField = document.createElement("input");
	hiddenField.setAttribute("type", "hidden");
	hiddenField.setAttribute("name", 'tags');
	hiddenField.setAttribute("value", tags);
	form.appendChild(hiddenField);

	document.body.appendChild(form);
	form.submit();
}
</script>
<style>
.chosen_label
{
	cursor: pointer;
}
</style>

<div id="myCarousel" class="carousel slide">
	<div class="carousel-inner">
		<div class="item active masthead">
			<div class="container" style="margin:50px">
				<div class="carousel-caption">
					<h1 style="margin:0 0 60px 0">龍潭齋</h1>
					<p>
					<form class="navbar-form bs3-link" style="margin:0 0 55px 0" action="javascript:void(0)"; role="search">
						<div class="form-group">
							<input type="text" style="width:400px;height:40px" class="form-control" id="search" placeholder="Search" value="<?php echo $_smarty_tpl->tpl_vars['search_text']->value;?>
">
						</div>&nbsp;&nbsp;
						<button type="button" class="btn btn-default dropdown-toggle" value="content" style="height:40px" data-toggle="dropdown" name="chose_btn" id="chose_btn">
						内容 <span class="caret"></span>
						</button>
						<ul style="position:absolute; left:812px; top:230px; text-shadow: none; height:116px;" class="dropdown-menu" role="menu">
							<li><a href="javascript:void(0)" onclick="set_opt_type('title')" id="title">标题</a></li>
							<li><a href="javascript:void(0)" onclick="set_opt_type('content')" id="content">内容</a></li>
							<li><a href="javascript:void(0)" onclick="set_opt_type('all')" id="all">内容（全部）</a></li>
							<li><a href="javascript:void(0)" onclick="set_opt_type('mood')" id="mood">心情</a></li>
						</ul>
						<button type="submit" class="btn btn-default" style="height:40px" onclick="js_commit()">检&nbsp;&nbsp;索</button>
					</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container bs-docs-container" style="background-color:rgba(0,0,0,0)">
	<div class="row">
		<div class="span7" style="margin: 75px 0 0 0">
			<div class="alert">
				<div style="scrollbar-face-color: #889b9f;  scrollbar-highlight-color: #c3d6da; overflow: auto;scrollbar-shadow-color: #3d5054; scrollbar-3dlight-color: #3d5054; scrollbar-arrow-color: #ffd6da;scrollbar-darkshadow-color: #85989c; height: 500px">
					<table class="table table-hover" style="background-color:rgba(255, 255, 255, 0)" frame=void border=0 cellpadding=0 cellspacing=0 bordercolor=rgba(0,0,0,0)>
						<tr><td style='font-family:"PT Serif","Georgia","Helvetica Neue",Arial,sans-serif'>TAGS</td><td></td><td></td><td></td><td></td><td></td></tr>
						<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tag']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tag']['index']++;
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tag']['index']%3==0){?>
						<tr>
						<?php }?>
							<td>
								<div id="label_icon_<?php echo $_smarty_tpl->tpl_vars['info']->value['tag_id'];?>
">
									<span class="label chosen_label" id="<?php echo $_smarty_tpl->tpl_vars['info']->value['tag_id'];?>
" onclick="js_label('tag_<?php echo $_smarty_tpl->tpl_vars['info']->value['tag_id'];?>
')" style="height:40px">
										<i class="glyphicon glyphicon-bookmark tag_icon" id="icon_tag_<?php echo $_smarty_tpl->tpl_vars['info']->value['tag_id'];?>
"></i>
										&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['info']->value['tag_name'];?>

									</span>
								</div>
							</td>
							<td><?php echo $_smarty_tpl->tpl_vars['info']->value['article_count'];?>
</td>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tag']['index']%3==2){?>
						</tr>
						<?php }?>
						<?php } ?>
						<?php if ($_smarty_tpl->tpl_vars['tags_count']->value%3!=0){?>
						</tr>
						<?php }?>
					</table>
				</div>
			</div>
		</div>
		<div class="span4" style="margin: 75px 0 0 0">
			<div class="alert">
				<div style="scrollbar-face-color: #889b9f;  scrollbar-highlight-color: #c3d6da; overflow: auto;scrollbar-shadow-color: #3d5054; scrollbar-3dlight-color: #3d5054; scrollbar-arrow-color: #ffd6da;scrollbar-darkshadow-color: #85989c; height: 500px">
					<table class="table table-hover" style="background-color:rgba(255, 255, 255, 0)" frame=void border=0 cellpadding=0 cellspacing=0 bordercolor=rgba(0,0,0,0)>
						<tr style='font-family:"PT Serif","Georgia","Helvetica Neue",Arial,sans-serif'><td>MONTH</td><td>ARTICLE</td><td>MOOD</td></tr>
						<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
						<tr>
							<td>
								<div id="label_icon_<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
									<span class="label chosen_label" id="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" onclick="js_label('date_<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
')" style="height:40px">
										<i class="glyphicon glyphicon-bookmark date_icon" id="icon_date_<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"></i>
										&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['info']->value['month'];?>

									</span>
								</div>
							</td>
							<td><?php echo $_smarty_tpl->tpl_vars['info']->value['article'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['info']->value['mood'];?>
</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>