<?php
//include("include/header.php");
//
//$client = new Google_Client();
//$client->setClientId("504579268581-7p4utv81dgced0p87q7k77980db2jmev.apps.googleusercontent.com");
//$client->setClientSecret("SoO5n_yGSXYDVDQlGi8hIJUD");
//$client->setRedirectUri("http://faraztest.000webhostapp.com/g_callback.php");
//$client->addScope("email");
//$client->addScope("profile");
//
//$service = new Google_Service_Oauth2($client);
//
//
//if ( !isset($_GET['code'])) {
//	$auth_url = $client->createAuthUrl();
//	header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
//} else {
//	$client->authenticate($_GET['code']);
//	$_SESSION['access_token'] = $client->getAccessToken($_GET['code']);
//
//	echo '<pre>';
//	print_r($_SESSION['access_token']);
//	echo '</pre>';
//
//	$redirect_uri = 'http://faraztest.000webhostapp.com/g_callback.php';
//	//header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
//}
//
////if we have access_token continue, or else get login URL for user
//if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
//	$client->setAccessToken($_SESSION['access_token']);
//} else {
//	$authUrl = $client->createAuthUrl();
//}
//
////Display user info or display login url as per the info we have.
//echo '<div style="margin:20px">';
//if (isset($authUrl)){
//	//show login url
//	echo '<div align="center">';
//	echo '<h3>Login with Google -- Demo</h3>';
//	echo '<div>Please click login button to connect to Google.</div>';
//	echo '<a class="login" href="' . $authUrl . '"><img src="images/google-login-button.png" /></a>';
//	echo '</div>';
//
//} else {
//
//	$g = $service->userinfo->get(); //get user inf
//
//	$user->fb_register($g->email, $g->givenName);
//}
//
//?>