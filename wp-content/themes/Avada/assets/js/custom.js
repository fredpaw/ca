jQuery(document).ready(function($){
	if($(".side-nav .page_item_has_children a:has(span)").length == 0)
	{
		$(".side-nav .page_item_has_children a").append('<span class="arrow"></span>');
	}
});