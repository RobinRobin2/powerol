
<?php
include_once "includes/class.user.php";
include_once "includes/config.php";

if(!$user->checkLoginStatus()){
    $user->redirect("index.php");
}




?>


<div class="content-inner">
  <?php
  echo "<h2>Välkommen " . $_SESSION['username'] . "</h2>";
  echo "<h3>Du har användarroll " . $_SESSION['urole'] . " och din id är " .$_SESSION["u_id"]."</h3>";

  ?>