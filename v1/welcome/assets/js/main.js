$(document).ready(function(){
	$('#myCarousel').carousel({
		interval: 4000,
		cycle: true
	});

	$('.main-2 img').click(function(){
		var src = $(this).attr('src');
		$('#frame img').attr('src', src);
		$('#overlay-view, #frame').fadeIn();
		$('#frame').addClass('fadeInDown animated');
	});

	$('#close, #overlay').click(function(){
		$('#overlay-view, #frame').fadeOut();
		$('#frame').removeClass('fadeInDown animated');
	});

	$('[data-toggle="tooltip"]').hover(function(){
		$(this).tooltip('toggle');
	});

	$(window).scroll(function (){
	var main = $('.main-1').offset().top + 150;
    var scrll = $(this).scrollTop();
    if(scrll > main)
    {
        $("div.header").addClass('header-down');
        $("div.header").addClass('fadeInDown animated');
    }
    else 
    {
        $("div.header").removeClass('header-down');
        $("div.header").removeClass('fadeInDown animated');
    }

	});

	$('#main-player').click(function(){

		var playPause = $(this).next('video').get(0);
		if(playPause.paused)
		{
			playPause.play();
			$('#main-player i.fa').removeClass('fa-play-circle');
			$('#main-player i.fa').addClass('fa-pause');
			
		}
		else
		{
			playPause.pause();
			$('#main-player i.fa').removeClass('fa-pause');
			$('#main-player i.fa').addClass('fa-play-circle');
		}

	});

	$('.main-1').on('mousemove', function () {
	  $('#main-player').addClass('show');
	  try {
	    clearTimeout(timer);
	  } catch (e) {}
	  timer = setTimeout(function () {
	    $('#main-player').removeClass('show');
	  }, 500);
	});

	jQuery(".pow").fitText(1.2, { minFontSize: '14px', maxFontSize: '18px' });
	jQuery(".pow .orgs").fitText(1.2, { minFontSize: '12px', maxFontSize: '14px' });
	jQuery(".text-info").fitText(1.2, { maxFontSize: '18px' });
	jQuery(".orgs-links").fitText(1.2, { maxFontSize: '15px' });
	jQuery(".about-links").fitText(1.2, { maxFontSize: '15px' });
	jQuery(".social-links").fitText(1.2, { maxFontSize: '15px' });
	jQuery(".social-links i.fa").fitText(1.2, { minFontSize: '35px' });
	jQuery(".footer-end").fitText(1.2, { maxFontSize: '15px' });
	jQuery(".main-2 h3").fitText(1.2, { minFontSize: '20px', maxFontSize: '30px' });
	jQuery(".main-2 p").fitText(1.2, { maxFontSize: '15px' });

});

setTimeout(function() {
      $('.main-title, #main-player').fadeIn(4000);
	}, 2000);