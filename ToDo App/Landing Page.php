<?php
?>

<head>
<style>

body {
  background-image: url(background.jpg);
  background-size: 1920px 1080px;
  background-repeat: no-repeat;
  background-color: #013b61;
  font-family:Helvetica;
  }

h1{color: #00a2cc;
  text-align: center;
  text-decoration: overline underline;
  font-size: 350%;
  font-family:Helvetica;
  margin-top: 40px;
}

h2{color: white;
  font-size: 170%;
  text-align: center;
  font-family:Helvetica;
  margin-right: 130px;
  margin-top: 45px;
}

h3{color: white;
  text-decoration:underline;
  text-align: right;}

form {
  color: white;
}

input[type=submit] {
    margin-left:100px;
    border-radius: 4px;
    color: grey;
    border: 0;
    width: 80px;
    height:20px;
    font-family:Helvetica;
    background: white;
}


.list {
    border: 2px solid #cdcdcd;
    padding: 4px 20px;
    background: #00a2cc;
    width: 408px;
    border-radius: 20px;
    text-align: center;
    margin: auto;
}

.finishedlist {color: white;
margin-left: 250px;}



textarea[name="List"]{
    padding: 10px;
    height: auto;
    border-radius: 5px;
    border: 1px solid #cdcdcd;
    background-color: white;
    font-size: 16px;
}

textarea[name="Task"]{
    padding: 10px;
    height: auto;
    border-radius: 5px;
    border: 1px solid #cdcdcd;
    background-color: white;
    font-size: 16px;
}

a:link, a:visited {
    background-color: #013b61;
    color: white;
    padding: 14px 35px;
    float: center;
    margin-left: 1px;
    margin-right: 1px;
}

a:hover, a:active {
    background-color: #cdcdcd;
}

</style>

<body>


<?php


   session_start();

 ?>
<br/>
<h1>To-do List App</h1>
<br/>
<br/>
<div class="List">
<br>
<br>
<a href="login.php">Login</a>
<a href="<?php if ($_SESSION["UserN"] == "admin" && $_SESSION["PassW"] == "password") {
   echo "todo.php"; } else echo "login.php"?>">Todo List</a>
<a href="about.php">About</a>
<br>
<br>
<br>
<p style="color:white;">Welcome <?php
echo $_SESSION["UserN"];
?></p>
<br>
<br>
<h3>Recently Finished Tasks</h3>
<p class="FinishedList"><?php if ($_SESSION["Finishedlist"] != "")
  {echo  $_SESSION["Finishedlist"];} else echo "No Finished Tasked Logged";
  ?></p>
</body>
