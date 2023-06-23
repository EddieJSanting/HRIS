<?php

include('connection.php');

$con=Connection();

$sql="SELECT * FROM listofemployee";

$data=$con->query($sql) or die($con->error);
$row=$data->fetch_assoc();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR INFORMATION</title>
    <link rel="stylesheet" href="Home-nav.css">
  
    
</head>
<body>

    <header>
        
      
        <div class="HR-Information">
               <img src="source/MITSI.png" alt="">
                 
         </div>
        <div class="menu-container">
             
               
                <a href="source/test.html">BACK</a>
        </div>
   
    </header>


   <div class="main">
    <div class="home-section" >
        <div class="list-header">
            <h1>List of Employees</h1>
            <form id='add-data'action="">
                <button type="submit"> <p>Add New +</p></button>
            </form>
           
        </div>
        <div class="list-controller">
            <table>
                <tr >
                    <td><div class="show-entries">
                       Show:  <select name="subject" id="subject">
                      
                            <option value="" selected="selected"> 1 </option>
                            <option value="" selected="selected"> 2 </option>
                            <option value="" selected="selected"> 3 </option>
                            <option value="" selected="selected"> 4 </option>
                            <option value="" selected="selected"> 5 </option>
                            <option value="" selected="selected"> 6 </option>
                            <option value="" selected="selected"> 7 </option>
                            <option value="" selected="selected"> 8 </option>
                            <option value="" selected="selected"> 9 </option>
                            <option value="" selected="selected"> 10 </option>
                            
                        

                           
                          </select>
                          <p> entries</p> 
                        
                    </div>
                    </td>
                    <td>
                        <div class="search-bar">
                            <form action="">
                                
                                    <img src="source/search-icon-png-21.png" alt="search-icon">
                                    <input type="text" id="search-bar" placeholder=" Search..." name="Search">
                               
                                     <button type="submit">Search</button>
                               
                                
                                
                            </form>
                          
                        </div>
                    </td>
                  
                </tr>
            </table>
            

        </div>
        <div class="employee-table">
            
            <table>
            
            <tr class="vo0">
                <th class="Employeename">Employee Name</th>
                <th class = "Em">Email</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Contact Number</th>
                <th>Department</th>
                <th>Position</th>
                <th>Work Status</th>
                <th>Action</th>
            </tr>    
            
         
               
                <?php do{ ?>
                <tr class="vo1">
                
                    <td class="Employee-Name"><?php echo $row['Employee_Name']; ?></td>
                    <td class="Em"><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Address']; ?></td>
                    <td><?php echo $row['Sex']; ?></td>
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['Contact']; ?></td>
                    <td><?php echo $row['Department']; ?></td>
                    <td><?php echo $row['Position']; ?></td>
                    <td><?php echo $row['Work_Status']; ?></td>
                    <td class="action">
                        <div class="memo">
                            <a href=""><span><img src="source/memo-icon.png" alt=""></span>Memo</a>
                        </div>
                        <div class="edit"><a href=""><span><img src="source/edit.png.png" alt=""></span>Edit</a></div>
                        <div class="print"><a href=""><span><img src="source/print.png.jpg" alt=""></span>Print</a></div>
                    </td>
                   
                </tr><?php }while($row=$data->fetch_assoc()); ?>
                
                  
                
                
                </table>
                  
                
    
            
          
           
        </div>

    </div>
</div>


<footer>

</footer>

<script>
   
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
      
    }
    
    </script>
   
</body>

</html>
