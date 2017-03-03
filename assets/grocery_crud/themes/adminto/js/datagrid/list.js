/*global jQuery*/
jQuery(function ($) {

    "use strict";

    //As simple as that! :)
    $('.gc-container').datagrid();
	
	// custom
	$('.gc-container').bind('added-loading-class', function() {
	  //console.log('added');
	  $('.loading-spinner').show();
	});
	
	$('.gc-container').bind('removed-loading-class', function() {
	  //console.log('removed');
	  $('.loading-spinner').hide();
	});
	
	// fullscreen back
	$(document).on('keyup',function(evt) {
		if (evt.keyCode == 27 && $('.gc-container').hasClass('container-full')) {
		   //console.log('Esc key pressed.');
		   $('.gc-full-width').trigger('click');
		}
	});

});