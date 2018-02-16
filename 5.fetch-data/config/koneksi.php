<?php 
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_blog";

// Koneksi dan memilih database di server
$con = mysqli_connect($server, $username, $password, $database) or die("Koneksi gagal");