<?php
require("../../database/init.php");
if (isset($_GET["callback"]) && $_GET["callback"] == "toto tata") {
    $stmt = $dbh->prepare("UPDATE user SET user_name = ? WHERE user_id = ?");
    $stmt->bindValue(1, $_GET['name']);
    $stmt->bindValue(2, $_GET['id']);
    $stmt->execute();

    echo json_encode("success");
} else {
    echo json_encode("error");
}
 