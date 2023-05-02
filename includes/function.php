<?php
function createOwner($conn, $firstName, $lastName, $phoneNumber, $email, $adress, $zip, $city){
		
    $stmt_insertOwner = $conn->prepare("INSERT INTO kunder (fname, lname, phone, email, address, pcode, city) VALUES (:firstname, :lastname, :phone, :email, :adress, :zip, :city)");
    $stmt_insertOwner->bindParam(':firstname', $firstName, PDO::PARAM_STR);
    $stmt_insertOwner->bindParam(':lastname', $lastName, PDO::PARAM_STR);
    $stmt_insertOwner->bindParam(':phone', $phoneNumber, PDO::PARAM_STR);
    $stmt_insertOwner->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt_insertOwner->bindParam(':adress', $adress, PDO::PARAM_STR);
    $stmt_insertOwner->bindParam(':zip', $zip, PDO::PARAM_STR);
    $stmt_insertOwner->bindParam(':city', $city, PDO::PARAM_STR);
    $stmt_insertOwner->execute();
    
    $insertedOwnerId = $conn->lastInsertId();
    return $insertedOwnerId;
    
    
}


function createCar($conn, $make, $model, $license){
    
    $stmt_insertCar = $conn->prepare("INSERT INTO bilar (car_make, car_model, car_reg) VALUES (:make, :model, :reg)");
    $stmt_insertCar->bindParam(':make', $make, PDO::PARAM_STR);
    $stmt_insertCar->bindParam(':model', $model, PDO::PARAM_STR);
    $stmt_insertCar->bindParam(':reg', $license, PDO::PARAM_STR);
    $stmt_insertCar->execute();
    $insertedCarId = $conn->lastInsertId();
    return $insertedCarId;
}


function createProject($conn, $startdate, $deadline, $headline, $description, $lastId, $lastCarId){
    
    $stmt_insertCar = $conn->prepare("INSERT INTO arbeten (date_start, date_deadline, headline, description, customer_fk, car_fk, creator_fk) VALUES (:datestart, :deadline, :hline, :description2, :customer, :customercar, :creator)");
    $stmt_insertCar->bindParam(':datestart', $startdate, PDO::PARAM_STR);
    $stmt_insertCar->bindParam(':deadline', $deadline, PDO::PARAM_STR);
    $stmt_insertCar->bindParam(':hline', $headline, PDO::PARAM_STR);
    $stmt_insertCar->bindParam(':description2', $description, PDO::PARAM_STR);
    $stmt_insertCar->bindParam(':customer', $lastId, PDO::PARAM_INT);
    $stmt_insertCar->bindParam(':customercar', $lastCarId, PDO::PARAM_INT);
    $stmt_insertCar->bindParam(':creator', $_SESSION['uid'], PDO::PARAM_INT);



    $stmt_insertCar->execute();
    
}
?>