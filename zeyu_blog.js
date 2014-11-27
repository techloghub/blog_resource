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

		var elem = document.getElementsByTagName('*');
		for(var idx=0; idx<elem.length; idx++)
		{
			if (elem[idx].className == 'ace_line_group')
			{
				$('#'+allId[i]['id']).css('height', (elem[idx].scrollHeight*$('#'+allId[i]['id']).height())+'px');
				break;
			}
		}
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
				//enabling stickUp on the '.navbar-wrapper' class
				$('.navbar-wrapper').stickUp();
			}
		);
	}
);
