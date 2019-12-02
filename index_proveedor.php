<?php
if(!isset($_SESSION)) {
  session_start();
//session_destroy();




  if(!isset($_SESSION['usuarioId'])) header('Location: index_admin.php?authError=true');
}

echo $_SESSION['usuarioNivel'];

?>
