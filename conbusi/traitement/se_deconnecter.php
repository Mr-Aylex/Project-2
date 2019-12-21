<?php
// On détruit la session
session_start();
session_destroy();
// On redirige vers le menu
header('Location: ../page/index.php')
 ?>
