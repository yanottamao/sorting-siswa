<?php
session_start();
session_destroy();
unset($_SESSION['userID']);
header('Location: index.php');
exit();
