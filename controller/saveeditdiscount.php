<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$b = $_POST['amount'];
$c = $_POST['note'];
$d = $_POST['date'];
// query
$sql = "UPDATE discount 
        SET discount_name=?, discount_amount=?, discount_note=?, date_expire=?
		WHERE discount_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$id));
header("location: discount.php");

?>