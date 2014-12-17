function js_label(label_id)
{
	var item = $('#icon_'+label_id);
	if (item.hasClass('glyphicon-bookmark'))
	{
		item.removeClass('glyphicon-bookmark');
		item.addClass('glyphicon-ok');
	}
	else
	{
		item.removeClass('glyphicon-ok');
		item.addClass('glyphicon-bookmark');
	}
}

function set_opt_type(opt_type)
{
	$("#chose_btn").html($('#'+opt_type).html() + ' <span class="caret"></span>');
	$("#chose_btn").val($('#'+opt_type).attr("id"));
}

function js_commit()
{
	var form = document.createElement("form");
	form.setAttribute("method", 'post');
	form.setAttribute("action", 'debin.php');

	hiddenField = document.createElement("input");
	hiddenField.setAttribute("type", "hidden");
	hiddenField.setAttribute("name", 'category');

	if ($("#chose_btn").val() != 'mood')
		hiddenField.setAttribute("value", '0');
	else
		hiddenField.setAttribute("value", 'mood');

	form.appendChild(hiddenField);

	hiddenField = document.createElement("input");
	hiddenField.setAttribute("type", "hidden");
	hiddenField.setAttribute("name", 'opt_type');
	hiddenField.setAttribute("value", $("#chose_btn").val());
	form.appendChild(hiddenField);

	hiddenField = document.createElement("input");
	hiddenField.setAttribute("type", "hidden");
	hiddenField.setAttribute("name", 'search');
	hiddenField.setAttribute("value", $('#search').val());
	form.appendChild(hiddenField);

	var tags = Array();

	var items = $('.tag_icon');
	for (var i=0; i<items.length; ++i)
	{
		var item = items.eq(i);
		if (item.hasClass('glyphicon-ok'))
		{
			tags.push(item.attr('id'));
		}
	}
	
	var items = $('.date_icon');
	for (var i=0; i<items.length; ++i)
	{
		var item = items.eq(i);
		if (item.hasClass('glyphicon-ok'))
		{
			tags.push(item.attr('id'));
		}
	}

	hiddenField = document.createElement("input");
	hiddenField.setAttribute("type", "hidden");
	hiddenField.setAttribute("name", 'tags');
	hiddenField.setAttribute("value", tags);
	form.appendChild(hiddenField);

	document.body.appendChild(form);
	form.submit();
}
