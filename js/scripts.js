$(function(){

	$('.mobile i').click(function(){
		
		var menuList = $('.mobile').find('ul');
		var menuIcon = $('.mobile i');
		var header = document.getElementById('header');

		if(menuList.is(':hidden')==true){
			//menuIcon.removeClass('fas fa-bars');			
			//menuIcon.addClass('fas fa-stream');
			menuIcon.removeClass('fas fa-align-justify');
			menuIcon.addClass('fas fa-align-center');
			header.style.borderColor = "rgba(0,0,0,0.1)";
		}
		else{
			menuIcon.removeClass('fas fa-align-center');
			menuIcon.addClass('fas fa-align-justify');
			setTimeout(function(){
				if(menuList.is(':hidden')==true)
					header.style.borderColor = "rgba(0,0,0,0.5)";
				else header.style.borderColor = "rgba(0,0,0,0.1)";
			}, 500)
			
		}
		menuList.slideToggle(500);
	})
	$('#scrollUp').click(function(){ 
        $('html,body').animate({ scrollTop: 0 }, 400);
        return false; 
	});
	if($('target').length>0){
		var id = $('target').attr('target');
		var element = '#'+id;
		var divScroll = $(element).offset().top;
		var e = document.getElementById(id);
		var color = jQuery(element).css("background-color");
		$('html,body').animate({scrollTop:divScroll},500,function(){
			e.animate({backgroundColor:'rgba(139, 224, 206,0.4)'},500,function(){
				e.animate({backgroundColor:color},500);
			});
		});
	}


	
    $('.slider-skills .slider-container').slick({
	    dots: true,
	    arrows:false,
	  	infinite: true,
	  	centerMode: true,
	  	centerPadding:0,
	  	speed:1000,
	  	slidesToShow: 6,
	    autoplay: true,
		autoplaySpeed: 3000,
	    pauseOnHover:false,
	    responsive:[
	    {
	    	breakpoint: 768,
	    	settings:{
	    		slidesToShow: 2
	    	}
	    }
	    ]
    });


});