<?php

$conexao = mysqli_connect("mysql", "root", "root", "smrt");
// Check connection
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
