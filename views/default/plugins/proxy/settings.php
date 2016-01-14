<?php 


echo "<br><br><div>";

$proxy_name = $vars['entity']->proxy_name;

echo elgg_echo('proxy:name');

echo elgg_view('input/text', array('name'=>'params[proxy_name]', 'value'=> $proxy_name));

echo "</div>";

echo "<br><br><div>";

$proxy_port = $vars['entity']->proxy_port;

echo elgg_echo('proxy:port');

echo elgg_view('input/text', array('name'=>'params[proxy_port]', 'value'=> $proxy_port));

echo "</div>";



 
