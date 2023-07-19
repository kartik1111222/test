<?php

session_start();

$_SESSION['firstname'] = 'Demo';
$_SESSION['lastname'] = 'test';
$_SESSION['email'] = 'test@gmail.com';
$_SESSION['address'] = 'Surat';

echo "Data stored in session successfully!."
?>