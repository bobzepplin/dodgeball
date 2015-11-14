<?php

class ScoreModel {

	public function getName() {
		$db = $this->getDb();
		$toReturn = $db->Execute("select * from test");
		$this->close();
		return $toReturn;
	}

	public function addScore($param1){
		$db = $this->getDb();
		$db->Execute("INSERT INTO test VALUES('','".$param1."')");
		$this->close();
	}

	private function getDb(){
		$db = Loader::db('www.dodgeball.ch', 'thibaud', 'afdbba13', 'score', true);
		return $db;
	}

	private function close(){
		$db = Loader::db(null,null,null,null,true);
	}
	


}