<?php /* Smarty version Smarty-3.1.13, created on 2014-11-21 21:09:01
         compiled from "/home/zeyu/Workspace/blog/views/note.tpl" */ ?>
<?php /*%%SmartyHeaderCode:945523387539187186c0958-39626201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '109409914aefc127031464c83817598d15f1312e' => 
    array (
      0 => '/home/zeyu/Workspace/blog/views/note.tpl',
      1 => 1416575341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '945523387539187186c0958-39626201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5391871877f6f1_71059050',
  'variables' => 
  array (
    'det_beg_month' => 0,
    'det_end_month' => 0,
    'drw_beg_month' => 0,
    'drw_end_month' => 0,
    'category_id' => 0,
    'beg_month' => 0,
    'end_month' => 0,
    'average' => 0,
    'infos' => 0,
    'info' => 0,
    'labels' => 0,
    'income' => 0,
    'expend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5391871877f6f1_71059050')) {function content_5391871877f6f1_71059050($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script language="javascript">
function get_earnings()
{
	var det_beg_month = $('#beg_month').val();
	var det_end_month = $('#end_month').val();
	var drw_beg_month = $('#drw_beg_month').val();
	var drw_end_month = $('#drw_end_month').val();
	window.location.href = 'earnings.php?beg='+det_beg_month+'&'+'end='+det_end_month+'&drw_beg='+drw_beg_month+'&drw_end='+drw_end_month;
}
function drw_earnings()
{
	var det_beg_month = $('#det_beg_month').val();
	var det_end_month = $('#det_end_month').val();
	var drw_beg_month = $('#beg_month').val();
	var drw_end_month = $('#end_month').val();
	window.location.href = 'earnings.php?beg='+det_beg_month+'&'+'end='+det_end_month+'&drw_beg='+drw_beg_month+'&drw_end='+drw_end_month;
}
</script>
<br /><br /><br />
<input type="hidden" id="det_beg_month" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['det_beg_month']->value;?>
"/>
<input type="hidden" id="det_end_month" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['det_end_month']->value;?>
"/>
<input type="hidden" id="drw_beg_month" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['drw_beg_month']->value;?>
"/>
<input type="hidden" id="drw_end_month" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['drw_end_month']->value;?>
"/>
<div class="container projects">
	<div class="row">
		<?php if ($_smarty_tpl->tpl_vars['category_id']->value==1){?>
			<canvas id="myChart" width="980px" height="300px" class="span12"></canvas>
			<div class='span12'><br /></div>
			<div class='span2'>
				<input type="text" id="beg_month" class="form-control" placeholder="BEG_MONTH" value="<?php echo $_smarty_tpl->tpl_vars['beg_month']->value;?>
"/>
			</div>
			<div class='span2'>
				<input type="text" id="end_month" class="form-control" placeholder="END_MONTH" value="<?php echo $_smarty_tpl->tpl_vars['end_month']->value;?>
"/>
			</div>
			<div class='span2'>
				<button type="submit" onclick="get_earnings()" class="btn btn-default">详&nbsp;&nbsp;情</button>&nbsp;&nbsp;
				<button type="submit" onclick="drw_earnings()" class="btn btn-default">绘&nbsp;&nbsp;图</button>
			</div>
			<div class='span2'>
			</div>
			<div class='span2'>
				<input type="text" class="form-control" placeholder="Text input" readonly='readonly' value='平均月结余：<?php echo $_smarty_tpl->tpl_vars['average']->value;?>
'\>
			</div>
			<div class='span12'>
				<br /><br />
			</div>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
		<div class="col-sm-6 col-md-4 ">
			<div class="thumbnail">
				<a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['idx_href'];?>
" target="_blank"><img class="lazy" src="<?php echo $_smarty_tpl->tpl_vars['info']->value['image_path'];?>
" <?php if ($_smarty_tpl->tpl_vars['category_id']->value!=1){?>style="height:396px;"<?php }?> data-src="<?php echo $_smarty_tpl->tpl_vars['info']->value['image_path'];?>
"></a>
				<div class="caption">
					<h3> 
						<a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['idx_href'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
<br><small><?php echo $_smarty_tpl->tpl_vars['info']->value['descs'];?>
</small></a>
					</h3>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<script src="../resource/Chart.js-master/Chart.min.js"></script>
<script type="text/javascript" language="javascript">
var data =
{
	labels : <?php echo $_smarty_tpl->tpl_vars['labels']->value;?>
,
	datasets : 
	[
		{
			fillColor : "rgba(220,220,220,0.8)",
			strokeColor : "rgba(220,220,220,1)",
			pointColor : "rgba(220,220,220,1)",
			pointStrokeColor : "#fff",
			data : <?php echo $_smarty_tpl->tpl_vars['income']->value;?>

		},
		{
			fillColor : "rgba(68,114,169,0.4)",
			strokeColor : "rgba(151,187,205,1)",
			pointColor : "rgba(151,187,205,1)",
			pointStrokeColor : "#fff",
			data : <?php echo $_smarty_tpl->tpl_vars['expend']->value;?>
 
		}
	]
}
var options = 
{
	//Boolean - Whether we show the scale above or below the chart segments
	scaleOverlay : true,

	//Boolean - If we want to override with a hard coded scale
	scaleOverride : false,

	//** Required if scaleOverride is true **
	//Number - The number of steps in a hard coded scale
	scaleSteps : null,
	//Number - The value jump in the hard coded scale
	scaleStepWidth : null,
	//Number - The centre starting value
	scaleStartValue : null,

	//Boolean - Show line for each value in the scale
	scaleShowLine : true,

	//String - The colour of the scale line
	scaleLineColor : "rgba(0,0,0,.1)",

	//Number - The width of the line - in pixels
	scaleLineWidth : 1,

	//Boolean - whether we should show text labels
	scaleShowLabels : true,

	//Interpolated JS string - can access value
	scaleLabel : "<<?php ?>%=value%<?php ?>>",

	//String - Scale label font declaration for the scale label
	scaleFontFamily : "'Arial'",

	//Number - Scale label font size in pixels	
	scaleFontSize : 12,

	//String - Scale label font weight style	
	scaleFontStyle : "normal",

	//String - Scale label font colour	
	scaleFontColor : "#666",

	//Boolean - Show a backdrop to the scale label
	scaleShowLabelBackdrop : true,

	//String - The colour of the label backdrop	
	scaleBackdropColor : "rgba(255,255,255,0.75)",

	//Number - The backdrop padding above & below the label in pixels
	scaleBackdropPaddingY : 2,

	//Number - The backdrop padding to the side of the label in pixels	
	scaleBackdropPaddingX : 2,

	//Boolean - Stroke a line around each segment in the chart
	segmentShowStroke : true,

	//String - The colour of the stroke on each segement.
	segmentStrokeColor : "#fff",

	//Number - The width of the stroke value in pixels	
	segmentStrokeWidth : 2,

	//Boolean - Whether to animate the chart or not
	animation : true,

	//Number - Amount of animation steps
	animationSteps : 100,

	//String - Animation easing effect.
	animationEasing : "easeOutBounce",

	//Boolean - Whether to animate the rotation of the chart
	animateRotate : true,

	//Boolean - Whether to animate scaling the chart from the centre
	animateScale : false,

	//Function - This will fire when the animation of the chart is complete.
	onAnimationComplete : null
}
var ctx = document.getElementById("myChart").getContext("2d");
var myNewChart = new Chart(ctx).PolarArea(data);
new Chart(ctx).Line(data,options);
//var options = {
//    //Boolean - If we show the scale above the chart data    
//    // 网格线是否在数据线的上面        
//    scaleOverlay : false,
//    
//    //Boolean - If we want to override with a hard coded scale
//    // 是否用硬编码重写y轴网格线
//    scaleOverride : false,
//    
//    //** Required if scaleOverride is true **
//    //Number - The number of steps in a hard coded scale
//    // y轴刻度的个数
//    scaleSteps : null,
//    //Number - The value jump in the hard coded scale
//    // y轴每个刻度的宽度
//    scaleStepWidth : null,
//    //Number - The scale starting value
//    // y轴的起始值
//    scaleStartValue : null,
//
//    //String - Colour of the scale line    
//    // x轴y轴的颜色
//    scaleLineColor : "rgba(0,0,0,1)",
//    
//    //Number - Pixel width of the scale line
//    // x轴y轴的线宽    
//    scaleLineWidth : 1,
//
//    //Boolean - Whether to show labels on the scale    
//    // 是否显示y轴的标签
//    scaleShowLabels : true,
//    
//    //Interpolated JS string - can access value
//    // 标签显示值
//    scaleLabel : "<<?php ?>%=value%<?php ?>>",
//    
//    //String - Scale label font declaration for the scale label
//    // 标签的字体
//    scaleFontFamily : "'Arial'",
//    
//    //Number - Scale label font size in pixels    
//    // 标签字体的大小
//    scaleFontSize : 12,
//    
//    //String - Scale label font weight style
//    // 标签字体的样式
//    scaleFontStyle : "normal",
//    
//    //String - Scale label font colour    
//    // 标签字体的颜色
//    scaleFontColor : "#666",    
//    
//    ///Boolean - Whether grid lines are shown across the chart
//    // 是否显示网格线
//    scaleShowGridLines : true,
//    
//    //String - Colour of the grid lines
//    // 网格线的颜色
//    scaleGridLineColor : "rgba(0,0,0,.1)",
//    
//    //Number - Width of the grid lines
//    // 网格线的线宽
//    scaleGridLineWidth : 1,    
//    
//    //Boolean - Whether the line is curved between points
//    // 是否是曲线
//    bezierCurve : true,
//    
//    //Boolean - Whether to show a dot for each point
//    // 是否显示点
//    pointDot : true,
//    
//    //Number - Radius of each point dot in pixels
//    // 点的半径
//    pointDotRadius : 3,
//    
//    //Number - Pixel width of point dot stroke
//    // 点的线宽
//    pointDotStrokeWidth : 1,
//    
//    //Boolean - Whether to show a stroke for datasets
//    datasetStroke : true,
//    
//    //Number - Pixel width of dataset stroke
//    // 数据线的线宽
//    datasetStrokeWidth : 3,
//    
//    //Boolean - Whether to fill the dataset with a colour
//    // 数据线是否填充颜色
//    datasetFill : true,
//    
//    //Boolean - Whether to animate the chart
//    // 是否有动画效果
//    animation : true,
//
//    //Number - Number of animation steps
//    // 动画的步数
//    animationSteps : 60,
//    
//    //String - Animation easing effect
//    // 动画的效果
//    animationEasing : "easeOutQuart",
//
//    //Function - Fires when the animation is complete
//    // 动画完成后调用
//    onAnimationComplete : null
//}
</script>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>