
<?php
@include("./dahbord/conn.php");


if(isset($_POST['submit'])){
$product = $_POST['name'];
$Quentity = $_POST['Quentity'];
$Price = $_POST['Price'];
$Description = $_POST['Description'];


if($product == "" || $Quentity == "" || $Price == "" || $Description == ""){
    echo "<script> alert('fill the details completely')
    window.location.href = './dahbord/addproducts.php'
    </script>";
   
}
else {
    $query= "INSERT INTO `products`( ProductName, `ProductQuentity`, `ProductPrice`, `Productdescription`) VALUES 
( '$product' , '$Quentity' , '$Price' , '$Description' )";

$reslut = mysqli_query($con , $query);
if($reslut){
echo "geo";
header("location:./dahbord/showproducts.php");
}
else{
echo "maro";
}
}    
}
// echo $product . $Quentity . $Price . $Description;
?>
