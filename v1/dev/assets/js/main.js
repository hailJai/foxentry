$(document).ready(function(){
	$('.dev-img .img-responsive').hover(function(){
		$(this).addClass('pulse animated');
	}, function(){
		$(this).removeClass('pulse animated');
	});

	$('i').hover(function(){
		$(this).addClass('tada animated');
	}, function(){
		$(this).removeClass('tada animated');
	});

	$('.dev-img img').click(function(){
		var src = $(this).attr('src');
		$('#frame img').attr('src', src);
		$('#frame').addClass('fadeInDown animated');
		$('#overlay, #frame').show();
	});

	$('#close, #overlay').click(function(){
		$('#overlay, #frame').css("display", "none");
		$('#frame').removeClass('fadeInDown animated');
	});

	$('[data-toggle="tooltip"]').hover(function(){
		$(this).tooltip('toggle');
	});

	jQuery(".pow").fitText(1.2, { maxFontSize: '18px' });
	jQuery(".pow .orgs").fitText(1.2, { maxFontSize: '14px' });
	jQuery(".main").fitText(1.2, { maxFontSize: '15px' });
	jQuery(".dev-head h3").fitText(1.2, { maxFontSize: '25px' });
	jQuery(".text-info").fitText(1.2, { maxFontSize: '18px' });
	jQuery(".orgs-links").fitText(1.2, { maxFontSize: '15px' });
	jQuery(".about-links").fitText(1.2, { maxFontSize: '15px' });
	jQuery(".social-links").fitText(1.2, { maxFontSize: '15px' });
	jQuery("i.fa").fitText(1.2, { minFontSize: '35px' });
	jQuery(".footer-end").fitText(1.2, { maxFontSize: '15px' });

});