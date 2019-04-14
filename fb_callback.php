<?php
//include("include/header.php");
//
//if (isset($_SESSION['user'] ) ) {
//	header("Location: index.php");
//}
//if ( isset($_COOKIE['rem'] ) && !empty($_COOKIE['rem'] )) {
//	$_SESSION['user'] = unserialize($_COOKIE['rem']);
//	header("Location: index.php");
//}
//
//$accessToken = $helper->getAccessToken();
//
//if ( isset($accessToken) ) {
//
//	// OAuth 2.0 client handler
//	$oAuth2Client = $fb->getOAuth2Client();
//	// Exchanges a short-lived access token for a long-lived one
//	$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
//	// setting default access token to be used in script
//	$fb->setDefaultAccessToken($longLivedAccessToken);
//
//
//	$profile_request = $fb->get('/me?fields=name,email');
//	$profile = $profile_request->getGraphNode()->asArray();
//
//	if( !empty($profile) ){
//		$data = $user->getuser($profile['email']);
//		if ( !empty($data) ) {
//			$_SESSION['user'] = $data;
//			header("Location: index.php");
//
//		}else{
//			$user->fb_register($profile['email'], $profile['name']);
//		}
//	}
//
//
//} else {
//	$_SESSION['error'] = "Access Cancelled!";
//	header("location: login.php ");
//}
//?>