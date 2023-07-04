<?php

include('connection.php');


 $con=Connection();




 function x(){
    $conn=Connection();
    $sql1="SELECT * FROM listofemployee";

    $data1=$conn->query($sql1) or die($conn->error);
    $row1=$data1->fetch_assoc();


 }
 




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
             
               
                <a href="HR_Information.php">BACK</a>
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
                                    <input type="text" id="search-bar" placeholder=" Search..." name="search" >
                               
                                     <button type="submit">Search</button>
                               
                                
                                
                            </form>
                          
                        </div>
                    </td>
                  
                </tr>
            </table>
        
            <?php 
         


        $search = mysqli_real_escape_string($con, $_POST['search']);
       
       

        $sql="SELECT * FROM listofemployee WHERE Employee_Name LIKE '%$search%' OR Email LIKE '%$search%' OR Address LIKE '%$search%'
        OR Age LIKE '%$search%' OR Contact LIKE '%$search%' OR Department LIKE '%$search%' OR Position LIKE '%$search%'";

        $data=mysqli_query($con, $sql);
        $count = mysqli_num_rows($data);  ?>

        </div>
        <div class="employee-table">
            
            <table>
            
            <tr class="vo0">
                <th class="Employeename">Employee Name</th>
                <th class = "Em">Email</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Cosntact Number</th>
                <th>Department</th>
                <th>Position</th>
                <th>Work Status</th>
                <th>Action</th>
            </tr>    
            
         
               
                <?php          
                if($count>0) 
            {

              while($rows=mysqli_fetch_assoc($data))
              {
                $ID=$rows['ID'];

                $Employee_Name=$rows['Employee_Name'];
                $Email = $rows['Email'];
                $Address=$rows['Address'];
                $Sex=$rows['Sex'];
                $Age=$rows['Age'];
                $Contact=$rows['Contact'];
                $Department=$rows['Department'];
                $Position=$rows['Position'];
                $Work_Status=$rows['Work_Status'];              



                ?>
                <tr class="vo1">
                
                    <td class="Employee-Name"><?php echo $Employee_Name; ?></td>
                    <td class="Em"><?php echo $Email; ?></td>
                    <td><?php echo $Address; ?></td>
                    <td><?php echo $Sex; ?></td>
                    <td><?php echo $Age; ?></td>
                    <td><?php echo $Contact; ?></td>
                    <td><?php echo $Department; ?></td>
                    <td><?php echo $Position; ?></td>
                    <td><?php echo $Work_Status; ?></td>
      
                   
                   


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

                    <?php

                    x();
                   
                    
                    ?>


                     <div class="edit"><a href="edit.php?ID= <?php echo $ID; ?>" alt=""><span><img src="source/edit.png.png" alt=""></span>Edit</a></div>
                    
                     
                     
                     <div class="print"><a href=""><span><img src="source/print.png.jpg" alt=""></span>Print</a></div>
                 </td> <?php ?>

                
                       
                
                
                </tr>
                <?php    }
                         }
            else

            {?>

                 <tr class="vo1" style="border:none; justify-content:center; text-align:center;">
                
                    <td style="height:50px; border:none; position:absolute; width:auto;left:45%; margin-top:50px; font-size: 20px; ">
                    <?php echo "User Not Found"; ?>
                            
                    </td>
                
                       
                
                
                </tr>
                


               
            <?php } ?>
         

           
        </table>
           

           
          
                  
                
    
            
          
           
        </div>

      
    </div>
</div>


<footer>

</footer>



    
  
</body>

</html>
