$(function(){

	$('.bxslider').bxSlider({
	  	mode: 'fade',
	  	captions: true,
	  	auto: true,
		adaptiveHeight: true,
   		slideWidth: 700,
   		
	  
	});

	//dropdown menu 

		$('.fuckyou').click(function(){
				$('#nav-icon4').toggleClass('open');

					$(".headerMenu").toggleClass('dropdown');
					// $('.borderWhite').toggle();
					// $(".fa-bars").toggleClass('fa-borderss');
					$(".headerMenu a").on("click", function(){
					// console.log('fuckyou');
					$(".headerMenu").hide();


					$("hamburger").hover(function() {
					    $(this).css("cursor", "pointer");
					}, function() {
					    $(this).css("", "");
					});

				});	

			});
		$(".headerMenu a").on("click", function(){
				$('#nav-icon4').toggleClass('open');
			setTimeout(function() {
				$(".fa-bars").removeClass('fa-borderss');
				// $(".fa-bars").addClass('hamburger');

				
			});	

			});

	//credits toggle
		$('.creditsToggle').on('click', function(event) {
			event.preventDefault();
			$('.creditsContent').toggleClass('away');
			$(this).toggleClass('addition');


			

		});

	//Menu toggle
		$('.menuToggle').on('click', function(event) {
			event.preventDefault();
			$('.menuContent').toggleClass('away');
			$('#menuToggle').toggleClass('strikeMenu');



			

		});


	console.log("It's working");

	//active Links 
	jQuery(function($){
    $('li a').filter(function(){
       return $(this).attr('href').toLowerCase() === window.location.pathname.toLowerCase();
    }).addClass('active');
});

    $("ul.wp-tag-cloud li a").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("active");
        }
    });



});