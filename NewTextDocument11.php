<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$status=$_POST['status'];
$government=$_POST['government'];
$weigth=$_POST['weigth'];
$height=$_POST['heigth'];
if(isset($_POST['btn'])){
    $host="localhost";
    $user="root";
    $paswword="";
    $db="project";
    $conn= mysqli_connect( $host,$user,$paswword,$db);
    $insert="INSERT INTO pro(firstname,lastname,email,password,status,government,weight,height) VALUES('$firstname','$lastname','$email','$pass','$status','$government','$weigth','$height')";
    mysqli_query($conn,$insert);
    if($conn){
        echo"<h1>success</h1>";
    }
    else{
    echo"<h1 >failed</h1>";
    }
}
    ?>