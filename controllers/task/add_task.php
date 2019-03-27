<?php
require("../../database/init.php");
if (isset($_GET['callback']) && $_GET['callback'] == "toto tata") {
    $stmt = $dbh->prepare("INSERT INTO task (task_name,task_date) VALUES (?,?)");
    $stmt->bindValue(1, $_GET['message']);
    $stmt->bindValue(2, date("Y-m-j"));
    $stmt->execute();

    echo json_encode("success");
} else {
    echo json_encode("error");
}
 