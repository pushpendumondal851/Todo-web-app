<?php
 
$conn = mysqli_connect("localhost","root","","todo_dbs");

?>

<?php

if(isset($_POST["submit"])){

  $Vname = $_POST['tname'];
  $Vdescription = $_POST['tdescription'];
  $vdate = $_POST['tdate'];

  $ins ="INSERT INTO todo(task_name, description, deadline) VALUES ('$Vname','$Vdescription','$vdate')";

  $run = mysqli_query($conn,$ins);

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
    <style>
  .custom-navbar {
    background-color: #FF8282 !important;
  }

  .nav-link.text-white:hover{
background-color: red;
text-decoration: underline;
transition: 1s;

  }
</style>

<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand">
      <img src="images/todo.png" style="width: 100px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        <a class="nav-link text-white" href="About us.php">About Us</a>
        <a class="nav-link text-white" href="todo.php">TO-DO</a>
      </div>
    </div>
  </div>
</nav>



<div class="container abc">
  <div class="row">
    <div class="col-md-12" style="background-color: #FF8282; margin-top: 15px; border-radius: 20px;">
      <h1 style="text-align: center;">To-Do Form</h1>
      <form method="POST" action="todo.php">
        <div class="mb-3">
          <label class="form-label">Task Name</label>
          <input type="text" name="tname" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <input type="text" name="tdescription" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Deadline</label>
          <input type="date" name="tdate" class="form-control" required>
        </div>
        <br>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Add List</button>
      </form>
    </div>
  </div>
</div>




<!----todo list-->



<div class="container bbc">
  <div class="row">
    <div class="col-md-12" style="background-color: #FF8282; margin-top: 15px; border-radius: 20px;">
      <h1 style="text-align: center;">To-Do List</h1>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Task Name</th>
            <th scope="col">Description</th>
            <th scope="col">Deadline</th>
            <th scope="col" style="text-align: center;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $display = mysqli_query($conn,"SELECT * FROM todo");
          $no = 1;
          while($get = mysqli_fetch_array($display)){

            $id = $get['id'];
            $dname = $get['task_name'];
            $ddescription = $get['description'];
            $ddate = $get['deadline'];
          ?>
          <tr>
            <th><?php echo $no++;?></th>
            <td><?php echo $dname;?></td>
            <td><?php echo $ddescription;?></td>
            <td><?php echo $ddate;?></td>
            <td>
  <div style="display: flex; gap: 10px;">
    <a href="edit.php?id=<?php echo $id;?>" class="btn btn-primary" style="width: 100px;">Edit</a>
    <a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger" style="width: 100px;" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
  </div>
</td>

          </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</div>





</div></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>