<?php
@include("./dahbord/conn.php");

if(isset($_POST['registerbtn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    if($name == "" || $email == "" || $password == "" || $address == ""){
        echo "<script> alert('fill the details completely');
        window.location.href = './registration.php';
        </script>";
    }
    else{
        // 1. Corrected variable to $checkquery
        $checkquery = "select * from users where uemail = '$email'";
        $newres = mysqli_query($con, $checkquery);

        // 2. Added mysqli_num_rows to check if any row exists
        if(mysqli_num_rows($newres) > 0){
            echo "<script> alert('email already exit');
            window.location.href = './login.php';
            </script>";
        }
        else{
            $query = "insert into users (uname , uemail , upassword , uaddress) values ('$name' , '$email' , '$password' , '$address')";
            $res = mysqli_query($con , $query);
            if($res){
                echo "<script> alert('registration complete');
                window.location.href = './index.php';
                </script>";
            }
            else{
                echo "<script> alert('registration failed');
                window.location.href = './registration.php';
                </script>";
            }
        }
    }   
}
?>