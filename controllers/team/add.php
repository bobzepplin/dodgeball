<?php
Loader::model('team', $pkgHandle = null);
class TeamAddController extends Controller {

	public function view(){
		$color = "green";
		$this->set("color",$color);
	}

	public function addTeam(){
		$name = $this->post("name");
		$power = $this->post("power");
		$this->teamModel = new TeamModel();
		$this->teamModel->addTeam($name, $power);

	}

}