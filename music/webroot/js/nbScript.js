$(document).ready(function () {

	$("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('.overlay,.nav-link').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').fadeOut();
        $('#sidebarCollapse').addClass('active');
    });

	$('#sidebarCollapse').on('click',function () {

		$('#sidebar').toggleClass('active');

		$('.overlay').fadeToggle();

		$('.collapse.in').toggleClass('in');

		$('a[aria-expanded=true]').attr('aria-expanded', 'false');

		$(this).toggleClass('active');

	});

});