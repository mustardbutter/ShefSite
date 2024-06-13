<?php
session_start(); 
$_SESSION['usermane'] = [];
session_destroy();
session_unset();
header("Location: index.php");
?>