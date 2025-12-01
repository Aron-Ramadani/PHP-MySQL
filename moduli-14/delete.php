<?php
    include_once('config.php');

    $id = $GET['id'];
    $sql = "DELETE FROM users WHERE id=:id";
    $prep->bindParam(':id', $id);
    $prep->execute();

    header("location: dashboard.php");
?>