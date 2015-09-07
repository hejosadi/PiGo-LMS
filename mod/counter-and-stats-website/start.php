<?php
	/**
	* Counter and Stats Website.
	* 
	* @package stat
	* @author LogoNike.Com
	* @copyright None
	* @link http://logonike.com/
	*/



	// register default elgg event
	elgg_register_event_handler("init", "system", "analyticslogo_init");
	
	function analyticslogo_init()	{
		// extend the page footer
		elgg_extend_view("footer/analytics", "analyticslogo/footer", 999);
	}
	
	