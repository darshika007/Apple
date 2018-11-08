(function () {
	"use strict";

	var treeviewMenu = $('.app-menu');

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();

})();

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah')
				.attr('src', e.target.result)
				.width(150)
				.height(200);
		};

		reader.readAsDataURL(input.files[0]);
	}
}


$(".rename").click(function(e){
	e.preventDefault();
	var $this = $(this);
	var fileName = $(this).data("file");
	  $("#basicModal").data("fileName", fileName).modal("toggle", $this);
	
  });
  
  $("#basicModal").on("shown.bs.modal", function(e){
	//data-fileName attribute associated with the modal added in the click event of the button
  alert($(this).data("fileName"));
	//my data-file associated with the button 
	alert($(e.relatedTarget).data("file"));
  })