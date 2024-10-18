<?php 
session_start();
session_destroy();
header("Location: ../pagina/pagina_web_header.php");
?>