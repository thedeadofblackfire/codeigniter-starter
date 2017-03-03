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
	
});