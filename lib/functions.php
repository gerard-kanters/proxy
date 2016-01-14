<?php
/**
 * function library
 */

function get_proxy_name() {
	$proxy = elgg_get_plugin_setting('proxy_name','proxy');

	return $proxy;
}

function get_proxy_port() {
	$port = elgg_get_plugin_setting('proxy_port','proxy');
	return $port;
}

function set_curl_proxy() {
	
	curl_setopt($ch,CURLOPT_PROXYTYPE,CURLPROXY_HTTP);
	curl_setopt($ch,CURLOPT_PROXY,$proxy);
	curl_setopt($ch,CURLOPT_PROXYPORT,$port);
	return;
}
