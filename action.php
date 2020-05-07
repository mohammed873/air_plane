<?php
include 'config.php';

//sending the reserve data into database
  if(isset($_POST['reserve'])){
    $flying_from=$_POST['flying_from'];

    $query="INSERT INTO reservation (flying_from) VALUES (?)";
    $stmt->$conix->prepare($query);
    $stmt->pind_pram("i",$flying_from);
    $stmt->excute();

  }


//Random data foe trips list
$query= "INSERT INTO `trips` (`Id`, `Flight type`, `Flying from`, `Flying to`, `Departing date`, `Flight class`, `Price`, `
Seats`) VALUES ('1', 'Rounded trip', 'agadir', 'paris', '12/05/2020', 'first class', '1000 DH'), ('2', 'one way', 'tanger', 'marrakech', '12/05/2020', 'first class', '2000dh')";

"UPDATE `trips` SET `Seats` = '100' WHERE `trips`.`Id` = ";

$query="SELECT * FROM trips WHERE id = 1";
$stmt=$conix->prepare($query);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

$id=$row['Id'];
$trips=$row['Flight type'];
$flying_from=$row['Flying from'];
$flying_to=$row['Flying to'];
$departing=$row['Departing date'];
$travel_class=$row['Flight class'];
$Price=$row['Price'];
$Seats=$row['Seats'];


?>