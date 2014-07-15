<?php /* Smarty version Smarty-3.1.13, created on 2014-06-22 11:50:41
         compiled from "experiment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1142856623539701f2de0d63-83877629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ae60387cc722b2acf6ae3bfa20930e140e50d9a' => 
    array (
      0 => 'experiment.tpl',
      1 => 1403409041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1142856623539701f2de0d63-83877629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_539701f2ec2505_06837049',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539701f2ec2505_06837049')) {function content_539701f2ec2505_06837049($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('src/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="../resource/datetimepicker-master/js/bootstrap-datetimepicker.js"></script>
<link href="../resource/datetimepicker-master/build/build_standalone.less" rel="stylesheet" type="text/css">
<link href="../resource/datetimepicker-master/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
<br/>
<br/>
<br/>
<div class="form-group">
	<label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
	<div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
		<input class="form-control" size="16" type="text" value="" readonly>
		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	</div>
	<input type="hidden" id="dtp_input1" value="" /><br/>
</div>

<script type="text/javascript">
$(".form_datetime").datetimepicker({
	format: "dd MM yyyy - hh:ii",
	autoclose: true,
	todayBtn: true,
	pickerPosition: "bottom-left"
});
</script>       
<?php echo $_smarty_tpl->getSubTemplate ('src/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>