<?php
    $conn=new mysqli("localhost","root","12345678","usedcar-004");
    if($conn->connect_errno){

        die("connect error".$conn->connect_error);
    }
    
    
?>