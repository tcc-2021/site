<?php
if (!$_SESSION['email']) {
	header('Location: ../entre.php');
	exit();
}
?>