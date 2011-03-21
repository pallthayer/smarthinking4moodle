<?php

/* This file handles the asynchronous login into SmarThinking. Upon
   success, it returns the URL where the SmarThinking user can access
   the system. A javascript function will automatically redirect the 
   user to the page. If errors occur, the errors are returned and
   shown in an alert box.

   (C) 2010 Pall Thayer and SUNY Purchase College, Purchase, NY
   license http://www.gnu.org/licenses/gpl.html GNU Public License
*/

//$st_url = 'https://www.smarthinking.com/login/suplogin.cfm';
$st_url = 'https://services.smarthinking.com/login/suplogin.cfm';
$curl_post = "partnerid=".$_GET['partnerid']."&partnerpass=".$_GET['partnerpass']."&userid=".$_GET['userid']."&useremail=".$_GET['useremail']."&firstname=".$_GET['firstname']."&lastname=".$_GET['lastname']."&zipcode=".$_GET['zipcode'];
$ch = curl_init();
$curlopts = array(
	CURLOPT_URL => $st_url,
	CURLOPT_USERAGENT => 'Opera/9.23 (Windows NT 5.1; U; en)',
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_SSL_VERIFYHOST => 2,
	CURLOPT_POST => 1,
	CURLOPT_POSTFIELDS => $curl_post
	);
curl_setopt_array($ch, $curlopts);
$result = curl_exec($ch);
$errno = curl_errno($ch);
$errmsg = curl_error($ch);
if($errno){
	$return = array(
		"status" => "error",
		"msg" => $errmsg
	);
	echo json_encode($return);
	return;
}else{
	$result = html_entity_decode($result);
	$data = simplexml_load_string($result);
	$return = array(
		"status" => "ok",
		"msg" => $data
	);
	echo json_encode($return);
	return;
}
?>
