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





<script>


document.getElementById("btn").addEventListener("reset",Close);

function popUp(){
let popup=document.getElementById("popup");

if(popup.classList=="popup"){
 document.getElementById("popup").classList.remove('popup')
document.getElementById("popup").classList.toggle('show')

}else{
    return popup;

}


}

let show=getElementById('popup');

function Close(){
        if(show.classList="show"){
            window.close('show');
        }
        else{
            return show;
        }
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
            
         
               
                <?php do{ $ID=$row['ID']; ?>
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
                        <span><img src="source/memo-icon.png" alt=""></span>Add
                        
                        </button>

                         <div class="popup"  id="popup">

                        
                            
                         <div><form action=" " class="btn-form">
                            <div  class="btn-container">

                            <button type="submit"  class="btn" id="btn" onclick="Close()"> x </button>
                            </div>
                        
                        
                        </form>
                         
                         </div>
                         <div class="pop-up-content">

                         <div class="memo-link">
                            <div class="img">
                                <img src="source/Memo.png" alt="">
                            </div>
                            
                            <div class="link">
                                   <span><a href="">⨁ Memo</a></span>

                            </div>
                         

                        </div>
                        <div class="Work-Order">

                        <div class="img">
                               <img src="source/Work Order.png" alt="">

                        </div>
                        <div class="a">
                              <span><a href="">⨁ Work Order</a></span>
                        </div>
                         
                      
                        </div>


                         </div>
                        


                        
                                
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
