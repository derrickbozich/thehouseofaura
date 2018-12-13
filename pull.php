<?php
//https://gist.github.com/1809044
if($_GET['token'] == '117915ca21ae6d3f5135207e77ec1914eefeb1a36010d8cf678452a7f86fa7ef'){
	$commands = array(
    //'pwd',
		//'whoami',
		'git pull',
		'git status',
	);
	$output = '';
	foreach($commands AS $command){
		$tmp = shell_exec($command);
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp)) . "</br>";
	}
  echo $output;
}
