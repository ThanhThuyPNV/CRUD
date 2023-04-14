<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'admin');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $names = $_POST['names'];
        $category = $_POST['category'];
        $code = $_POST['code'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $query = "UPDATE product SET names='$names', category='$category', code='$code', quantity='$quantity', price=' $price' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>