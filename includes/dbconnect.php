<?php

if (!isset($_SESSION))
{
    session_start();
}

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'mipodatabases';

$koneksi = mysqli_connect($host, $user, $pass, $database);

if ($koneksi->connect_error)
{
    die("Koneksi Gagal".$koneksi->connect_error);
}


?>