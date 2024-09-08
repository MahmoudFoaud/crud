
<?php
$server="locahost";
$userName="root";
$password="";
$dbName="php_intern";
  

$conen=new mysqli($server,$user_name,$password,$dbName);

if ($conn ->connect_error )
 {
    die("Connection_faild".$conn->connect_error);
} 
