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
		if(e.wheelDelta==120)
		{
			//向下滚动事件
			$('#navbar').hide();
		}
		else
		{
			//向上滚动事件
			$('#navbar').show();
		}
	}
	else if(e.detail)
	{
		//Firefox
		if(e.detail==-3)
		{
			//向上滚动事件<br>
			$('#navbar').show();
		}
		else
		{
			//向下滚动事件<br>
			$('#navbar').hide();
		}
	}
};

if(document.addEventListener)
{
	document.addEventListener("DOMMouseScroll" ,scrollFunc, false);
}

window.onmousewheel=document.onmousewheel=scrollFunc;
