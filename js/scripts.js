var myImages = new Array("line1.png", "line2.png", "line3.png", "line4.png");
var templateDirectory = "<?php bloginfo('template_directory'); ?>";
$(function(){
	//background images 
        var random = myImages[Math.floor(Math.random() * myImages.length)];
        random = 'url('+ templateDirectory +'/images/' + random + ')';
        $('body').css('background-image', random);

    //     setInterval(function() {
    //         SetImage();
    //     });

    // function SetImage() {
    //     var random = myImages[Math.floor(Math.random() * myImages.length)];

    //     random = 'url(images/' + random + ')';
    //     $('body').fadeOut(2000);

    //     setTimeout(function () {
    //         $('body').css('background-image', random);
    //         $('body').fadeIn(2000);
    //     }, 2000);
    // }


	//bxslider 
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
        {top : "-=30%", left: "-=19%"}, 10000, function() {}
    );
  $(".itemLinkeachFront:nth-child(2)").animate(
        {top : "-=35%", left: "+=27%"}, 10000, function() {}
    );
  $(".itemLinkeachFront:nth-child(3)").animate(
        {top : "+=0%", left: "+=24%"}, 10000, function() {}
    );
   $(".itemLinkeachFront:nth-child(4)").animate(
        {top : "+=16%", left: "-=26%"}, 10000, function() {}
    );
   $(".itemLinkeachFront:nth-child(5)").animate(
        {top : "-=15%", left: "-=15%"}, 7000, function() {}
    );
   $(".itemLinkeachFront:nth-child(6)").animate(
        {top : "-=7%", left: "+=3%"}, 5000, function() {}
    );
    $(".itemLinkeachFront:nth-child(7)").animate(
        {top : "-=35%", left: "-=7%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(6)").animate(
        {top : "+=3%", left: "+=1%"}, 5000, function() {}
    );
    $(".itemLinkeachFront:nth-child(8)").animate(
        {top : "-=8%", left: "-=1%"}, 10000, function() {}
    );
        $(".itemLinkeachFront:nth-child(9)").animate(
        {top : "+=16%", left: "-=1%"}, 10000, function() {}
    );


});

