<?php
session_start();
include('../connect.php');
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['price'];
$d = $_POST['supplier'];
$e = $_POST['qty'];
$f = $_POST['o_price'];
$g = $_POST['profit'];
$h = $_POST['date_arrival'];
// query
$sql = "INSERT INTO products (product_code,product_name,price,supplier,qty,o_price,profit,date_arrival) VALUES (:a,:b,:c,:d,:e,:f,:g,:h)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,'d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h));
header("location: products.php");
?>