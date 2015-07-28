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
}
