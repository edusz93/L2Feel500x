<?php

if(!$indexing) { exit; }

$lkey = isset($_POST['lkey']) ? vCode($_POST['lkey']) : '';
if($lkey != $_SESSION['lkey']) { fim('', 'SESSION', './'); }

if(empty($_POST['ucp_login']) || empty($_POST['ucp_passw'])) {
	fim($LANG[12058]);
}

$user_login = vCode($_POST['ucp_login']);
$user_passw = vCode($_POST['ucp_passw']);

if($captcha_cp_on == 1) {
	
	$captcha = !empty($_POST['captcha']) ? vCode($_POST['captcha']) : '';
	require('captcha/securimage.php');
	$securimage = new Securimage();
	if($securimage->check($captcha) == false) {
		fim($LANG[11979]);
	}
	
}

require_once('private/classes/classAccess.php');

$login = Access::login($user_login);

if(count($login) > 0) 
{
	for($i=0, $c=count($login); $i < $c; $i++) 
	{
		$password = $login[$i]['password'];
	}
}

if(password_verify($_POST['ucp_passw'], $password)){
	
	@Access::registerAccess($user_login);
	
	$_SESSION['acc'] = $user_login;
	$_SESSION['ses'] = md5($_SERVER['HTTP_USER_AGENT'].$uniqueKey.'logged');

	fim('', 'OK', './');
	
} else {

	fim($LANG[11990]);
	
}
