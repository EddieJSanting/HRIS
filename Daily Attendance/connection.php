<?php 
function Connection(){
    
    $localhost='localhost';
    $uname='root';
    $db_pass='1234';
    $db_name='eddie-db';
    $con = new mysqli($localhost,$uname,$db_pass,$db_name);
    
    
    if($con->connect_error){
        echo $con->connect_error;
    }
    else{
        
        return $con;
    }
    
    }
    
    

?>