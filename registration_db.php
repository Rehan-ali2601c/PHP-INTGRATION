<?php
@include("./dahbord/conn.php");

if(isset($_POST['registerbtn'])){
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    $address = $_POST ['address'];

    $query = "insert into users (uname , uemail , upassword , uaddress) values ('$name' , '$email' , '$password' , '$address')";
    $res = mysqli_query ($con , $query);
    if($res){
        echo "registration complete";
         header("location:./registration.php");
    }
    else{
        echo "registration complete";

    }
}

?>