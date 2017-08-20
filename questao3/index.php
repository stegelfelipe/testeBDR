<?php

class MyUserClass{

	public function getUserList()
	{
		$dbconn = new DatabaseConnection('localhost','root','root', 'testebdr');
		$query = $dbconn->query('select name from user');
		$results->$query->fetch_all();
		
		sort($results);
		
		return $results;
	}
}

?>