$.getDocHeight = function(){
	var D = document;
	return Math.max(
		Math.max(D.body.scrollHeight, D.documentElement.scrollHeight),
		Math.max(D.body.offsetHeight, D.documentElement.offsetHeight),
		Math.max(D.body.clientHeight, D.documentElement.clientHeight));
};

$(document).ready(function()
{
	$(".button")
		.addClass('deselect')
		.mousedown(function() { $(this).addClass('down'); })
		.mouseup(function() { $(this).removeClass('down'); })
		.mouseleave(function() { $(this).removeClass('down'); });
	
	// Set the main area (sidebar + content) height match with browser height	
	$("#main").height(($.getDocHeight()-80));
});