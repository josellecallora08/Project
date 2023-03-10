<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['code'];
$b = $_POST['name'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'] + $_POST['add_qty'];
$g = $_POST['o_price'];
$h = $_POST['profitedit'];
$i = $_POST['date_arrival'];
// query
$sql = "UPDATE products 
        SET product_code=?, product_name=?, price=?, supplier=?, qty=?, o_price=?, profit=?, date_arrival=?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$d,$e,$f,$g,$h,$i,$id));
header("location: products.php");

?>