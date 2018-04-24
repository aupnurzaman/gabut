$(document).ready(function() {
	$.getJSON('data.json', function(data) {
		$.each(data.event, function(i) {
				var image =
				"<a class='nav-link pilih1' href = '" + this.img + "'>" +
				"<img class='pilih_img' src='" + this.img + "'>"+this.title+"<p class='harga'>"+ this.harga+"</p>"+"</a>";

				$("#list-event-card").append("<div id='card-container" + i + "' class='col-lg-4 col-md-6 col-sm-6 pb-5'></div>");
				$("#card-container"+ i.toString()).append("<div id='card" +i + "' class='card'></div>");
				$("#card"+ i.toString()).append(image, cardBody, cardFooter);
		});
	});
	$("button").click(function() {
		$("div").loading();
	});

	//JS for magnific popup plugin
	$(".img-popup-link").magnificPopup({type : 'image'});
});