<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'sales'; 

/* End config */
try{
    $db = new PDO("mysql:host=$db_host;dbname=$db_database", $db_user, $db_pass);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($db) {
        echo "";
    }

} catch(PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
    echo 'Connection failed!<br>';
}

?>