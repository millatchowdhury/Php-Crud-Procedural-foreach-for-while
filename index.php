<?php 
    include "./config.php";
    $sql = "SELECT * FROM `person`";
    $results = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./add.php">add data</a>
    <table border="1">
        <tr>
            <td>Serial</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Update</td>
            <td>Delete</td>
        </tr>

        <?php
             foreach($results as $result){ 

            // while($result = mysqli_fetch_array($results)){

            //$results->fetch_assoc($results) object ar jonno

            //  while($result = mysqli_fetch_assoc($results)){

            // for($i=0; $i<$result = mysqli_fetch_array($results); $i++){

            // for($i=0; $i<$result = mysqli_fetch_assoc($results); $i++){
            
        ?>
        <tr>
            <td><?php echo $result['id']; ?></td>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['phone']; ?></td>
            <td><a href="./update.php?id=<?php echo $result['id']; ?>">update</a></td>
            <td><a href="./delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>