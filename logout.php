<li><a href="logout.php">Logout</a></li>
<?php
session_start();
session_destroy();
header("Location: login.php");
exit();
?>
