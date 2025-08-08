<?php
session_start();
?>
<h2>Bienvenue, <?php echo $_SESSION["username"]; ?></h2>
<a href="logout.php">Deconnexion</a>