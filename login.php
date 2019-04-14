<?php

include("include/header.php");



if (isset($_SESSION['user'] ) ) {
	header("Location: index.php");
}
if ( isset($_COOKIE['rem'] ) && !empty($_COOKIE['rem'] )) {
	$_SESSION['user'] = unserialize($_COOKIE['rem']);
	header("Location: index.php");
}

//$permissions = ['email']; // optional
////$loginUrl = $helper->getLoginUrl('http://faraztest.000webhostapp.com/fb_callback.php', $permissions);

//if (isset($_POST['submit']) ) {
//
//	$recaptcha = new ReCaptcha("6Lc_C54UAAAAACQA2UhrXVcwAGZwiat24nG15ZOt");
//	if ($_POST["g-recaptcha-response"]) {
//
//		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
//		//print_r($resp);
//	} else {
//		$_SESSION['error'] = "Recaptcha Not submitted";
//	}
//	if ( $resp->isSuccess() ) {
//
//		$rem = 0;
//		if( isset($_POST['rem']) ){
//			$rem = 1;
//		}
//		$user->auth($_POST['email'], $_POST['pass'], $rem );
//
//	} else {
//		$_SESSION['error'] = "Recaptcha Verification Error";
//	}
//
//}
?>
<div class="container-fluid" style="margin-top: 25px;">
    <div class="row">

        <div class="col-sm-4 offset-sm-4">

            <a href="g_callback.php"><img style="width: 610px;" src="g.png" class="img-fluid" id="g-login"></a>

            <a href="<?php echo $loginUrl; ?>"><img style="width: 610px;" src="fb.png" class="img-fluid" id="fb-login"></a>

            <div class="card">
                <div class="card-header text-sm-center">
                    Login Here
                </div>
                <div class="card-block">
					<?php
					if ( isset($_SESSION['error']) ) {
						echo '<div class="alert alert-danger" role="alert">';
						echo $_SESSION['error'];
						echo '</div>';
						unset($_SESSION['error']);
					}
					?>
                    <form method="post" id="login-fm">
                        <fieldset class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo @$_POST['email'] ?>" required>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password" required>
                        </fieldset>

                        <div id="cap" class="g-recaptcha"></div>
                        <div class="checkbox">

                            <label>
                                <input type="checkbox" name="rem" value="1"> Remember me
                            </label>
                        </div>

                        <a class="float-sm-left text-primary" href="reset.php">Lost Password?</a>
                        <input class="btn btn-primary float-sm-right" type="submit" value="Login" name="submit">
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
<?php include("include/footer.php") ?>
