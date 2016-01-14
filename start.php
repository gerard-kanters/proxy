<?php
/**
 * Elgg proxy  plugin
 */


elgg_register_event_handler('init', 'system', 'proxy_init');


function proxy_init() {

	//Need to decalre generic function to use for Curl
	include_once(elgg_get_plugins_path() . "proxy/lib/functions.php");
}	
