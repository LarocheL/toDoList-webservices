<?php
require("../../database/init.php");
if(isset($_GET["callback"]) && $_GET["callback"] == "toto tata"){
$stmt = $dbh->prepare("SELECT * FROM user");
$stmt->execute();
$return = $stmt->fetchAll();

echo json_encode($return);
}else{
    echo json_encode("error");
}

?>