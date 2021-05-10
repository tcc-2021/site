//associar esse arquivo ao botão de logout

<?php
session_start();
session_destroy();
header('Location: ../index.php');
exit();
?>