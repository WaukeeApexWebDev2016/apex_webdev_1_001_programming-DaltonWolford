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

.check {
  text-align: center;
  color: red;
}

.login {
    border: 2px solid #cdcdcd;
    padding: 0px 20px;
    background: #00a2cc;
    width: 300px;
    border-radius: 20px;
    text-align: center;
    margin: auto;
}

textarea[name="UN"]{
    padding: 10px;
    height: 30px;
    border-radius: 5px;
    border: 1px solid #cdcdcd;
    background-color: white;
    font-size: 16px;
    margin-left: 6px;
}

textarea[name="PW"]{
    padding: 10px;
    height: 30px;
    border-radius: 5px;
    border: 1px solid #cdcdcd;
    background-color: white;
    font-size: 16px;
}

a:link {color: white;}

a:visited {color: white;}

a:hover {color: grey;}

a:active {color: grey;}

</style>

<body>

<?php
    session_start();
 ?>

<br/>
<h1>To-do List App</h1>

<br/>
<br/>

<div class="login">
<h2>LOGIN</h2>


<form method="GET" action="Login.php">
  <label><img src="Username.png" style="width:30px;height:30px;">
  <textarea name="UN" placeholder="Username" rows="1"
  cols="20"></textarea>
  <br>
<label><img src="Password.png" style="width:35px;height:35px;">
  <textarea name="PW" placeholder="Password" rows="1"
  cols="20"></textarea>
  <br>
  <br>
  <input type="submit">
  <?php
        $_SESSION["UserN"] = $_GET["UN"];
        $_SESSION["PassW"] = $_GET["PW"]; ?>
  <br>
  <br>
  <a href="Landing Page.php">Back To Landing Page</a><img src="back-icon.png" style="width:30px;height:30px;">
  <br>
</form>
</div>
<br>
<br>
<br>
<div class="Check">
<?php
if (isset($_GET["UN"])) {
  if ($_GET["UN"] == "admin" && $_GET["PW"] == "password") {
    header('Location: /todo.php');
  } else { echo "Access Denied";
}
}
?>
</div>
</body>
