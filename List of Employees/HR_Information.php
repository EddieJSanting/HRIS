<?php

include('connection.php');

$con=Connection();

$sql="SELECT * FROM listofemployee";

$data=$con->query($sql) or die($con->error);
$row=$data->fetch_assoc();


$ID=$row['ID'];




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR INFORMATION</title>
    <link rel="stylesheet" href="Home-nav.css">





<script>


document.getElementById("btn").addEventListener("reset",close);

function popUp(){
let popup=document.getElementById("popup");

if(popup.classList=="popup"){
 document.getElementById("popup").classList.remove('popup')
document.getElementById("popup").classList.toggle('show')

}else{
    return popup;

}


}
function close(){
    document.getElementById("popup").classList.remove('show')
    document.getElementById("popup").classList.toggle('popup')




}




</script>
  
  
    
</head>
<body >

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
            <form id='add-data'action="add.php">
                <button type="submit"> Add New +</button>
            </form>
           
        </div>
        <div class="list-controller">
            <table>
                <tr >
                    <td><div class="show-entries">
                  
                        
                    </div>
                    </td>
                    <td>
                        <div class="search-bar">
                            <form action="search.php" method="post">
                                
                                    <img src="source/search-icon-png-21.png" alt="search-icon">
                                    <input type="text" id="search-bar" placeholder=" Search..." name="search">
                               
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
                    
                       <button   type="submit" onclick="popUp()" class="btn">
                        <span><img src="source/memo-icon.png" alt=""></span>Memo
                        
                        </button>

                         <div class="popup"  id="popup">

                        
                            
                         <div><form action=" ">
                         <button type="submit"  class="btn" id="btn"> x </button>
                        
                        </form>
                         
                         </div>
                         <form action=""method="post">
                                

                              

                                <div class="textarea">

                                        <label for="Memo">
                                        <textarea type="text" class='Memo' placeholder="Write a Memo ..." id="memo"></textarea>
                                        </label>
                                    </div>
                                    <div class="file-upload">

                                        <input type="file" class="myFile">


                                    </div>
                                    
                                <div class="submit">
                                    <label for="submit"></label>
                                    <button type="submit">Submit</button>
                                </div>
                                
                                </form>


                        
                                
                </div>
           
                        </div>
                        <div class="edit"><a href="edit.php?ID=<?php echo $ID; ?>" alt=""><span><img src="source/edit.png.png" alt=""></span>Edit</a></div>
                        <div class="print"><a href=""><span><img src="source/print.png.jpg" alt=""></span>Print</a></div>
                    </td>
                   
                </tr><?php }while($row=$data->fetch_assoc()); ?>
                
                  
                
                
                </table>
                  
                
    
            
          
           
        </div>

    </div>
</div>


<footer>

</footer>



    
  
</body>

</html>
