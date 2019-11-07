<?php
session_start();

$con=mysqli_connect('localhost','root',NULL);
if(!$con){
    echo "Couldnt find the server";

}
else{
    echo "Succesfully connected\n";
    mysqli_select_db($con,'userloginrealhack');
    $name=$_POST['user'];
    $pass=$_POST['password'];
    $mail=$_POST['email'];
    $gender=$_POST['gender'];
    $dof=$_POST['dof'];
    
    $s="select * from usersrealhack where name='$name'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        echo "username already taken";
    }
    else{
        $reg=" insert into usersrealhack(Name,Password,Email,DateOfBirth,Gender) values('$name','$pass','$mail','$dof','$gender')";
        mysqli_query($con,$reg);
    }

}
?>