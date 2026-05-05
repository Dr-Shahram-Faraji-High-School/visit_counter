<?php

session_start();

if(isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
} else {
    $_SESSION['counter'] = 1;
}

$msg = "You have visited this page ". $_SESSION['counter'];
$msg .= " in this session";

?>

<title>Setting up php session</title>
<a href="reset.php">reset your session</a><br>
<?php
echo($msg);
?>