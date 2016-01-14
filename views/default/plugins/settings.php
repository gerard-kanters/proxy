<?php 

$youtube = $vars['entity']->youtube;

echo "<div>";

echo elgg_echo('youtube:question1');

echo elgg_view('input/dropdown',array('name' => 'params[youtube]', 'options_values'=> array( '0' => '  ', '1'=>'Yes','2'=>'No'),'value'=> $youtube));

echo "</div><br><br><div>";

$search_contexts = $vars['entity']->search_contexts;

echo elgg_echo('youtube:question2');

echo elgg_view('input/text', array('name'=>'params[search_contexts]', 'value'=> $search_contexts));

echo "</div>";

echo "<br><br><div>";

$proxy_name = $vars['entity']->proxy_name;

echo elgg_echo('youtube:proxy:name');

echo elgg_view('input/text', array('name'=>'params[proxy_name]', 'value'=> $proxy_name));

echo "</div>";

echo "<br><br><div>";

$proxy_port = $vars['entity']->proxy_port;

echo elgg_echo('youtube:proxy:port');

echo elgg_view('input/text', array('name'=>'params[proxy_port]', 'value'=> $proxy_port));

echo "</div>";



 
