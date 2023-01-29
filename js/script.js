// scrollTop
		function gotop() {

			$("html,body").animate({
				scrollTop: 0
			});
		}


		// Animasi Muncul
		$(window).scroll(function() {
			var wScroll = $(this).scrollTop();

			if ( wScroll > $('#home').offset().top -0 ) {
				$('.top').addClass('top-muncul');
			}

		});


// navbar
$(window).scroll(function(){
	if ($(window).scrollTop() > 100){
		$('.navbar').addClass('nav-fixed-top bg-primary shadow')
		$('.navbar').removeClass('nav-fixed')
	} else {
		$('.navbar').removeClass('nav-fixed-top text-light shadow')
		$('.navbar').addClass('nav-fixed')
	}
}) 


$(window).scroll(function(){
	if ($(window).scrollTop() > 100){
		$('.top').removeClass('d-none')
	} else {
		$('.top').addClass('d-none')
	}
}) 

	
	// smooth-scroll
		$(function() {

			$(".smooth-scroll").click(function() {
				var self = this;
				$("html,body").animate({
					scrollTop: $($(self).attr("href")).offset().top - 80
				});
				return false;
			});
		});

	// modal
	function onClick(element) {
  	document.getElementById("img01").src = element.src;
  	document.getElementById("modal01").style.display = "block";
}
