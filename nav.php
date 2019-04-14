
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style="width: 100%;">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Dashboard</a>
            </li>
			<?php
			if (!isset($_SESSION['user'] ) ) {
				?>
                <li class="nav-item float-sm-right" style="margin-left: auto;">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item float-sm-right">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
			<?php }else{  ?>
                <li class="nav-item float-sm-right" style="margin-left: auto;">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
			<?php } ?>
        </ul>
    </div>
</nav>
