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
		document.getElementById(allId[i]['id']).style.fontSize='16px';
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
