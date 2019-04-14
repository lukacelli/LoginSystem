<?php
include("include/header.php");

if (isset($_SESSION['user'] ) ) {
	header("Location: index.php");
}

if ( isset($_POST['submit']) ) {
	$user->reset($_POST['email']);
}
?>
    <div class="container-fluid" style="margin-top: 25px;">
        <div class="row">

            <div class="col-sm-4 offset-sm-4">

                <div class="card">
                    <div class="card-header text-sm-center">
                        Reset Password
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
                                <label for="active">Email</label>
                                <input type="email" class="form-control" id="active" name="email" placeholder="Enter your Email">
                            </fieldset>
                            <input class="btn btn-primary float-sm-right" type="submit" value="Submit" name="submit">
                        </form>
                    </div>

                    <div class="card-footer text-muted text-sm-center">
                        We will send you an email, with the instructions to reset your Password.
                    </div>
                </div>

            </div>

        </div>
    </div>
<?php include("include/footer.php") ?>