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
            <li><a href="display.php"><span class="glyphicon glyphicon-time"></span> Horaires des matchs</a></li>
            <li class="active"><a href="pools.php"><span class="glyphicon glyphicon-flag"></span> Pools & Scores</a></li>
            <li><a href="../"><span class="glyphicon glyphicon-arrow-left"></span> Dodgeball.ch</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
    
      <div class="jumbotron">
        <h2>Pools<br><small>Pools & Scores</small></h2>
      </div>

      <div class="row marketing">
        <?php
        connect();
        $sql = "SELECT t.*, (SELECT name FROM categories WHERE id = t.fk_category_id) as category FROM teams as t ORDER BY pool ASC, points DESC";
        $req = mysql_query($sql) or die("SQL Error : ".mysql_error());
        $pool = 0;
        while($data = mysql_fetch_array($req)){
          if($data["pool"] != $pool){
            if($pool != 0) echo "</div>\n";
           echo "<div class=\"col-lg-6\"><h4>Pool: ".$data["pool"]." - ".$data["category"]."</h4>\n";
         }

         echo "<p>".$data["name"]." <span style=\"background-color: #e13c19\" class=\"badge pull-right\">".$data["points"]."</span></p>\n";
          if($data["pool"] != $pool){
            $pool++;
          } 
          
        }
        close();
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