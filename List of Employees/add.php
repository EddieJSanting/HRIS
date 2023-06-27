<?php
include('connection.php');

$con=Connection();

 

 if (isset($_POST['submit'])) {


    $Employee_Name=$_POST['Employee_Name'];
    $Email = $_POST['Email'];
    $Address=$_POST['Address'];
    $Sex=$_POST['Sex'];
    $Age=$_POST['Age'];
    $Contact=$_POST['Contact'];
    $Department=$_POST['Department'];
    $Position=$_POST['Position'];
    $Work_Status=$_POST['Work_Status'];  


   $sql = "INSERT INTO listofemployee SET
   Employee_Name = '$Employee_Name',
   Email = '$Email',
   Address = '$Address',
   Sex = '$Sex',
   Age = '$Age',
   Contact = '$Contact',
   Department = '$Department',
   Position = '$Position',
   Work_Status = '$Work_Status'
 ";



 $data=$con->query($sql) or die($con->error);

  if ($data == TRUE)
{


  header("location: HR_Information.php");

}
else
{


  header("location: HR_Information.php");
}

 }

 ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  </head>
  <body>
    <h1>Add Users</h1>
<form method="post">
  <input type="text" name="Employee_Name" required placeholder="enter your name">
  <input type="email" name="Email" required placeholder="enter your email">
  <input type="text" name="Address" required placeholder="enter your Address">
  <input type="text" name="Sex" required placeholder="enter your Sex">
  <input type="text" name="Age" required placeholder="enter your Age">
  <input type="text" name="Contact" required placeholder="enter your Contact">
  <input type="text" name="Department" required placeholder="enter your Department">
  <input type="text" name="Position" required placeholder="enter your Position">
  <input type="text" name="Work_Status" required placeholder="enter your Work_Status">

  <br> <br>
  <input type="submit" name="submit">
  <a href="HR_Information.php">Back</a>
</form>

  </body>
</html>