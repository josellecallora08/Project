<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['amount'];
$c = $_POST['note'];
$d = $_POST['date'];

// query
$sql = "INSERT INTO discount (discount_name,discount_amount,discount_note,date_expire) VALUES (:a,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d));
header("location: discount.php");


?>