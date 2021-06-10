$(function(){

	var header = document.getElementById('header');
	var headroom = new Headroom(header);
	headroom.init();

	// Menu responsivo 
	var ancho = $(window).width(),
		enlaces = $('#enlaces'),
		btnMenu = $('#btnMenu'),
		icono = $('#btnMenu .icono');

		if(ancho < 850){
			enlaces.hide();
			icono.addClass('fa-bars');
		}

		btnMenu.on('click', function(e){
			enlaces.slideToggle();
			icono.toggleClass('fa-bars');
			icono.toggleClass('fa-times');
		});

		$(window).on('resize', function(){
			if($(this).width() > 850){
				enlaces.show();
				icono.addClass('fa-times');
				icono.removeClass('fa-bars');
			} else {
				enlaces.hide();
				icono.addClass('fa-bars');
				icono.removeClass('fa-times');
			}
		});
});