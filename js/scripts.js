
$(function(){

	//bxslider 
	$('.bxslider').bxSlider({
	  	mode: 'fade',
	  	captions: true,
	  	auto: true,
		adaptiveHeight: true,
   		slideWidth: 700,
   		
	  
	});

	//dropdown menu 

		$('.fa-bars').click(function(){
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
        $('.fuckyou').on('click', function(event) {
            event.preventDefault();
            $('.menuContent').toggleClass('away');
            $('.Menuflex').toggleClass('menuFlexOpen');
            // $('#menuToggle').toggleClass('strikeMenu');



            

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
        {top : "-=28%", left: "-=19%"}, 10000, function() {}
    );
  $(".itemLinkeachFront:nth-child(2)").animate(
        {top : "-=30%", left: "+=33%"}, 10000, function() {}
    );
  $(".itemLinkeachFront:nth-child(3)").animate(
        {top : "-=3%", left: "+=26%"}, 10000, function() {}
    );
   $(".itemLinkeachFront:nth-child(4)").animate(
        {top : "+=25%", left: "-=29%"}, 10000, function() {}
    );
   $(".itemLinkeachFront:nth-child(5)").animate(
        {top : "-=15%", left: "-=19%"}, 7000, function() {}
    );
   $(".itemLinkeachFront:nth-child(6)").animate(
        {top : "-=7%", left: "+=7%"}, 5000, function() {}
    );
    $(".itemLinkeachFront:nth-child(7)").animate(
        {top : "-=29%", left: "+=8%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(6)").animate(
        {top : "+=5%", left: "+=1%"}, 5000, function() {}
    );
    $(".itemLinkeachFront:nth-child(8)").animate(
        {top : "-=6%", left: "-=1%"}, 10000, function() {}
    );
        $(".itemLinkeachFront:nth-child(9)").animate(
        {top : "+=18%", left: "-=1%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(10)").animate(
        {top : "+=2%", left: "+=18%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(11)").animate(
        {top : "+=25%", left: "+=30%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(12)").animate(
        {top : "-=28%", left: "-=10%"}, 10000, function() {}
    );


});

