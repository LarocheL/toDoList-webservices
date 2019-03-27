<?php
require("../../database/init.php");
if (isset($_GET['callback']) && $_GET['callback'] == "toto tata") {
    $stmt = $dbh->prepare("SELECT * FROM task where task_id = ?");
    $stmt->bindParam(1, $_GET['id']);
    $stmt->execute();
    $return = $stmt->fetchAll();

    echo json_encode($return);
} else {
    echo json_encode("error");
}
 