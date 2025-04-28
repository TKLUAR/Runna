<?php
$servename="localhost";
$user="root";
$password="root";
$db_name="usuarios";
$conn= nem mysqli($servename,$user,$password,$db_name,3307);
if($conn ->connect_error){
    die("erro de conexão".$conn->connect_error);
}
echo "conexão validada";