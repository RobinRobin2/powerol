<?php



if(isset($_POST['loginbtn'])){

  $checkReturn = $user->login();

  if($checkReturn== "success"){
      $user->redirect("home.php");

  }
  else{
    echo "<p class=' bg-danger text-center text-white'>{$checkReturn}</p>";
  }

}




?>
<body>
    

<form class="d-flex justify-content-center" method="POST">
  <label for="fname">Username or email:</label><br>
  <input type="text" id="fname" name="username"><br>
  <label for="lname">Password:</label><br>
  <input type="text" id="lname" name="psword"><br>
  <input type="submit" value="Log in" name="loginbtn">
</form>


</body>
</html>