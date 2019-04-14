<?php
session_start();
session_destroy();
setcookie("rem", "", time() - 3600);
header("Location: login.php");
?>