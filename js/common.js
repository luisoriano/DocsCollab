// Get document height
$.getDocHeight = function()
{
	var D = document;
	return Math.max(
		Math.max(D.body.scrollHeight, D.documentElement.scrollHeight),
		Math.max(D.body.offsetHeight, D.documentElement.offsetHeight),
		Math.max(D.body.clientHeight, D.documentElement.clientHeight));
};

// Start listening to sidebar actions
// Take action when user clicks on "Create New", "Upload", etc.
function startSidebarListener()
{
	$("#sidebar a").click(function()
	{
		var action = $(this).attr('name').replace('SB_','');
		$("#sidebar a").parent().removeClass('active');	// remove highlight from previously activated menu
		$(this).parent().addClass('active');			// chnage the active sidebar menu to the clicked one and highlight it
		
		// Perform action associated with the active menu
		switch (action)
		{
			case 'MyDocs':
				//-->
				break;
			case 'CreateNew':
				//-->
				break;
			case 'Upload':
				//-->
				break;
			case 'Groups':
				//-->
				break;
			case 'Settings':
				//-->
				break;
		}
	});
}

// After document is loaded
$(document).ready(function()
{
	$(".button")
		.addClass('deselect')
		.mousedown(function() { $(this).addClass('down'); })
		.mouseup(function() { $(this).removeClass('down'); })
		.mouseleave(function() { $(this).removeClass('down'); });
	
	// Set the main area (sidebar + content) height match with browser height	
	$("#main").height(($.getDocHeight()-90));
	
	// Start listening to sidebar actions (whether user clicks on "Create New", "Upload", etc.)
	startSidebarListener();
});

// When window is resized
$(window).resize(function()
{
	// Set the main area (sidebar + content) height match with browser height	
	$("#main").height(($.getDocHeight()-91));
});