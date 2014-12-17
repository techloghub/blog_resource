if (typeof(CODE_DIVS) != 'undefined')
{
	var allId = CODE_DIVS;
	for (var i in allId)
	{
		var editor = ace.edit(allId[i]['id']);
		editor.setTheme("ace/theme/eclipse");
		editor.getSession().setMode("ace/mode/" + allId[i]['mode']);
		editor.getSession().setUseWrapMode(80);
		editor.setReadOnly(true);
		$('#'+allId[i]['id']).css('font-size', '16px');
	}
	
	var elems = document.getElementsByClassName('ace_line_group');
	var ace_height = elems[0].scrollHeight;
	for (var i in allId)
	{
		var height = $('#'+allId[i]['id']).height() * ace_height;
		$('#'+allId[i]['id']).css('height', height+'px');
	}
}

if (document.body.clientWidth < 976
		|| navigator.userAgent.match(/Android/i
		|| (navigator.userAgent.indexOf('iPhone') != -1) || (navigator.userAgent.indexOf('iPod') != -1) || (navigator.userAgent.indexOf('iPad') != -1))
   )
{
	$('#stuck_div').hide();
}

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

var scrollFunc=function(e)
{
	e=e || window.event;
	if(e.wheelDelta)
	{
		if(e.wheelDelta > 0)
		{
			//向上滚动事件
			$('#navbar').show();
			if (!$('#stuck_div').hasClass('col-md-3'))
			{
				$('#stuck_div').css('margin', '50px 0 0 15px');
				$('#stuck_div div:first ul:first').css('margin-top', '30px');
			}
		}
		else
		{
			//向下滚动事件
			$('#navbar').hide();
			if (!$('#stuck_div').hasClass('col-md-3'))
			{
				$('#stuck_div').css('margin', '0px 0 0 15px');
				$('#stuck_div div:first ul:first').css('margin-top', '0px');
			}
		}
	}
	else if(e.detail)
	{
		//Firefox
		if(e.detail < 0)
		{
			//向上滚动事件
			$('#navbar').show();
			if (!$('#stuck_div').hasClass('col-md-3'))
			{
				$('#stuck_div').css('margin', '50px 0 0 15px');
				$('#stuck_div div:first ul:first').css('margin-top', '30px');
			}
		}
		else
		{
			//向下滚动事件
			$('#navbar').hide();
			if (!$('#stuck_div').hasClass('col-md-3'))
			{
				$('#stuck_div').css('margin', '0px 0 0 15px');
				$('#stuck_div div:first ul:first').css('margin-top', '0px');
			}
		}
	}
};

if(document.addEventListener)
{
	document.addEventListener("DOMMouseScroll" ,scrollFunc, false);
}

window.onmousewheel=document.onmousewheel=scrollFunc;

function login()
{
	var params = {
		username : $('#username').val(),
		password : $('#password').val(),
		action : 'login'
	};
	$.ajax(
		{
			'url' : '/html/msgchache.php',
			'type' : 'post',
			'data' : params,
			'dataType' : 'json',
			'error' : function (jqXHR, textStatus, errorThrown) {
				var errMsg = errorThrown == 'Forbidden' ? '没权限呢!' : '亲，服务器忙呢!';
				jAlert(errorThrown, '提示');
			},
			'success' : function (data) {
				jAlert(data['msg']);
				if (data['code'] == 0)
					location.reload();
			}
		}
	);
}
