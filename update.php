<?php 
    include "./config.php";
    $id = $_GET['id'];

    $sql = "SELECT * FROM `person` WHERE id = '$id'";
    $results = mysqli_query($conn, $sql);
    foreach($results as $result){
        $name = $result['name'];
        $email = $result['email'];
        $phone = $result['phone'];
    }

?>
<?php 
// for submit update data 
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE `person` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE id='$id'";
    $results = mysqli_query($conn, $sql);
    echo "update Successfull";
}
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
    <a href="./index.php">Home</a>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Name">
        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter Email">
        <input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="Enter Phone">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>