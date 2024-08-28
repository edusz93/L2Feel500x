<?php

class Access {

	public static function login($login) {
		
		$sql = DB::Executa("SELECT * FROM accounts WHERE login = '".$login."' LIMIT 1");
		return $sql;
	}
	
	public static function logout() {
		
		$_SESSION['acc'] = '';
		$_SESSION['ses'] = '';
		unset($_SESSION['acc']);
		unset($_SESSION['ses']);
		header('Location: ./');
		exit;
		
	}
	
	public static function registerAccess($login) {
		
		$sql = DB::Executa("INSERT INTO site_ucp_lastlogins (login, ip, logdate) VALUES ('".$login."', '".$_SERVER['REMOTE_ADDR']."', '".time()."')");
		if(!$sql) { return false; }
		
		$sql = DB::Executa("SELECT * FROM site_ucp_lastlogins WHERE login = '".$login."' ORDER BY logdate DESC LIMIT 5");
		if(count($sql) > 0) {
			$DATEs = '';
			for($i=0, $c=count($sql); $i < $c; $i++) {
				$DATEs .= $sql[$i]['logdate'].',';
			}
			$DATEs = substr($DATEs, 0, -1);
		} else {
			$DATEs = '';
		}
		
		$sql = DB::Executa("DELETE FROM site_ucp_lastlogins WHERE login = '".$login."' AND logdate NOT IN (".$DATEs.") LIMIT 10");
		if(!$sql) { return false; }
		
		return true;
		
	}
	
}
