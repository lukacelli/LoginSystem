<?php
include("include/header.php");

if (isset($_SESSION['user'] ) ) {
	header("Location: index.php");
}
$chk = false;
if ( isset($_POST['submit']) ) {
	$chk = true;
	$user->change_password($_POST['n_pass'], $_POST['c_pass'], $_POST['id']);
}elseif ( !isset($_GET['tk']) || !isset($_GET['id']) ){
	header("Location: login.php");
}else{
	$_SESSION['id'] = $_GET['id'];
	$chk = $user->lost_password($_GET['tk'], $_GET['id']);
}
?>
    <div class="container-fluid" style="margin-top: 25px;">
        <div class="row">

            <div class="col-sm-4 offset-sm-4">
				<?php if ($chk) { ?>
                    <div class="card">
                        <div class="card-header text-sm-center">
                            Change Password
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
                            <form method="post">
                                <fieldset class="form-group">
                                    <label for="active">New Password</label>
                                    <input type="passwordord" class="form-control" name="n_pass" placeholder="Enter your Password">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="active">Confirm Password</label>
                                    <input type="passwordord" class="form-control" name="c_pass" placeholder="Confirm your Password">
                                </fieldset>
                                <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?> ">
                                <input class="btn btn-primary float-sm-right" type="submit" value="Change" name="submit">
                            </form>
                        </div>

                        <div class="card-footer text-muted text-sm-center">

                        </div>
                    </div>
					<?php
				}else{
					echo "Access Denied!";
				}
				?>
            </div>

        </div>
    </div>

<?php
include("include/footer.php");
?>