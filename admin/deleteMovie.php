<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "123456789", "cinema_db");

    $sql = "DELETE FROM movietable WHERE movieID = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>