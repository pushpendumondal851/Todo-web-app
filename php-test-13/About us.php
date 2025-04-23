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




<div class="container-fluid">
  <div class="row">

<div class="col-md-12">


<div class="card text-bg-dark">
  <img src="images/todo.png" style="width:250px; height:250px;" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title" style="text-align: center;">Welcome to TaskMate – Where Productivity Meets Simplicity!</h5>
    <p class="card-text"  style="text-align: center;">At TaskMate, we believe that staying organized shouldn't be complicated. <br>Our mission is to make your daily planning smoother, faster, and more effective — so you can focus on what truly matters.<br>

Whether you're a student trying to stay on top of assignments, a professional managing deadlines, or someone who just wants to keep life in order <br> TaskMate is designed for you.

</p>
<br>
    <p class="card-text"  style="text-align: center;">🌱 Our Vision
We aim to keep evolving TaskMate into a feature-rich yet minimal productivity tool that helps people around the world achieve their goals one task at a time.</p>
  </div>
</div>



</div>




  </div></div>



    





</div></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>