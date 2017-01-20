$(function(){

	$('.bxslider').bxSlider({
	  mode: 'fade',
	  captions: true,
	  auto: true
	  
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
			$('.creditsContent').removeClass('away');

			$('h2.underlineYear').removeClass();

			$('#hartist').addClass('strikeMenuArtist');

			$('.yearArchiveToggle').addClass('awayAway');


			

		});

	//Menu toggle
		$('.menuToggle').on('click', function(event) {
			event.preventDefault();
			$('.menuContent').removeClass('away');

			$('#menuToggle').addClass('strikeMenu');



			

		});


	console.log("It's working");

});