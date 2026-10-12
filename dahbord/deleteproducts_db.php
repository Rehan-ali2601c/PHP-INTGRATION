<?php
@include("conn.php");

$id = $_GET['id'];
echo $id;
$query  = "delete from products where id = $id";
        $res = mysqli_query($con , $query);
if($res){
    echo "thiyo";
    header("location:./showproducts.php");
}
else{
    "tar";
}
?>