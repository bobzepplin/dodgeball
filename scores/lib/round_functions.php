<?php
function addRound($matchId, $round, $nbTeam1, $nbTeam2, $team1Id, $team2Id, $time){
	$team1Won = 0;
	$team2Won = 0;
	$perfectTeam1 = 0;
	$perfectTeam2 = 0;
	$draw = 0;
	$pointsTeam1=0;
	$pointsTeam2=0;

	$sql = "SELECT * FROM rounds WHERE fk_match_id = '".$matchId."'";
	$req = mysql_query($sql) or die("SQL Error: ".mysql_error());
	while($data = mysql_fetch_array($req)){
		if($data["nb_player_team1"] > $data["nb_player_team2"]){
			$team1Won++;
			if($data["nb_player_team2"] == 0) $perfectTeam1++;
		}
		if($data["nb_player_team1"] < $data["nb_player_team2"]){
			$team2Won++;
			if($data["nb_player_team1"] == 0) $perfectTeam2++;
		}
		if($data["nb_player_team1"] == $data["nb_player_team2"]) $draw++;
	}

	if($round == 2){
		if(($nbTeam1>$nbTeam2) && ($team1Won == 1) && ($team2Won == 0)){//Team1 wins in 2 matches
			if($perfectTeam1 == 1 && $nbTeam2 == 0){//Team1 perfect - 4pts
				$sql = "UPDATE teams SET points = points+4 WHERE id = '".$team1Id."'";	
				$pointsTeam1=4;
			} else {//Team1 - 3pts
				$sql = "UPDATE teams SET points = points+3 WHERE id = '".$team1Id."'";	
				$pointsTeam1=3;
			}
			mysql_query($sql) or die ("SQL Error ".mysql_error());
			$sql = "UPDATE matches SET winner=1,points_team1='".$pointsTeam1."' WHERE id='".$matchId."'";
			mysql_query($sql) or die ("SQL Error: ".mysql_error());
		}
		if(($nbTeam1<$nbTeam2) && ($team2Won == 1) && ($team1Won == 0)){//Team2 wins in 2 matches
			if($perfectTeam2 == 1 && $nbTeam1 == 0){//Team2 perfect - 4pts
				$sql = "UPDATE teams SET points = points+4 WHERE id = '".$team2Id."'";
				$pointsTeam2=4;
			} else { //Team2 - 3pts
				$sql = "UPDATE teams SET points = points+3 WHERE id = '".$team2Id."'";
				$pointsTeam2=3;
			}
			mysql_query($sql) or die ("SQL Error ".mysql_error());
			$sql = "UPDATE matches SET winner=2,points_team2='".$pointsTeam2."' WHERE id='".$matchId."'";
			mysql_query($sql) or die ("SQL Error: ".mysql_error());
		}
		
	} elseif($round == 3){
			if(($draw == 1) && ($nbTeam1>$nbTeam2) && ($team1Won == 1)){
				$sql = "UPDATE teams SET points = points+3 WHERE id = '".$team1Id."'";
				mysql_query($sql) or die("SQL Error: ".mysql_error());
				$sql = "UPDATE matches SET winner=1,points_team1=3 WHERE id='".$matchId."'";
				mysql_query($sql) or die ("SQL Error: ".mysql_error());
			}
			elseif(($draw == 1) && ($nbTeam1<$nbTeam2) && ($team2Won == 1)){
				$sql = "UPDATE teams SET points = points+3 WHERE id = '".$team2Id."'";
				mysql_query($sql) or die("SQL Error: ".mysql_error());
				$sql = "UPDATE matches SET winner=2,points_team2=3 WHERE id='".$matchId."'";
				mysql_query($sql) or die ("SQL Error: ".mysql_error());
			}
			elseif(($draw == 2) && ($nbTeam1>$nbTeam2)){
				$sql = "UPDATE teams SET points = points+3 WHERE id = '".$team1Id."'";
				mysql_query($sql) or die("SQL Error: ".mysql_error());
				$sql = "UPDATE matches SET winner=1,points_team1=3 WHERE id='".$matchId."'";
				mysql_query($sql) or die ("SQL Error: ".mysql_error());
			}
			elseif(($draw == 2) && ($nbTeam1<$nbTeam2)){
				$sql = "UPDATE teams SET points = points+3 WHERE id = '".$team2Id."'";
				mysql_query($sql) or die("SQL Error: ".mysql_error());
				$sql = "UPDATE matches SET winner=2,points_team2=3 WHERE id='".$matchId."'";
				mysql_query($sql) or die ("SQL Error: ".mysql_error());
			}
			elseif(($nbTeam1>$nbTeam2) && $team1Won == 1){//Team1 wins in 3 matches - team1 2pts, team2 1pt
				$sql = "UPDATE teams SET points = points+2 WHERE id = '".$team1Id."'";
				mysql_query($sql) or die("SQL Error: ".mysql_error());
				$sql = "UPDATE teams SET points = points+1 WHERE id = '".$team2Id."'";
				mysql_query($sql) or die("SQL Error: ".mysql_error());
				$sql = "UPDATE matches SET winner=1,points_team1=2,points_team2=1 WHERE id='".$matchId."'";
				mysql_query($sql) or die ("SQL Error: ".mysql_error());
			}
			elseif(($nbTeam1<$nbTeam2) && $team2Won == 1){//Team2 wins in 3 matches - team2 2pts, team1 1pt
				$sql = "UPDATE teams SET points = points+2 WHERE id = '".$team2Id."'";
				mysql_query($sql) or die("SQL Error: ".mysql_error());
				$sql = "UPDATE teams SET points = points+1 WHERE id = '".$team1Id."'";
				mysql_query($sql) or die("SQL Error: ".mysql_error());
				$sql = "UPDATE matches SET winner=2,points_team1=1,points_team2=2 WHERE id='".$matchId."'";
				mysql_query($sql) or die ("SQL Error: ".mysql_error());
			}
			elseif(($nbTeam1 == $nbTeam2) || (($nbTeam1>$nbTeam2) && ($team2Won == 1)) || (($nbTeam1<$nbTeam2) && ($team1Won == 1))){//draw match - 1pt per team
				$sql = "UPDATE teams SET points = points+1 WHERE id = '".$team2Id."'";
				mysql_query($sql) or die("SQL Error: ".mysql_error());
				$sql = "UPDATE teams SET points = points+1 WHERE id = '".$team1Id."'";
				mysql_query($sql) or die("SQL Error: ".mysql_error());
				$sql = "UPDATE matches SET winner=12,points_team1=1,points_team2=1 WHERE id='".$matchId."'";
				mysql_query($sql) or die ("SQL Error: ".mysql_error());
			}
		
		

	}
	$sql = "INSERT INTO rounds VALUES('','".$matchId."','".$time."','".$nbTeam1."', '".$nbTeam2."')";
	$req = mysql_query($sql) or die ("SQL Error: ".mysql_error());


}
?>