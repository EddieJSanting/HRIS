<?php

include('connection.php');
$con=Connection();

$sql='SELECT * FROM attendance';

$data=$con->query($sql) or die($con->error);
$rows=$data->fetch_assoc();





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Header.css">
</head>
<header>
    <div class="Mitsi-Logo">
        <img src="resources/MITSI.png" alt="MITSI">
    </div>
    <div class="menu-container">
        <div class="nav-container">
          
             
            <div class="Exit">
                <a href="test.html">&nbsp;BACK</a>

            </div>
        </div>
        
         </div>
           
        </div>
    </div>
</header>
<body>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="main">
        <div class="content-container">
            <div class="content-elements">
                
                <h1>Daily Attendance</h1>
            </div>
          
            <div class="content-controller">
                <div class="daily-attendance">
                        <p>Attendace</p>
                        <select name="select" id="Daily Attendace">
                            <option value=""selected="">All Department</option>
                        </select>
                            
                </div>
                <div class="shift">
                    <p>Shift</p>
                    <select name="select" id="Shift">
                        <option value=""selected="">Day Shift</option>
                        <option value=""selected="">Night Shift</option>
                    </select>
                </div>
                <div class="date">
                    <p>Date</p>
                    <select name="select" id="Date">
                        <option value=""selected="">June 17, 2023</option>
                       
                    </select>
                </div>
            </div>
            
            <div class="content-searchbar">
                <form action=""method="post">
                                
                                    <img src="resources/search-icon-png-21.png" alt="search-icon">
                                    <input type="text" id="search-bar" placeholder=" Search..." name="Search">
                                    <label for="search"></label>
                                     <input type="submit" placeholder="Search" name="search" value="search" id="search">
                               
                                
                            </form>

            
        </div>
        <div class="table">
            <table>
                <tr>
                    <th class="employee-name">Employee Name</th>
                    <th>In Time</th>
                    <th>Out Time</th>
                    <th>Shift</th>
                    <th>Status</th>
                </tr>
                <?php do{ ?>
                <tr>
                     <td class="column1"><?php echo $rows['Employee_Name'];  ?></td>
                    <td><?php echo $rows['In_Time'];  ?></td>
                    <td><?php echo $rows['Out_Time'];  ?></td>
                    <td><?php echo $rows['Shift'];  ?></td>
                    <td><?php echo $rows['Status'];  ?></td>
                </tr><?php }while($rows=$data->fetch_assoc()); ?>
                   
            </table>

        </div>

             
    </div>
    
   
 
    
</body>
</html>