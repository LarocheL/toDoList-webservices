<?php
require("../../database/init.php");
if (isset($_GET["callback"]) && $_GET["callback"] == "toto tata") {
    $stmt = $dbh->prepare("DELETE FROM user WHERE user_id = ?");
    $stmt->bindParam(1, $_GET['id']);
    $stmt->execute();
    echo json_encode("success");
} else {
    json_encode("error");
}
 