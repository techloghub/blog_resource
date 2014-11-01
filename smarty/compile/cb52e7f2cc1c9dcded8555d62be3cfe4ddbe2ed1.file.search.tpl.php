<?php /* Smarty version Smarty-3.1.13, created on 2014-06-28 03:12:19
         compiled from "/home/zeyu/Workspace/blog/views/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10899578025392b9a852e754-25256862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb52e7f2cc1c9dcded8555d62be3cfe4ddbe2ed1' => 
    array (
      0 => '/home/zeyu/Workspace/blog/views/search.tpl',
      1 => 1403893142,
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
function js_label(label_id, label_opt)
{
	var label_json = $('#'+label_opt+'_json').html();
	$.post(
		'search.php',
		{label_json:label_json, opt_type:'change', label_id:label_id},
		function(data) { $('#'+label_opt+'_json').html(data); }
	);
	var label_icon = $('#label_icon_'+label_id).html();
	$.post(
	'search.php',
	{label_icon:label_icon, opt_type:'icon'},
	function (data) { $('#label_icon_'+label_id).html(data); }
	);
}

function js_commit(opt_type)
{
	var search_text = document.getElementById('search').value;
	var tags_json = $('#tags_json').html();
	var dates_json = $('#dates_json').html();
	location = '/html/debin.php?category=search&dates='+dates_json+'&tags='+tags_json+'&search='+search_text+'&opt_type='+opt_type;
}
</script>

<div id="myCarousel" class="carousel slide">
	<div class="carousel-inner">
		<div class="item active masthead">
			<div class="container">
				<div class="carousel-caption">
					<h1>龍潭齋</h1>
					<br/>
					<p>
					<form class="navbar-form bs3-link" action="javascript:void(0)"; role="search">
						<div class="form-group">
							<input type="text" style="width:400px;height:40px" class="form-control" id="search" placeholder="Search" value="<?php echo $_smarty_tpl->tpl_vars['search_text']->value;?>
">
						</div>&nbsp;&nbsp;
						<button type="submit" class="btn btn-default" style="height:40px" onclick="js_commit('title')">标&nbsp;&nbsp;题</button>
						<button type="submit" class="btn btn-default" style="height:40px" onclick="js_commit('contents')">内&nbsp;&nbsp;容</button>
						<button type="submit" class="btn btn-default" style="height:40px" onclick="js_commit('mood')">心&nbsp;&nbsp;情</button>
					</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container bs-docs-container" style="background-color:rgba(0,0,0,0)">
	<div class="row">
		<div class="span6">
			<div id="tags_json" name="tags_json"> 
				<input type="hidden" value='$[$$]$'/>
			</div>
			<br />
			<div class="alert">
				<div style="scrollbar-face-color: #889b9f;  scrollbar-highlight-color: #c3d6da; overflow: auto;scrollbar-shadow-color: #3d5054; scrollbar-3dlight-color: #3d5054; scrollbar-arrow-color: #ffd6da;scrollbar-darkshadow-color: #85989c; height: 500px">
					<table class="table table-hover" style="background-color:rgba(255, 255, 255, 0)" frame=void border=0 cellpadding=0 cellspacing=0 bordercolor=rgba(0,0,0,0)>
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
									<a href="javascript:void(0);" onclick='js_label(<?php echo $_smarty_tpl->tpl_vars['info']->value['tag_id'];?>
, "tags")'>
										<span class="label" id="<?php echo $_smarty_tpl->tpl_vars['info']->value['tag_id'];?>
" style="height:40px">
											<i class="glyphicon glyphicon-bookmark"></i>
										&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['info']->value['tag_name'];?>

										</span>
									</a>
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
		<div class="span4">
			<div id="dates_json" name="dates_json"> 
				<input type="hidden" value='$[$$]$'/>
			</div>
			<br />
			<div class="alert">
				<div style="scrollbar-face-color: #889b9f;  scrollbar-highlight-color: #c3d6da; overflow: auto;scrollbar-shadow-color: #3d5054; scrollbar-3dlight-color: #3d5054; scrollbar-arrow-color: #ffd6da;scrollbar-darkshadow-color: #85989c; height: 500px">
					<table class="table table-hover" style="background-color:rgba(255, 255, 255, 0)" frame=void border=0 cellpadding=0 cellspacing=0 bordercolor=rgba(0,0,0,0)>
						<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
						<tr>
							<td>
								<div id="label_icon_<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
									<a href="javascript:void(0);" onclick='js_label(<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
, "dates")'>
										<span class="label" id="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" style="height:40px">
											<i class="glyphicon glyphicon-bookmark"></i>
										&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['info']->value['month'];?>

										</span>
									</a>
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