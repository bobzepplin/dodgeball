<?php
require("lib/mysql_connect.php");
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
        <h2>Liste<br><small>Horaire des matchs </small></h2>
        <span class="glyphicon glyphicon-ok text-success\"></span> Victoire, <span class="glyphicon glyphicon-remove text-danger\"></span> Défaite, <span class="glyphicon glyphicon-minus text-info\"></span> Nul.  
      </div>

      

        <div class="table-responsive">
          <table class="table table-striped table-bordered"><tr><th></th><th>TERRAIN R2D2</th><th>TERRAIN Jabba</th><th>TERRAIN Jar Jar Binks</th></tr>
          <?php
          connect();
           $sql = "SELECT * FROM matches WHERE winner = 0 ORDER BY slot LIMIT 0,1";
    	   $req = mysql_query($sql) or die("SQL Error: ".mysql_error());
           $data = mysql_fetch_array($req);
           $slot = $data["slot"];
          $NB_FIELDS = 3;
          $sql = "SELECT m.*, (SELECT name FROM teams WHERE id = m.fk_team1_id) as team1Name, (SELECT name FROM teams WHERE id = m.fk_team2_id) as team2Name 
        FROM matches as m ORDER BY slot, field";
          $req = mysql_query($sql) or die ("SQL Error : ".mysql_error());
          $i=-3;
          $hour = 10;
          while($data = mysql_fetch_array($req)){
            if($data["field"] == "1"){
            	if($slot == $data["slot"]) echo "<tr class=\"info\">";
            	else echo "<tr>";
              if($i == -3)  echo "<td><b>9h30</b></td>";
              elseif(($i%5) == 0){
               echo "<td><b>".$hour."h.</b></td>";
               $hour++;
              }
              else echo "<td></td>";
              
              $i++;
            }
            if($data["winner"] == 1) echo "<td><span style=\"padding-right: 4px;\" class=\"glyphicon glyphicon-ok text-success\"> </span>".$data["team1Name"]." - ".$data["points_team1"]."<br> <span style=\"padding-right: 4px;\" class=\"glyphicon glyphicon-remove text-danger\"></span>".$data["team2Name"]." - ".$data["points_team2"]."</td>";
            elseif($data["winner"] == 2) echo "<td><span style=\"padding-right: 4px;\" class=\"glyphicon glyphicon-remove text-danger\"></span>".$data["team1Name"]." - ".$data["points_team1"]."<br> <span style=\"padding-right: 4px;\" class=\"glyphicon glyphicon-ok text-success\"></span>".$data["team2Name"]." - ".$data["points_team2"]."</td>";
            elseif($data["winner"] == 12) echo "<td><span style=\"padding-right: 4px;\" class=\"glyphicon glyphicon-minus text-info\"></span>".$data["team1Name"]." - ".$data["points_team1"]."<br> <span style=\"padding-right: 4px;\" class=\"glyphicon glyphicon-minus text-info\"></span>".$data["team2Name"]." - ".$data["points_team2"]."</td>";
            else echo "<td>".$data["team1Name"]." <br><span style=\"padding-right: 4px;\" class=\"glyphicon glyphicon-fire\"></span><br> ".$data["team2Name"]."</td>"; 

            if($data["field"] == "3") echo "</tr>";
            
          }
          close();

          ?>
        </table>
        <p style="text-align:center;"><b>Les phases finales se dérouleront entre 16 et 18h.</b></p>
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