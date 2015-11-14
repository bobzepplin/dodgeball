<?php
Loader::model('team', $pkgHandle = null);
class TeamController extends Controller {

	public function view(){
		$color = "red";
		$this->set("color", $color);
		$this->teamModel = new TeamModel();
		$results = $this->teamModel->getTeams();
		$this->set("teams", $results);
	}

	public function test(){
		$color = "red";
		$this->set("color", $color);
	}
}
?>