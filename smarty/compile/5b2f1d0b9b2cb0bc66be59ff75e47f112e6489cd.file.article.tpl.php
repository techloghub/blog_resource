<?php /* Smarty version Smarty-3.1.13, created on 2014-06-18 13:25:00
         compiled from "/home/zeyu/Workspace/blog/views/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35399533153918712e09c98-27046165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b2f1d0b9b2cb0bc66be59ff75e47f112e6489cd' => 
    array (
      0 => '/home/zeyu/Workspace/blog/views/article.tpl',
      1 => 1403069100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35399533153918712e09c98-27046165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53918712ead5a9_22200187',
  'variables' => 
  array (
    'title' => 0,
    'title_desc' => 0,
    'inserttime' => 0,
    'contents' => 0,
    'index' => 0,
    'idx_key' => 0,
    'idx_val' => 0,
    'category_id' => 0,
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53918712ead5a9_22200187')) {function content_53918712ead5a9_22200187($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
p
{
	text-indent:2em;
	word-wrap:break-word; 
}
</style>
<div class="bs-header" id="content" style="FILTER: progid:DXImageTransform.Microsoft.Gradient (GradientType=1, StartColorStr=#d9e45d EndColorStr=darkolivegreen .opacity{ opacity:0.3; filter: alpha(opacity=30); background-color:#000; }" >
	<div class="header container">
		<br />
		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
		<p style="text-indent:0em;"><?php echo $_smarty_tpl->tpl_vars['title_desc']->value;?>
</p>
		<p style="text-indent:5em;" class="bs-header-small"><?php echo $_smarty_tpl->tpl_vars['inserttime']->value;?>
</p>
	</div>
</div>

<br/>
<br/>
<br/>

<div class="container_wrapper">
	<div class="container bs-docs-container">
		<?php if ($_smarty_tpl->tpl_vars['contents']->value!=''){?>
		<div class="row">
			<?php if ($_smarty_tpl->tpl_vars['index']->value!=''){?>
			<script src="../resource/stickUp-master/stickUp.min.js"></script>
			<style>
				.isStuck
				{
					width:56%;
				}
			</style>
			<div class="navbar-wrapper">
				<div class="col-md-3">
					<div class="bs-sidebar hidden-print" role="complementary">
						<ul class="nav bs-sidenav">
							<li>
							<a href="#">回到顶端</a>
							</li>
							<?php  $_smarty_tpl->tpl_vars['idx_val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['idx_val']->_loop = false;
 $_smarty_tpl->tpl_vars['idx_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['idx_val']->key => $_smarty_tpl->tpl_vars['idx_val']->value){
$_smarty_tpl->tpl_vars['idx_val']->_loop = true;
 $_smarty_tpl->tpl_vars['idx_key']->value = $_smarty_tpl->tpl_vars['idx_val']->key;
?>
							<li>
							<a href="#<?php echo $_smarty_tpl->tpl_vars['idx_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['idx_val']->value;?>
</a>
							</li>
							<?php } ?>
							<?php if ($_smarty_tpl->tpl_vars['category_id']->value!='2'){?>
							<?php if ($_smarty_tpl->tpl_vars['category_id']->value!='5'){?>
							<?php if ($_smarty_tpl->tpl_vars['category_id']->value!='6'){?>
							<li>
							<a href="#tags">标签</a>
							</li>
							<?php }?>
							<?php }?>
							<?php }?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-9" role="main">
				<?php }else{ ?>
				<div class="col-md-12" role="main">
					<?php }?>
					<div class="bs-docs-section">
						<?php echo $_smarty_tpl->tpl_vars['contents']->value;?>

						<?php if ($_smarty_tpl->tpl_vars['category_id']->value!="2"){?>
						<?php if ($_smarty_tpl->tpl_vars['category_id']->value!="5"){?>
						<?php if ($_smarty_tpl->tpl_vars['category_id']->value!='6'){?>
						<br /><br /><br /><br /><br />
						<div class="page-header">
							<div id="tags">标签</div>
						</div>
						<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
						<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<?php } ?>
						<?php }?>
						<?php }?>
						<?php }?>
					</div>
					<br /><br />
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>