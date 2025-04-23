<?php
 
$conn = mysqli_connect("localhost","root","","todo_dbs");

?>

<?php

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $delete = mysqli_query($conn,"DELETE FROM todo WHERE id = '$id' ");

    if($delete){
        echo "Product deleted successfully.";
        header("location: todo.php");
        exit();
    } else{
        echo "Error deleting product :" . mysqli_error($conn);
    }
}


?>