<?php
require("../../database/init.php");
if (isset($_GET["callback"]) && $_GET["callback"] == "toto tata") {
    $stmt = $dbh->prepare("UPDATE task SET task_user = ? WHERE task_id = ?");
    $stmt->bindValue(1, $_GET['user']);
    $stmt->bindValue(2, $_GET['id']);

    $stmt->execute();

    echo json_encode("success");
} else {
    echo json_encode("error");
}
 