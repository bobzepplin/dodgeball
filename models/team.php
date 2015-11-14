<?php
class TeamModel {

	public function addTeam($name,$power){
		$db = $this->getDb();
		$db->Execute("INSERT INTO teams VALUES('','".$name."','','2014','10')");
		$this->close();
	}

	public function getTeams(){
		$db = $this->getDb();
		$results = $db->Execute("SELECT * FROM teams");
		$this->close();
		return $results;
	}

	private function getDb(){
		$db = Loader::db('www.dodgeball.ch', 'thibaud', 'afdbba13', 'score', true);
		return $db;
	}

	private function close(){
		$db = Loader::db(null,null,null,null,true);
	}
}