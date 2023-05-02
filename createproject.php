<?php
include_once "header.php";
include_once "functions.php";


if(isset($_POST['form-submit'])){
    $lastInsertedCustomerId = createOwner($conn, $_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['email'], $_POST['address'], $_POST['pcode'],$_POST['city']);
    $lastInsertedCarId = createCar($conn, $_POST['make'], $_POST['model'], $_POST['license']);
    createProject($conn, $_POST['startdate'], $_POST['deadline'], $_POST['headline'], $_POST['description'],$lastInsertedCustomerId,$lastInsertedCarId);
}
?>

<form method="post" action="" enctype="multipart/form-data">
	<h3>Skapa kund</h3>
	<label for="firstname">Förnamn:</label><br />
	<input type="text" id="firstname" placeholder="" name="fname" required="required"><br />
	<label for="lastname">Efternamn:</label><br />
	<input type="text" id="lastname" placeholder="" name="lname" required="required"><br />
	<label for="phone">Telefonnummer:</label><br />
	<input type="text" id="phone" placeholder="" name="phone" required="required"><br />	
	<label for="email">E-post:</label><br />
	<input type="text" id="email" placeholder="" name="email" required="required"><br />
	<label for="address">Address:</label><br />
	<input type="text" id="address" placeholder="" name="address" required="required"><br />
	<label for="city">Stad:</label><br />
	<input type="text" id="city" placeholder="" name="city" required="required"><br />
	<label for="zip">Postnummer:</label><br />
	<input type="text" id="zip" placeholder="" name="pcode" required="required"><br />
	
	<h3>Skapa bil</h3>
	<label for="make">Märke:</label><br />
	<input type="text" id="make" placeholder="" name="make"><br />
	<label for="model">Modell:</label><br />
	<input type="text" id="model" placeholder="" name="model"><br />
	<label for="license">Registernummer:</label><br />
	<input type="text" id="license" placeholder="" name="license"><br />

	

    <h3>Skapa projekt</h3>
	<label for="startdate">startdatum:</label><br />
	<input type="date" id="startdate" placeholder="" name="startdate"><br />

	<label for="model">deadline:</label><br />
	<input type="date" id="deadline" placeholder="" name="deadline"><br />

	<label for="headline">Rubrik</label><br />
	<input type="text" id="headline" placeholder="" name="headline"><br />

    <label for="description">Beskrivning</label><br />
	<input type="text" id="description" placeholder="" name="description"><br />

    <input type="submit" name="form-submit" value="Skicka">

</form>






<?php


	

include_once "footer.php";
?>