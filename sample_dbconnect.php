<?php

$link = mysqli_connect('host_name','username','password','database');

if($link->connect_errno)
{
echo 'unable to connect';
}
?>
