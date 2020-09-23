$('.carousel[data-type="multi"] .item').each(function(){
	if($('html').attr('dir')=='rtl')
	{
		var next = $(this).prev();
		if (!next.length) 
		{
			next = $(this).siblings(':last');
		}
	}
	else
	{
		var next = $(this).next();
		if (!next.length) 
		{
			next = $(this).siblings(':first');
		}
	}

  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<0;i++) 
  {
    if($('html').attr('dir')=='rtl')
	{
		next = $(this).prev();
		if (!next.length) 
		{
			next = $(this).siblings(':last');
		}
	}
	else
	{
		next = $(this).next();
		if (!next.length) 
		{
			next = $(this).siblings(':first');
		}
	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});