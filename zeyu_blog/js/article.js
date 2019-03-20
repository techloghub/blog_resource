resize();

jQuery
(
 	function($)
	{
		$(document).ready
		(
		 	function()
			{
				$('.navbar-wrapper').stickUp();
			}
		);
	}
);

window.onresize = function() {
	resize();
}

function resize()
{
	if (document.body.clientWidth < 1190)
	{
		if ($('#index').is(":visible"))
		{
			$('#index').hide();
			$('#md3').hide();
			$('#md9').removeClass('col-md-9');
			$('#md9').addClass('col-md-12');
		}
	}
	else
	{
		if ($('#index').length > 0 && $('#index').is(":hidden"))
		{
			$('#index').show();
			$('#md3').show();
			$('#md9').removeClass('col-md-12');
			$('#md9').addClass('col-md-9');
		}
	}

	if (typeof(CODE_DIVS) != 'undefined')
	{
		if (typeof(allId) == 'undefined')
			var allId = CODE_DIVS;
		for (var i in allId)
		{
			$('#'+allId[i]['id']).css('width', $('.bs-docs-section').width());
		}
	}

	$('img').each(function() {
			if ($(this).width() >= $('.bs-docs-section').width())
			{
				$(this).width($('.bs-docs-section').width());
			}
			else if ($(this).width() < $(this).parent().attr('alt'))
			{
				if ($(this).parent().attr('alt') > $('.bs-docs-section').width())
					$(this).width($('.bs-docs-section').width());
				else
					$(this).width($(this).parent().attr('alt'));
			}
		}
	)

	$('#comment_content').css('width', $('.col-md-12').width());
}

function submitcomment()
{
	$('#errmsg').html('');
	var article_id = $('#article_id').val();
	var nickname = $('#nickname').val();
	var qq = $('#qq').val();
	var email = $('#email').val();
	var content = $('#comment_content').val();
	var replyfloor = $('#replyfloor').val();

	if (isNaN(article_id)) {
		$('#errmsg').html('页面错误，请刷新后重新评论');
		return false;
	}
	if (nickname == "") {
		$('#errmsg').html('请输入昵称');
		return false;
	}
	if (qq != "" && isNaN(qq)) {
		$('#errmsg').html('请输入正确的 QQ 号码');
		return false;
	}
	if (email != "" && !isEmail(email)) {
		$('#errmsg').html('请输入正确的 Email 地址');
		return false;
	}
	if (email == "" && qq == "") {
		$('#errmsg').html('QQ 号码和 Email 地址请至少填写一个，谢谢');
		return false;
	}
	if (content == "") {
		$('#errmsg').html('请输入评论内容，谢谢');
		return false;
	}
	var params = {
		'qq'		 : qq,
		'email'		 : email,
		'content'	 : content,
		'nickname'	 : nickname,
		'article_id' : article_id,
		'replyfloor' : replyfloor,
	}
	if ($('#relycheckbox').attr("checked")) {
		params['reply'] = 1;
	} else {
		params['reply'] = 0;
	}
	$.ajax(
		{
			'url'	: '/article/comment',
			'type'	: 'post',
			'data'	: params,
			'dataType'	: 'json',
			'error' : function (jqXHR, textStatus, errorThrown) {
				var errMsg = errorThrown == 'Forbidden' ? '没权限呢!' : '亲，服务器忙呢!';
				jAlert(errorThrown, '提示');
			},
			'success' : function (data) {
				if (data['code'] == 0) {
					jAlert(data['msg'], '提示', function() {
							location.reload();
						}
					);
				} else {
					jAlert(data['msg'], '提示');
				}
			}
		}
	);
}

function isEmail(email) {
	var regu = "^(([0-9a-zA-Z]+)|([0-9a-zA-Z]+[_.0-9a-zA-Z-]*))@([a-zA-Z0-9-]+[.])+([a-zA-Z]{2}|net|com|gov|mil|org|edu|int|name|asia)$";
	var re = new RegExp(regu);
	return email.search(re) != -1;
}

function reply(floor, nickname)
{
	var text = '回复 #' + floor + '  ' + nickname;
	$('#replytext').html(text);
	$('#relycheckbox').attr('checked', 'checked');
	$('#replyfloor').val(floor);
	$('#reply_checkbox').show();
}

function onoffcomment(comment_id, online)
{
	if (online == '') {
		online = 0;
	}
	if (online != 0 && online != 1) {
		online = 1;
	}
	var onlinetext = '上线';
	if (online == 1) {
		onlinetext = '下线';
	}

	var params = {
		'comment_id'	: comment_id,
		'online'		: online
	}
	jConfirm('确认'+onlinetext+'吗？', '提示', function(r) {
			if (r) {
				$.ajax(
					{
						'url'	: '/article/online_comment',
						'type'	: 'post',
						'data'	: params,
						'dataType'	: 'json',
						'error' : function (jqXHR, textStatus, errorThrown) {
							var errMsg = errorThrown == 'Forbidden' ? '没权限呢!' : '亲，服务器忙呢!';
							jAlert(errorThrown, '提示');
						},
						'success' : function (data) {
							if (data['code'] == 0) {
								jAlert(onlinetext + data['msg'], '提示', function() {
										location.reload();
									}
								);
							} else {
								jAlert(data['msg'], '提示');
							}
						}
					}
				);
			}
		}
	);
}
