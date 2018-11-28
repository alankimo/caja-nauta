// Abrir menu mobile
$(".header-mobile__hamburguer").click(function() {
	$('.wrapper').addClass('menu--wrapper-blur');
	$('.menu-expand').addClass('menu--open');
});

// Cerrar menu mobile
$(".close-menu-expand").click(function() {	
	$('.wrapper').removeClass('menu--wrapper-blur');
	$('.menu-expand').removeClass('menu--open');
});

// Sidebar
$(".main-menu__parent").click(function() {	
	var chooseSidebar = $(this).attr('data-open-child');
	$('.main-menu__child').removeClass('menu-child--open');
	// $('.main-menu__child').removeClass('menu-child--open');
	$('[data-related-menu=' + chooseSidebar + ']').addClass('menu-child--open');
	// $('#' + chooseSidebar).addClass('menu-child--open');
});

// Edit Articles
$(".trigger-edit-article").click(function() {
	var chooseTab = $(this).attr('data-article-edit');
	// Show and Hide articles
	$('.article-edit').hide();
	$('#' + chooseTab).fadeIn();
});

// Close edit Articles
$(".trigger-hide-box").click(function() {
	var closeTab = $(this).attr('data-close-box');
	$('#' + closeTab).fadeOut();
});

// Toggles cool
$(".input__toggle").click(function() {

	var chooseToggle = $(this).attr('data-pos');
	var chooseToggleState = $(this).attr('data-pos-state');

	if (chooseToggleState == 'active') {

		$(this).attr('data-pos-state', 'deactive');
		$('#' + chooseToggle).removeClass('active');
		$('#' + chooseToggle).addClass('deactive');
		$('#' + chooseToggle).html('No');

	} else if (chooseToggleState == 'deactive') {

		$(this).attr('data-pos-state', 'active');
		$('#' + chooseToggle).removeClass('deactive');
		$('#' + chooseToggle).addClass('active');
		$('#' + chooseToggle).html('Si');

	}

});

// Abrir modal para campañas
$("#open-form-campana").click(function() {
	$('.wrapper').addClass('menu--wrapper-blur');
	$('#formulario-campana').fadeIn();
});

$("#close-form-campana").click(function() {
	$('.wrapper').removeClass('menu--wrapper-blur');
	$('#formulario-campana').hide();
});