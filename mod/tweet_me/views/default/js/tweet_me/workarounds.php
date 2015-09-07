<?php 
?>

elgg.provide('phloor.bootstrap.workarounds');

phloor.bootstrap.workarounds.init = function() {
	// add class "active" to all elgg-state-selected items
    if ($(".elgg-state-selected").length) {
    	$(".elgg-state-selected").addClass('active');
    } 
    
    // stop forms from disappearing on dropdown menues
    $('.dropdown-menu').find('form').click(function (e) {
    	e.stopPropagation();
  	});
  	
  	// switch "elgg-button-delete" with "btn-danger"
  	if ($(".elgg-button-delete").length) {
    	$(".elgg-button-delete").addClass('btn-danger');
    	$(".elgg-button-delete").removeClass('elgg-button-delete');
    } 
    
 return true;
}
 
elgg.register_hook_handler('init', 'system', phloor.bootstrap.workarounds.init);
