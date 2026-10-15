<?php
session_start();
@include("./dahbord/conn.php");

if (isset($_POST['loginbtn'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "" || $password == "") {
        echo "<script> alert('fill the details completely');
        window.location.href = './login.php';
        </script>";
    } else {
        $query = "select * from users where uemail = '$email' AND upassword = '$password'";
        $res = mysqli_query($con, $query);

        if ($res) {
            if (mysqli_num_rows($res) > 0) {
                $_SESSION['email'] = $email;
                
                echo "<script> alert('login successfull');
                 window.location.href = './index.php';
                 </script>";
            } else {
                echo "<script> alert('invalid email or password');
                window.location.href = './login.php';
                </script>";
            }
        } else {
            echo "<script> alert('database query error');
            window.location.href = './login.php';
            </script>";
        }
    }
}
?>