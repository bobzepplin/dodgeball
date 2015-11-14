<?php

function connect(){
	$db = mysql_connect('localhost', 'score_15','afdbba15!');
	mysql_set_charset("UTF8", $db);
	mysql_select_db('score_2015',$db);
}

function close(){
	mysql_close();
}

?>