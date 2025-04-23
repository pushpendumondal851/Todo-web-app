<?php
 
$conn = mysqli_connect("localhost","root","","todo_dbs");

?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM todo WHERE id = '$id'");
    $todo = mysqli_fetch_assoc($result);


    if(!$todo){
        echo "todo not found.";
        exit();
    }
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $Vname = $_POST['task_name'];
    $Vdescription = $_POST['description'];
    $Vdate = $_POST['deadline'];

    $edit = mysqli_query($conn,"UPDATE todo SET task_name='$Vname',description='$Vdescription',deadline='$Vdate' WHERE id = '$id'");

    if ($edit){
        echo "todo updated successfully.";
        header("location: todo.php");
        exit();
    }  else{
        echo "Error updating todo: " . mysqli_error($conn);
    }

}

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>

<div class="container abc">
  <div class="row">
    <div class="col-md-12" style="background-color: #FF8282; margin-top: 15px; border-radius: 20px;">
      <h1 style="text-align: center;">Edit To-Do Form</h1>
      <form method="POST" >
        <div class="mb-3">
          <label class="form-label">Task Name</label>
          <input type="text" name="task_name" value="<?php echo $todo['task_name'];?>" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <input type="text" name="description" value="<?php echo $todo['description'];?>" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Deadline</label>
          <input type="date" name="deadline" value="<?php echo $todo['deadline'];?>" class="form-control" required>
        </div>
        <br>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Edit List</button>
      </form>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>