<?php
include("connect.php");

    echo ini_get("upload_max_filesize")."<br>" ;
    $allowtype=["jpg","jpeg","gif","png","tif","tiff"];
    $filetype=explode("/",$_FILES["filepic"]["type"]);
    $size=$_FILES["filepic"]["size"]/1024/1024;
    if(!in_array($filetype[1], $allowtype)){
            echo "Non-image is not file";

    }
    else if($size>1.00){
        echo "File size exceeds the maximum treshold. <br>";
    }

    else{
        $namecarType=$_POST["namecarTyp"];
        $brand=$_POST["brand"];
        $model=$_POST["model"];
        $color=$_POST["color"];
        $license=$_POST["license"];
        $province=$_POST["province"];
        $modelYear=$_POST["modelYear"];
        $price=$_POST["price"];
        $postedBy=$_POST["postedBy"];
        $postedDate=$_POST["postedDate"];
        $carpic=$_POST["carpic"];
        move_uploaded_file($_FILES["filepic"]["tmp_name"],"product/".$_FILES["filepic"]["name"]);
        $sqlinsert="INSERT INTO product(namecarType,brand,model,color,license,province,modelYear,price,postedBy,postedDate,carpic
        )VALUES('$namecarType','$brand','$model','$color','$license','$province', '$modelYear','$price','$postedBy','$postedDate','$carpic')";
        $result=$conn->query($sqlinsert);
        header("location:index.php");
    }

  
    
?>