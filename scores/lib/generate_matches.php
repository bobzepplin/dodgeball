<?php
require("mysql_connect.php");

//insert_matches(get_pool_matches(2));
//get_pool_matches(2);

generate_tournament(7);

function get_pool_matches($pool){
	$pool_matches = array();
	connect();
	$sql = "SELECT * FROM teams WHERE pool = ".$pool;
	$req = mysql_query($sql) or die ("SQL error: ".mysql_error());
	$teams = array();
	$i = 1;
	while($results = mysql_fetch_array($req)){
		$teams[$i] = $results["id"]; //Put every id in an array
		$i++;
	}
	if(count($teams)%2 != 0) $teams[count($teams)+1] = "BREAK"; //if odd add a temporary fake team
	print_r($teams);
	$nb = count($teams)/2;//nb match per round
	$nbR = $nb*(count($teams)-1);//nb of match in total for this pool
	$it = $nbR/$nb;//nb of iterations
	echo "<br>";
	for($j=1;$j<=$it;$j++){
		for($i=1;$i<=$nb;$i++){
		echo $teams[$i]."-".$teams[($i+$nb)]."<br>";
		$pool_matches[] = array($teams[$i],$teams[($i+$nb)]);
		}
		$teams = change($teams);
		echo "---<br>";

	}
	close();
	$size = count($pool_matches);
	for($i=0;$i<$size;$i++){
		if(($pool_matches[$i][0] == "BREAK") || ($pool_matches[$i][1] == "BREAK")){
			unset($pool_matches[$i]);
		}
	}
	$pool_matches = array_values($pool_matches);
	print_r($pool_matches);
	/*if($pool == 6){
		$pool_matches = duplicate($pool_matches);
	}*/
	return $pool_matches;
}
function duplicate(array $array){
	$newArray = array_merge($array, $array);

	return $newArray;
}
function change(array $array){
	$size = count($array);
	$newarray = array();
	$newarray[1] = $array[1];
	$firstLineSpecial = $size/2;
	$secondLineSpecial = $firstLineSpecial + 1;
	for($k=2;$k<=$size;$k++){
		if($k==$firstLineSpecial){
			$newarray[$size] = $array[$k];
		}
		if($k==$secondLineSpecial){
			$newarray[2] = $array[$secondLineSpecial];
		}
		else{
			if($k<=$firstLineSpecial){
				$newarray[$k+1] = $array[$k];
			}
			else {
				$newarray[$k-1] = $array[$k];
			}
		}
	}
	return $newarray;
}

function insert_matches(array $pools){
	$size = count($pools);
	connect();
	for($i=0;$i<$size;$i++){
		$sql = "INSERT INTO matches VALUES('','".$pools[$i][0]."','".$pools[$i][1]."','".(($i%3)+1)."','".($i+1)."','0','0','0')";
		$req = mysql_query($sql) or die("SQL Error : ".mysql_error());
	}
	close();
}

function generate_tournament($nbPools){
	$NB_FIELDS = 3;
	$pools = array();
	$maxMatchesPerPool = 0;
	for($i=1;$i<=$nbPools;$i++){
		$pools[$i] = get_pool_matches($i);
		if($maxMatchesPerPool < count($pools[$i])) $maxMatchesPerPool = count($pools[$i]);
	}
	echo "MAX MATCHES PER POOL : ".$maxMatchesPerPool;
	$arrayLine=0;
	$pool = 1;
	$slot = 1;
	$inserted = 0;
	connect();
	for($i=1;$i<=($maxMatchesPerPool*$nbPools);$i++){
		
		if($pool > $nbPools) $pool = 1;
		//if(array_key_exists($j, $pools[($i%$nbPools)])){
		if($pool==7){
			if($arrayLine >=5){
			$line = $arrayLine-5;
			if(count($pools[$pool]) > $line){
			echo "INSERT slot: ".$slot." Pool: ".($pool)." ARRAYLine : ".$line."<br>";
			$sql = "INSERT INTO matches VALUES('','".$pools[$pool][$line][0]."','".$pools[$pool][$line][1]."','".(($inserted%$NB_FIELDS)+1)."','".$slot."','0','0','0')";
			$req = mysql_query($sql) or die("SQL Error : ".mysql_error()."<br>".$sql);
			$inserted++;
			if($inserted%$NB_FIELDS == 0) $slot++;
			}
		}
		}
		else {
		if(count($pools[$pool]) > $arrayLine){
			echo "INSERT slot: ".$slot." Pool: ".($pool)." ARRAYLine : ".$arrayLine."<br>";
			$sql = "INSERT INTO matches VALUES('','".$pools[$pool][$arrayLine][0]."','".$pools[$pool][$arrayLine][1]."','".(($inserted%$NB_FIELDS)+1)."','".$slot."','0','0','0')";
			$req = mysql_query($sql) or die("SQL Error : ".mysql_error()."<br>".$sql);
			$inserted++;
			if($inserted%$NB_FIELDS == 0) $slot++;
		}
		}
		
	$pool++;
	if($i%$nbPools == 0) $arrayLine++;
	

	}
	close();
}
?>