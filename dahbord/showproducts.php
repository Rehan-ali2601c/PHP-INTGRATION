<?php
@include("header.php")

?>
<h1 style="display: flex; justify-content: center; align-items: center; font-family: 'Inter', system-ui, sans-serif; font-size: 2.5rem; font-weight: 800; letter-spacing: -0.025em; color: #880000; text-shadow: 0 4px 20px rgba(37, 99, 235, 0.5), 0 2px 4px rgba(0, 0, 0, 0.4); margin: 2.5rem 0 1.5rem 0;">Add Product</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">product</th>
      <th scope="col">Quentity</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    

<?php
@include("./conn.php");

$query = "select * from products";
    $res =  mysqli_query($con , $query);
    if($res){
        while($row = mysqli_fetch_assoc($res)){
            echo
 " <tr>
      <th>$row[id]</th>
      <td>$row[ProductName]</td>
      <td>$row[ProductQuentity]</td>
      <td>$row[ProductPrice]</td>
      <td>$row[Productdescription]</td>
      <td>
    <button class='btn btn-success'>Edit</button>
    <button class='btn btn-danger'><a href='./deleteproducts_db.php?id=$row[id]'>Delete</a></button>
   </td>
    </tr>";
        }
    }
    else{
        echo "na haq";
    }

?>
  </tbody>
</table>

<?php
@include("footer.php")
?>