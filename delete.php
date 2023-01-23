<?php 
    include "./config.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `person` WHERE id = '$id'";

    $results = mysqli_query($conn, $sql);
    echo "Data Deleted !..";

?>
<a href="./index.php">Home</a>