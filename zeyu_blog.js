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
<<<<<<< HEAD
			//向上滚动事件
=======
			//向下滚动事件
>>>>>>> 544486bdc243b51240034759720f1d1393b2d4ce
			$('#navbar').show();
		}
		else
		{
<<<<<<< HEAD
			//向下滚动事件
=======
			//向上滚动事件
>>>>>>> 544486bdc243b51240034759720f1d1393b2d4ce
			$('#navbar').hide();
		}
	}
	else if(e.detail)
	{
		//Firefox
		if(e.detail < 0)
		{
			//向上滚动事件<br>
			$('#navbar').show();
			if (!$('#stuck_div').hasClass('col-md-3'))
			{
				$('#stuck_div').css('margin', '50px 0 0 15px');
				$('#stuck_div div:first ul:first').css('margin-top', '30px');
			}
		}
		else
		{
			//向下滚动事件<br>
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
