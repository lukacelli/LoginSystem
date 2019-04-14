
<?php
include("include/header.php");
if (!isset($_SESSION['user'] ) ) {
	header("Location: register.php");
}
if ( isset($_COOKIE['rem'] ) && !empty($_COOKIE['rem'] ) ) {
	$_SESSION['user'] = unserialize($_COOKIE['rem']);
}
?>
<div class="container-fluid" style="margin-top: 25px;">
    <div class="row">

        <div class="col-sm-4 offset-sm-4">

            <div class="card">
                <div class="card-header text-sm-center">
                    Dashboard
                </div>
                <div class="card-block">
                    <h2> hello <?php echo $_SESSION['user']->name ?></h2>
                </div>
            </div>

        </div>

    </div>
</div>
<?php include("include/footer.php") ?>
