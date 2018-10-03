<?php
	$mysqli = false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "id7349365_dfa85kt65", "12051997", "id7349365_sportrules");
		$mysqli->query("SET NAMES 'utf-8'");
	}
	
	function closeDB(){
		global $mysqli;
		$mysqli->close();
	}
	
/*
	function getFootball(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `football`");
		closeDB();
		return resultToArray($result);
	}
*/


    function getSport(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `sport`");
		closeDB();
		return resultToArray($result);
	}
	
	
	function resultToArray($result){
		$array = array();
		while($row = $result->fetch_assoc()){
			$array[] = $row;
		}
		return $array;
	}
?>