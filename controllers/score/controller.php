<?php
Loader::model('score', $pkgHandle = null);

class ScoreController extends Controller {


	public function view($id=null){
		$color = "red";
		$this->set("color", $color);
		$this->score = new ScoreModel();
		$this->set("test", $this->score->getName());
		$this->set("id",$id);
	}

	public function addScore(){
		$team1 = $this->post("firstName");
		$team2 = $this->post("team2");

		$this->score = new ScoreModel();
		$this->score->addScore($team1);

		$this->set("Match",$team1." against ".$team2);
	}


}