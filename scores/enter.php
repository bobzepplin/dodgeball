<?php
require("lib/mysql_connect.php");
require("lib/round_functions.php");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  connect();
  addRound($_GET["match_id"],$_POST["round"],$_POST["team1Nb"],$_POST["team2Nb"],$_POST["team1Id"],$_POST["team2Id"],$_POST["time"]);
  close();
}
connect();
$id = $_GET["match_id"];

$sql = "SELECT * FROM matches WHERE id=".$id;
$req = mysql_query($sql) or die("SQL Error: ".mysql_error());
$data = mysql_fetch_array($req);
if($data["winner"] == 0) $finished = false;
else $finished = true;

$sql = "SELECT m.*, (SELECT name FROM teams WHERE id = m.fk_team1_id) as team1Name, (SELECT name FROM teams WHERE id = m.fk_team2_id) as team2Name FROM matches as m WHERE id = ".$id;
$req = mysql_query($sql) or die("SQL Error: ".mysql_error());
$data = mysql_fetch_array($req);

$team1Id = $data["fk_team1_id"];
$team2Id = $data["fk_team2_id"];

$sql_get = "SELECT * FROM rounds WHERE fk_match_id = ".$id;
$req_get = mysql_query($sql_get) or die ("SQL Error : ".mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dodgeball Scores</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../"><img src="http://www.dodgeball.ch/themes/dodgeball/img/template/logo_w.png" width="130" height="36" alt="afdbba logo"></a>
        </div>
        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Match en cours</a></li>
            <li class="active"><a href="display.php"><span class="glyphicon glyphicon-time"></span> Horaires des matchs</a></li>
            <li><a href="pools.php"><span class="glyphicon glyphicon-flag"></span> Pools & Scores</a></li>
            <li><a href="../"><span class="glyphicon glyphicon-arrow-left"></span> Dodgeball.ch</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
      <div class="jumbotron">
        <h1><?php echo $data["team1Name"]." vs. ".$data["team2Name"];?></h1>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <?php 
            $round = 1;
            while($data_get = mysql_fetch_array($req_get)){
              echo "<h4>Round ".$round."</h4>";
              echo "# joueurs ".$data["team1Name"].": ".$data_get["nb_player_team1"]."<br>";
              echo "# joueurs ".$data["team2Name"].": ".$data_get["nb_player_team2"]."<br>";
              echo "Temps de la manche ".$data_get["round_time"];
              $round++;
            }
            
            if(!$finished){
          ?>
          <h4>Round <?php echo $round;?></h4>
          <p>
            <form class="form-horizontal" role="form" method="POST" action="enter.php?match_id=<?php echo $_GET["match_id"];?>">
              <div class="form-group">
                <label for="selectTeam1" class="col-sm-4 control-label"># <?php echo $data["team1Name"];?></label>
                <div class="col-sm-8">
                  <select class="form-control" name="team1Nb">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="selectTeam2" class="col-sm-4 control-label"># <?php echo $data["team2Name"];?></label>
                <div class="col-sm-8">
                  <select class="form-control" name="team2Nb">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>                
                </div>
              </div>
              <div class="form-group">
                <label for="selectTime" class="col-sm-4 control-label">Temps de la manche</label>
                <div class="col-sm-8">
                  <select class="form-control" name="time">
                    <option value="240">4 min</option>
                    <option value="210">3 min 30 sec</option>
                    <option value="180">3 min</option>
                    <option value="150">2 min 30 sec</option>
                    <option value="120">2 min</option>
                    <option value="90">1 min 30 sec</option>
                    <option value="60">1 min</option>
                    <option value="30">30 sec</option>
                  </select>                
                </div>
              </div>
              <input type="hidden" name="team1Id" value="<?php echo $team1Id;?>">
              <input type="hidden" name="team2Id" value="<?php echo $team2Id;?>">
              <input type="hidden" name="round" value="<?php echo $round;?>">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Valider</button>
                </div>
              </div>
            </form>
          </p>
          <?php
            } else {
            	echo "<p style=\"text-align:center;\"><a class=\"btn btn-info\">Match termin&eacute;</a></p>";	
            }
          ?>
        </div>
      </div>

      <div class="footer">
        <p>&copy; Dodgeball 2014</p>
      </div>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
