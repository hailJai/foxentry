$(function(){

	var hash=window.location.hash;
	hash && $ ('ul.nav a href="' + hash + '"').tab('show');


	$("#home a:contains('Home')").parent().addClass('active');
	$("#council a:contains('Council Generated')").parent().addClass('active');
	$("#prof a:contains('Prof Generated')").parent().addClass('active');
	$("#accountinfo a:contains('Account Info')").parent().addClass('active');


	
	$('ul.nav li.dropdown').hover(
		function(){
			$('.dropdown-menu', this).fadeIn();	
		}, function(){
				$('.dropdown-menu', this).fadeOut("fast");
			});
			
	$("[data-toggle='tooltip']").tooltip({ animation:true});

	$('.modalphotos img').on('click', function(){
		$('#modal').modal({
				show:true,
			})

	
	var mysrc=this.src.substr(0,this.src.length-7) + '.jpg';
	$('#modalimages').attr('src',mysrc);
	$('#modalimages').on('click',function(){
		$('#modal').modal('hide');
	});

});

});

