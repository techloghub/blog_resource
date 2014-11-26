<?php /* Smarty version Smarty-3.1.13, created on 2014-11-21 13:26:12
         compiled from "/home/zeyu/Workspace/blog/views/pictures.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77208412653a2d9b9539001-41508756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeaeac9f7851e7a22a0931c7ef8e5ab09b393768' => 
    array (
      0 => '/home/zeyu/Workspace/blog/views/pictures.tpl',
      1 => 1416547572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77208412653a2d9b9539001-41508756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53a2d9bbf1d943_50559505',
  'variables' => 
  array (
    'category_list' => 0,
    'cat' => 0,
    'category' => 0,
    'start_time' => 0,
    'end_time' => 0,
    'count' => 0,
    'infos' => 0,
    'info' => 0,
    'first' => 0,
    'param' => 0,
    'pre' => 0,
    'list' => 0,
    'page' => 0,
    'pagenum' => 0,
    'end' => 0,
    'last' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a2d9bbf1d943_50559505')) {function content_53a2d9bbf1d943_50559505($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br />
<br />
<div class="container_wrapper">
	<div class="container bs-docs-container" style="width:1320px">
		<div class="row" style="margin-bottom:100px">
			<div class="page-header"><h1>留住精彩瞬间 -- 龙泉相册</h1></div>
			<center>
				<p><h1 style="color:#0047DD;margin-top:80px">图片查询</h1></p>
			</center>
			<form class="navbar-form navbar-left" role="search" id="picture" method="get" action="pictures.php">
				<div class="input-group" style="margin-top:10px;margin-bottom:10px;">
					<span class="input-group-addon">图片ID</span>
					<input type="text" class="form-control" name="image_id" id="image_id" placeholder="Picture-ID" style="width:300px;"/>
					<span class="input-group-addon">图片路径</span>
					<input type="text" class="form-control" name="path" id="path" placeholder="Picture-Path" style="width:300px;"/>
					<span class="input-group-addon">MD5</span>
					<input type="text" class="form-control" name="md5" id="md5" placeholder="Picture-MD5" style="width:300px;"/>
					<input type="hidden" name="opt_type" id="opt_type" value="search"/>
				</div>
				<div class="input-group" style="margin-top:10px;margin-bottom:10px;">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						Category <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
							<li><a href="javascript:void(0)" onclick="change_category('<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
', 'category')"><?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
</a></li>
							<?php } ?>
						</ul>
					<input value="<?php if ($_smarty_tpl->tpl_vars['category']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
<?php }else{ ?>all<?php }?>" type="text" class="form-control" id="category" name="category" style="width:235px;" readonly="readonly"/>
					<span class="input-group-addon">插入时间（起始）</span>
					<div class="input-group date form_datetime">
						<input class="form-control" width="20px" type="text" id="start_time" name="start_time" value="<?php if ($_smarty_tpl->tpl_vars['start_time']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['start_time']->value;?>
<?php }else{ ?>2014-01-01 00:00:00<?php }?>" readonly>
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					</div>
					<span class="input-group-addon">插入时间（终止）</span>
					<div class="input-group date form_datetime">
						<input class="form-control" width="20px" id="end_time" name="end_time" type="text" value="<?php if ($_smarty_tpl->tpl_vars['start_time']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['end_time']->value;?>
<?php }?>" readonly>
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					</div>
				</div>
				<p><button class="btn btn-primary btn-lg" type="submit" role="button">检&nbsp;&nbsp;索</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">添&nbsp;&nbsp;加</button></p>
			</form>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<center>
				<p><h1 style="color:#0047DD;margin-top:120px">图片列表</h1></p>
			</center>
			<h3>图片总数: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</h3>
			<center>
				<table class="table table-hover table-condensed" border="4" style="font-weight:bold; word-wrap:break-word; overflow:normal;">
					<caption style="background-color:#BFEFFF; font-weight:bold; font-size:24px">PICTURES</caption>
					<tr style="background-color:#BFEFFF;">
						<td width="7%" valign="middle" align="center">
							ID
						</td>
						<td width="15%" valign="middle" align="center">
							PICTURE
						</td>
						<td width="10%" valign="middle" align="center">
							CATEGORY
						</td>
						<td width="30" valign="middle" align="center">
							PATH
						</td>
						<td width="20%" valign="middle" align="center">
							INSERT_TIME
						</td>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
					<tr>
						<td valign="middle" style="padding-top:50px;"align="center"><?php echo $_smarty_tpl->tpl_vars['info']->value['image_id'];?>
</td>
						<td valign="middle" align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['path'];?>
" target="_blank"><img class="img-thumbnail" alt="100x100" style="margin-right:10px; margin-left:10px; margin-top:10px; margin-bottom:10px; height:100px; width:100px;" src="<?php echo $_smarty_tpl->tpl_vars['info']->value['path'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['info']->value['path'];?>
"/></a></td>
						<td valign="middle" style="padding-top:50px;"align="center">
							<?php echo $_smarty_tpl->tpl_vars['info']->value['category'];?>

						</td>
						<td valign="middle" style="padding-top:50px;"align="center">
							<?php echo $_smarty_tpl->tpl_vars['info']->value['path'];?>

						</td>
						<td valign="middle" style="padding-top:50px;"align="center">
							<?php echo $_smarty_tpl->tpl_vars['info']->value['inserttime'];?>

						</td>
					</tr>
					<?php } ?>
				</table>
				<ul class="pagination">
					<?php if ($_smarty_tpl->tpl_vars['first']->value!=''){?>
					<li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['first']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['param']->value;?>
" class="first">&laquo;</a></li>
					<li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['param']->value;?>
">&lt;</a></li>
					<?php }?>
					<?php  $_smarty_tpl->tpl_vars['pagenum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pagenum']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pagenum']->key => $_smarty_tpl->tpl_vars['pagenum']->value){
$_smarty_tpl->tpl_vars['pagenum']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['pagenum']->value){?>
					<li class="active"><a href="javascript:void(0)" hidefocus=""><?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
</a></li>
					<?php }else{ ?>
					<li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['param']->value;?>
" hidefocus=""><?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
</a></li>
					<?php }?>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['end']->value!=''){?>
					<li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['param']->value;?>
" class="next">&gt;</a></li>
					<li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['param']->value;?>
" class="last">&raquo;</a></li>
					<?php }?>
				</ul>
			</center>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="margin:300px auto;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><strong>图片添加或替换</strong></h4>
			</div>
			<div class="modal-body">
				<div class="input-group" style="margin-top:10px;margin-bottom:10px;">
					<span class="input-group-addon" style="width:10px;">图片ID</span>
					<input type="text" class="form-control" name="insert_id" id="insert_id" placeholder="Picture-ID" style="width:300px;"/>&nbsp;&nbsp;
				</div>
				<div class="input-group" style="margin-top:10px;margin-bottom:10px;">
					<span class="input-group-addon" style="width:10px;">文件名</span>
					<input type="text" class="form-control" name="image_name" id="image_name" placeholder="Picture-Name" style="width:300px;"/>
				</div>
				<div class="input-group" style="margin-top:10px;margin-bottom:10px;">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						Category <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['cat']->value!='all'){?>
							<li><a href="javascript:void(0)" onclick="change_category('<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
', 'insert_category')"><?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
</a></li>
							<?php }?>
							<?php } ?>
						</ul>
					<input value="article" type="text" class="form-control" id="insert_category" name="insert_category" style="width:200px;" readonly="readonly"/>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="insert_image()">添加或替换</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
if (document.getElementById('end_time').value == '')
{
	var mydate = new Date();
	var time_str = mydate.getFullYear();
	var month = mydate.getMonth()+1;
	if (month < 10)
		month = '0' + month;
	var day = mydate.getDate();
	if (day < 10)
		day = '0' + day;
	var hour = mydate.getHours();
	if (hour < 10)
		hour = '0' + hour;
	var minute = mydate.getMinutes();
	if (minute < 10)
		minute = '0' + hour;
	var second = mydate.getSeconds();
	if (second < 10)
		second = '0' + second;
	time_str += '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second;
	document.getElementById('end_time').value = time_str;
}

$(".form_datetime").datetimepicker({
	format: "yyyy-mm-dd hh:ii:ss",
	todayHighlight: true,
	initialDate: new Date(),
	autoclose: true,
	todayBtn: true,
	pickerPosition: "bottom-left"
});

function change_category (category, id)
{
	document.getElementById(id).value = category;
	return false;
}
function insert_image()
{
	if (document.getElementById('image_name').value == '')
	{
		jAlert
		(
			'请输入 /mnt/fghs/Debin/ 目录下已有文件名',
			'提示'
		);
		return false;
	}
	var image_id = encodeURIComponent(document.getElementById('insert_id').value);
	var image_name = encodeURIComponent(document.getElementById('image_name').value);
	var image_category = encodeURIComponent(document.getElementById('insert_category').value);
	jConfirm
	(
		'确定添加或替换文件：'+image_name+'吗？',
		'提示',
		function(r)
		{
			window.location.href='/html/pictures.php?opt_type=insert&id='+image_id+'&name='+image_name+'&category='+image_category;
		}
	);
}
</script>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>