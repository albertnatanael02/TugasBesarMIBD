
<?php

session_start();

session_destroy();

header("Location: /TugasBesarMIBD/auth/login.php");
exit();

?>