<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost:8080/phpblog/views/index.php">Home</a></li>
      <?php if(isset($_SESSION['login']) == "Logged in") 
        echo "<li><a>Add Blog</a></li>";
      ?>

      <li><a href="http://localhost:8080/phpblog/views/blogpage.php">View Blogs</a></li>
      <?php if(isset($_SESSION['login']) == "Logged in")  
        echo "<li><a>Welcome Admin</a></li>"
      ?>
      <li><a href="http://localhost:8080/phpblog/views/login.php">Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">

