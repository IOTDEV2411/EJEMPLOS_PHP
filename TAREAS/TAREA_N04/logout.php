<?php 
// logout.php 
session_start(); 
 
unset($_SESSION['identity']); 
header('Location: /TAREA_N04/index.php'); 
exit;