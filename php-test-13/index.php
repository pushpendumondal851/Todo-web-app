

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

<div class="card mb-3">
  <img src="images/todo.png" style="width:400px; height: 400px;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">📝 Welcome to TaskMate – Your Everyday Productivity Companion</h5>
    <p class="card-text">📋 What is TaskMate?<br>
TaskMate is a simple yet powerful To-Do List Web App designed to help you manage your day with ease. Whether you're a student, professional, or just someone trying to stay organized, TaskMate is your go-to platform to plan, track, and accomplish your daily goals.

No clutter. No distractions. Just pure productivity.</p>
    
    <p class="card-text">🌟 Features You'll Love<br>
✔️ Simple Task Creation
Create tasks quickly by entering a title, description, and deadline. Just a few clicks and you're all set.
<br>
🗂️ Organized View
View all your tasks in a clean and categorized layout — sorted by today’s tasks, upcoming deadlines, and completed ones.
<br>
⏰ Deadline Reminders
Stay ahead of time. Each task has its deadline clearly shown so you never miss what’s important.
<br>
💾 Save Tasks Automatically
Your data is stored securely in the background using JavaScript file handling or local storage — even when you refresh or close the browser.
<br>
🌓 Light & Dark Mode (Optional Feature)
Work how you like, whether it’s day or night.</p>
  </div>
</div>

</div>




  </div></div>
    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>