<?php /* Smarty version Smarty-3.1.13, created on 2014-07-01 08:13:25
         compiled from "/home/zeyu/Workspace/blog/views/warning.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2176092525392b76e5d36b0-45743393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12a0ef145887c3e19e28ae5c135718f16b522bed' => 
    array (
      0 => '/home/zeyu/Workspace/blog/views/warning.tpl',
      1 => 1403893142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2176092525392b76e5d36b0-45743393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5392b76e7db715_24143128',
  'variables' => 
  array (
    'message' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5392b76e7db715_24143128')) {function content_5392b76e7db715_24143128($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="../resource/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../resource/jquery/js/jquery.alerts.js"></script>
	<script type="text/javascript" src="../resource/bootstrap/js/bootstrap.min.js"></script>
	<link href="../resource/bootstrap/css/docs.css" rel="stylesheet" type="text/css">
	<link href="../resource/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
	<link href="../resource/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
	<link href="../resource/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../resource/bootstrap/css/prettify.css" rel="stylesheet" type="text/css">
	<link href="../resource/bootstrap/css/github.min.css" rel="stylesheet" type="text/css">
	<link href="../resource/jquery/css/jquery.alerts.css" rel="stylesheet" type="text/css">
	<link href="../resource/jquery/css/jquery.ui.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="images/icon.png">
<title>龙潭斋</title>
<body>
<script language="javascript" type="text/javascript">
jAlert
(
	"<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
",
	'提示',
	function()
	{
		window.location.href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
";
	}
);
</script>
</body>
</html>
<?php }} ?>