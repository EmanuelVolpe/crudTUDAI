<?php
$password = 'leomessi';
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
echo '<br>';

$pass = 'leomessi';
$hash = password_hash($pass, PASSWORD_DEFAULT);
echo $hash;