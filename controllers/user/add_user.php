<?php
require("../../database/init.php");
if (isset($_GET["callback"]) && $_GET["callback"] == "toto tata") {
    $stmt = $dbh->prepare("INSERT INTO user (user_name) VALUES (?)");
    $stmt->bindValue(1, $_GET['user']);

    $stmt->execute();

    echo json_encode("success");
} else {
    echo json_encode("error");
}
 