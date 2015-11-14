<?php
require("mysql_connect.php");

function generate_finals(){

}
get_men_teams();
function get_men_teams(){
	connect();
	$sql = "SELECT * FROM teams WHERE fk_category_id = 1 ORDER BY pool ASC, points DESC";
	$req = mysql_query($sql) or die("SQL Error: ".mysql_error());
	$qualified = array();
	$pool = 0;
	$place = 1;
	while($data = mysql_fetch_array($req)){
		if($data["pool"] != $pool){
			$pool = $data["pool"];	
			$place = 1;							
		}
		if($place < 4){
				$qualified[$pool][$place] = array($data["id"] => $data["points"]);
			}
	$place++;
	}

	print_r($qualified);

	close();
}
?>