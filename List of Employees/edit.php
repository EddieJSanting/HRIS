<?php 
include('connection.php');

$con=Connection();
 

if(isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM listofemployee WHERE ID=$ID";
    $exe = mysqli_query($con, $sql);

    if ($exe == TRUE) {
        $count = mysqli_num_rows($exe);

        if ($count == 1) {
            $row = mysqli_fetch_assoc($exe);
            $Employee_Name=$row['Employee_Name'];
            $Email=$row['Email'];
            $Address=$row['Address'];
            $Sex = $row['Sex'];
            $Age=$row['Age'];
            $Contact=$row['Contact'];
            $Department=$row['Department'];
            $Position=$row['Position'];
            $Work_Status=$row['Work_Status'];
        } else {
            header("location: HR_Information.php");
        }
    }
}

if(isset($_POST['submit'])) {
    $ID = $_POST['ID'];
    $Employee_Name=$_POST['Employee_Name'];
    $Email=$_POST['Email'];
    $Address=$_POST['Address'];
    $Sex = $_POST['Sex'];
    $Age=$_POST['Age'];
    $Contact=$_POST['Contact'];
    $Department=$_POST['Department'];
    $Position=$_POST['Position'];
    $Work_Status=$_POST['Work_Status'];

    $sql = "UPDATE listofemployee SET
    Employee_Name = '$Employee_Name',
    Email = '$Email',
    Address = '$Address',
    Sex = '$Sex',
    Age = '$Age',
    Contact = '$Contact',
    Department = '$Department',
    Position = '$Position',
    Work_Status = '$Work_Status'
    WHERE ID='$ID'";

   $exe = mysqli_query($con, $sql);



   if ($exe == TRUE) {

     header("location: HR_Information.php");
   } else {

     header("location: HR_Information.php");
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <div>
        <h1>Edit User</h1>
        <form method="post">
        <table>
        <tr>
          <td> full name:</td>
          <td><input type="text" name="Employee_Name" value="<?php echo $Employee_Name; ?>"></td>
        </tr>
        <tr>
          <td> Email:</td>
          <td><input type="email" name="Email" value="<?php echo $Email; ?>"></td>
        </tr>
        <tr>
          <td> Address:</td>
          <td><input type="text" name="Address" value="<?php echo $Address; ?>"></td>
        </tr>
        <tr>
          <td> Sex:</td>
          <td><input type="text" name="Sex" value="<?php echo $Sex; ?>"></td>
        </tr>
        <tr>
          <td> Age:</td>
          <td><input type="text" name="Age" value="<?php echo $Age; ?>"></td>
        </tr>
        <tr>
          <td> Contact:</td>
          <td><input type="text" name="Contact" value="<?php echo $Contact; ?>"></td>
        </tr>
        <tr>
          <td> Department:</td>
          <td><input type="text" name="Department" value="<?php echo $Department; ?>"></td>
        </tr>
        <tr>
          <td> Position:</td>
          <td><input type="text" name="Position" value="<?php echo $Position; ?>"></td>
        </tr>
        <tr>
          <td> Work_Status:</td>
          <td><input type="text" name="Work_Status" value="<?php echo $Work_Status; ?>"></td>
</tr>
        <tr>
        <td colspan="2">
          <input type="hidden" name="ID" value="<?php echo $ID; ?>">
          <input type="submit" name="submit" value="Update User"> <br>
          <a href="HR_Information.php">Back</a>
        </td>

</tr>