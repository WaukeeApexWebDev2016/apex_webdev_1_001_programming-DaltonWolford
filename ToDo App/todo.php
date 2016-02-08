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

h3{color: white;}

h4{color:white;
  font-family: Helvetica;
  margin-right: 100px;}

h5{color: white;
  font-family: Helvetica;
  font-size: 75%;
  margin-left: 40px;
  float: left;
  text-align: left;}

form {
  color: white;
}

input[type=submit] {
    margin-right: 50px;
    border-radius: 4px;
    color: grey;
    border: 0;
    width: 80px;
    height:20px;
    font-family:Helvetica;
    background: white;
    float: right;
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
    margin-left: 1px;
    margin-right: 1px;
}

a:hover, a:active {
    background-color: #cdcdcd;
}
</style>

<body>


<?php


if (empty($_POST["Task"])) {
     $task = "";
   } else
     $task = test_input($_POST["Task"]);

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
  <a href="about.php">About</a>
  <a href="Landing Page.php">Home</a>

<form method="GET" action="todo.php">
  <br>
  <h4>Enter a New Goal:</h4>
  <textarea name="Task" rows="1"
  cols="40"></textarea>
  <br>
  <br>
    <input type="submit">
    <br>
  <h5>Type clear to clear the list<br>
  Type finished to add items to the finished list</h5>

  <br>
  <br>
  <br>
  <h3>Things to Do:</h3>
  <br>

  <textarea name="List" rows="10" cols="40">
    <?php
  if ($_GET["Task"] != "clear" && $_GET["Task"] != "finished" && $_GET["Task"] != "clearfinished") {
  echo $_GET["Task"] . "\n\n" . $_GET["List"] ;}

  if ($_GET["Task"] == "finished") {
    $_SESSION["Finishedlist"] = $_GET["List"] . $_SESSION["Finishedlist"];
  }


  if ($_GET["Task"] == "clearfinished") { session_unset("Finishedlist"); }
   ?>

 </textarea>
  <br>
</form>
</div>
<br>
<br>
</body>
