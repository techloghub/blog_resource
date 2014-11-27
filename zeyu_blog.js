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
		console.log($('#'+allId[i]['id']).height());
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
