<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'admin');

if(isset($_POST['insertdata']))
{
    $id = $_POST['update_id'];
    $names = $_POST['names'];
    $category = $_POST['category'];
    $code = $_POST['code'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $query = "INSERT INTO product (`names`,`category`,`code`,`quantity`,`price`) VALUES ('$names','$category','$code','$quantity','$price')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>