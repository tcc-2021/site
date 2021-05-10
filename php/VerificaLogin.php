//usar o include desse código quando a parte pós login ficar pronta

<?php
session_start()
if (!$_SESSION['usuario']) {
	header('Location: ../entre.php');
	exit();
}
?>