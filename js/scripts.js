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
			$('.creditsContent').removeClass('away');
			// $(this).toggleClass('addition');

		});
		$('.thick').on('click', function (event) {
			event.preventDefault();
			$('.creditsContent').addClass('away');
		})
			

	//Menu toggle
		$('.menuToggle').on('click', function(event) {
			event.preventDefault();
			$('.menuContent').toggleClass('away');
			$('#menuToggle').toggleClass('strikeMenu');



			

		});


	console.log("It's working");

	//active Links 

    $("ul.wp-tag-cloud li a").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("active");
        }
    });

    $("ul.menu li a").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("activeMenu");
        }
    });

//animation 
 $(".itemLinkeachFront:nth-child(1)").animate(
        {top : "-=27%", left: "-=23%"}, 10000, function() {}
    );
  $(".itemLinkeachFront:nth-child(2)").animate(
        {top : "-=30%", left: "+=35%"}, 10000, function() {}
    );
  $(".itemLinkeachFront:nth-child(3)").animate(
        {top : "+=25%", left: "+=30%"}, 10000, function() {}
    );
   $(".itemLinkeachFront:nth-child(4)").animate(
        {top : "+=25%", left: "-=30%"}, 10000, function() {}
    );
   $(".itemLinkeachFront:nth-child(5)").animate(
        {top : "+=3%", left: "-=11%"}, 10000, function() {}
    );
   $(".itemLinkeachFront:nth-child(6)").animate(
        {top : "+=5%", left: "+=5%"}, 10000, function() {}
    );

});