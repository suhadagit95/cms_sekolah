<?php
ini_set('session.save_path', 'C:\xampp\tmp');
session_start();
function timer(){
	$time=3600;
	$_SESSION[timeout]=time()+$time;
}
function cek_login(){
	$timeout=$_SESSION[timeout];
	if(time()<$timeout){
		timer();
		return true;
	}else{
		unset($_SESSION[timeout]);
		return false;
	}
}
?>
