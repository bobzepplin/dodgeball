<?php
session_start();
require("lib/mysql_connect.php");
require("lib/sessions.php");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(login($_POST["user"],$_POST["password"])) 
  echo "<div class=\"container\"><div class=\"alert alert-success\">Bienvenu jeune polisson!</div></div>";
  else echo "<div class=\"container\"><div class=\"alert alert-danger\">Tu as williamé le mdp ?</div></div>";
}
if($_GET["action"] == "logout") unset($_SESSION["login"]);
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
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Match en cours</a></li>
            <li><a href="display.php"><span class="glyphicon glyphicon-time"></span> Horaires des matchs</a></li>
            <li><a href="pools.php"><span class="glyphicon glyphicon-flag"></span> Pools & Scores</a></li>
            <li><a href="../"><span class="glyphicon glyphicon-arrow-left"></span> Dodgeball.ch</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
      <div class="jumbotron">
        <h2>Matchs<br><small>en cours</small></h2>
      </div>

        <div class="col-lg-12">
          <h3 style="text-align:center; margin-bottom: 20px;">En cours</h3>
          <?php
        connect();
        $sql = "SELECT * FROM matches WHERE winner = 0 ORDER BY slot LIMIT 0,1";
        $req = mysql_query($sql) or die("SQL Error: ".mysql_error());
        $data = mysql_fetch_array($req);
        $slot = $data["slot"];
        
        $sql = "SELECT m.*, (SELECT name FROM teams WHERE id = m.fk_team1_id) as team1Name, (SELECT name FROM teams WHERE id = m.fk_team2_id) as team2Name 
        FROM matches as m WHERE slot=".$slot; 
        $req = mysql_query($sql) or die ("SQL Error : ".mysql_error());
        while($data = mysql_fetch_array($req)){
           if($data["field"] == 1){
            $terrainNB = "Ananas";
          }elseif ($data["field"] == 2) {
            $terrainNB = "Banane";
          }elseif ($data["field"] == 3) {
            $terrainNB = "Cerise";
          }else{
            $terrainNB = "Ananas";
          }
          echo "<h4 style=\"text-align:center; margin-top: 20px;\"><small>Terrain ".$terrainNB."</small></h4>";
          echo "<h5 style=\"text-align:center\">".$data["team1Name"]." <br><span style=\"margin:10px; background-color: #e13c19;\" class=\"badge\"> VS </span><br> ".$data["team2Name"]."</h5>";
          if(($data["winner"] == 0) && ($_SESSION["login"])) echo "<p style=\"text-align:center;\"><a class=\"btn btn-success\" href=\"enter.php?match_id=".$data["id"]."\" role=\"button\">Entrer scores</a></p>";
          elseif($data["winner"] != 0) echo "<p style=\"text-align:center;\"><a class=\"btn btn-info\" role=\"button\" href=\"#\">Match termin&eacute;</a></p>";
          else echo "<p style=\"margin-top:74px;\"></p>";
        }
        close();
        ?>
        </div>
        <div class="col-lg-12" style="background-color: #f1f1f1; padding-top: 5px;">
          <h3 style="text-align:center; margin-bottom: 20px;">Prochains</h3>
          <?php
        connect();
        $sql = "SELECT * FROM matches WHERE winner = 0 and slot != ".$slot." ORDER BY slot LIMIT 0,1";
        $req = mysql_query($sql) or die("SQL Error: ".mysql_error());
        $data = mysql_fetch_array($req);
        $slot = $data["slot"];
        $sql = "SELECT m.*, (SELECT name FROM teams WHERE id = m.fk_team1_id) as team1Name, (SELECT name FROM teams WHERE id = m.fk_team2_id) as team2Name 
        FROM matches as m WHERE slot=".$slot; 
        $req = mysql_query($sql) or die ("SQL Error : ".mysql_error());
        while($data = mysql_fetch_array($req)){
          if($data["field"] == 1){
            $terrainNB = "Ananas";
          }elseif ($data["field"] == 2) {
            $terrainNB = "Banane";
          }elseif ($data["field"] == 3) {
            $terrainNB = "Cerise";
          }else{
            $terrainNB = "Ananas";
          }

          echo "<h4 style=\"text-align:center\"><small>Terrain ".$terrainNB."</small></h4>";
          echo "<h5 style=\"text-align:center\">".$data["team1Name"]." <br><span style=\"margin:10px;\" class=\"badge\"> VS </span><br> ".$data["team2Name"]."</h5>";
          echo "<br>";
        }
        close();
          ?>
        </div>

      <div class="footer">
        <p>&copy; Dodgeball 2014 - 
          <?php if(!$_SESSION["login"]){ ?>
          <a href="#" data-toggle="modal" data-target=".modal">Login</a>
          <?php
        } else {
          ?>
          <a href="index.php?action=logout">Logout</a>
          <?php
        } ?>
        </p>
      </div>

    </div> <!-- /container -->

    <div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <form class="form-horizontal" role="form" method="POST" action="index.php">
      <div class="modal-body">
        <div class="form-group">
          <label for="user" class="col-sm-4 control-label">User:</label>
          <input type="text" name="user">
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-4 control-label">Password:</label>
          <input type="password" name="password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
