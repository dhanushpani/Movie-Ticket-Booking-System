<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "123456789", "cinema_db");

    $sql = "DELETE FROM bookingTable WHERE bookingID = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>