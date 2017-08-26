
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

		// $('.fa-bars').click(function(){
		// 		$('#nav-icon4').toggleClass('open');

		// 			$(".headerMenu").toggleClass('dropdown');

		// 			// $('.borderWhite').toggle();
		// 			// $(".fa-bars").toggleClass('fa-borderss');
		// 			$(".headerMenu a").on("click", function(){
		// 			// console.log('fuckyou');
		// 			$(".headerMenu").hide();


		// 			$("hamburger").hover(function() {
		// 			    $(this).css("cursor", "pointer");
		// 			}, function() {
		// 			    $(this).css("", "");
		// 			});

		// 		});	

		// 	});
		// $(".headerMenu a").on("click", function(){
		// 		$('#nav-icon4').toggleClass('open');
		// 	setTimeout(function() {
		// 		$(".fa-bars").removeClass('fa-borderss');
		// 		// $(".fa-bars").addClass('hamburger');

				
		// 	});	

		// 	});

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
        {top : "-=30%", left: "-=14%"}, 10000, function() {}
    );
  $(".itemLinkeachFront:nth-child(2)").animate(
        {top : "-=30%", left: "+=33%"}, 10000, function() {}
    );
  $(".itemLinkeachFront:nth-child(3)").animate(
        {top : "-=20%", left: "+=46%"}, 10000, function() {}
    );
   $(".itemLinkeachFront:nth-child(4)").animate(
        {top : "+=30%", left: "-=29%"}, 10000, function() {}
    );
   $(".itemLinkeachFront:nth-child(5)").animate(
        {top : "-=4%", left: "-=30%"}, 7000, function() {}
    );
    $(".itemLinkeachFront:nth-child(7)").animate(
        {top : "-=29%", left: "+=8%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(6)").animate(
        {top : "+=50%", left: "+=1%"}, 5000, function() {}
    );
    $(".itemLinkeachFront:nth-child(8)").animate(
        {top : "-=6%", left: "-=1%"}, 10000, function() {}
    );
        $(".itemLinkeachFront:nth-child(9)").animate(
        {top : "+=47%", left: "-=12%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(10)").animate(
        {top : "+=32%", left: "+=85%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(11)").animate(
        {top : "+=40%", left: "+=35%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(12)").animate(
        {top : "-=42%", left: "-=8%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(13)").animate(
        {top : "+=2%", left: "+=38%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(14)").animate(
        {top : "+=12%", left: "+=17%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(15)").animate(
        {top : "+=23%", left: "-=8%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(16)").animate(
        {top : "-=12%", left: "+=63%"}, 10000, function() {}
    );

    $(".itemLinkeachFront:nth-child(17)").animate(
        {top : "+=25%", left: "+=15%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(18)").animate(
        {top : "-=28%", left: "+=74%"}, 10000, function() {}
    );

        $(".itemLinkeachFront:nth-child(19)").animate(
        {top : "-=15%", left: "-=18%"}, 10000, function() {}
    );
        $(".itemLinkeachFront:nth-child(20)").animate(
        {top : "-=28%", left: "+=38%"}, 10000, function() {}
    );    

    $(".itemLinkeachFront:nth-child(21)").animate(
        {top : "-=28%", left: "+=75%"}, 10000, function() {}
    );
        $(".itemLinkeachFront:nth-child(22)").animate(
        {top : "+=40%", left: "+=70%"}, 10000, function() {}
    );
    $(".itemLinkeachFront:nth-child(23)").animate(
        {top : "+=32%", left: "+=75%"}, 10000, function() {}
    );
     $(".itemLinkeachFront:nth-child(24)").animate(
        {top : "+=12%", left: "+=87%"}, 10000, function() {}
    );

        $(".itemLinkeachFront:nth-child(25)").animate(
        {top : "+=38%", left: "+=62%"}, 10000, function() {}
    );


});

//mouse mover
$(document).mousemove(function(e) {
  $('#space-invader').animate({
    left: e.pageX,
    top: e.pageY
  }).clearQueue();  
});

//menu
$("button").click(function(){
  $("body").toggleClass("menu-push");
  $(".menu").toggleClass("menu-open");
  $(".headerContent, .creditsToggle").toggleClass("headerOpen");
  $(".loading").toggleClass("whiteLines")
}); 
