  <?php
  @include("header.php");
  @include("conn.php");

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    // echo $id;
    $query = "select * from products where id = $id";
    $res = mysqli_query($con , $query);
    if($res){
     $row = mysqli_fetch_assoc($res);
    }
    else{
             echo "query is not working";
    }
  }

  if(isset($_POST['updatebtn'])){
        $product = $_POST['name'];
        $Quentity = $_POST['Quentity'];
        $Price = $_POST['Price'];
        $Description = $_POST['Description'];

        $query = "update products set ProductName = '$product' , ProductQuentity = '$Quentity' , ProductPrice = '$Price' , Productdescription = '$Description' where id = '$id'";
        $res = mysqli_query($con , $query);
        if($res){
                 echo "<script> alert(' product update successfully')
                window.location.href = './showproducts.php'
                </script>";
        }
        else{
                "query fail";
        }
  }
  ?>
      <h1 style="display:flex; justify-content:center; align-items:center; height:9vh; margin:;">Update Product</h1>
<form action="" method="Post">
  <div style="flex: 1; display: flex; flex-direction: column; justify-content: center; padding: 2rem; gap: 1.5rem; width: 100%; height: 100%; box-sizing: border-box;">
    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="Product" style="font-size: 1.25rem; font-weight: 600;">product</label>
      <input type="text" name="name" value="<?php echo $row ['ProductName']?>" placeholder="Product" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>
    
    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="Quentity" style="font-size: 1.25rem; font-weight: 600;">Quentity</label>
      <input type="text" name="Quentity" value="<?php echo $row ['ProductQuentity']?>" placeholder="Quentity" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>

    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="Price" style="font-size: 1.25rem; font-weight: 600;">Price</label>
      <input type="text" name="Price" value="<?php echo $row ['ProductPrice']?>" placeholder="Price" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>
  <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="Description" style="font-size: 1.25rem; font-weight: 600;">Description</label>
      <input type="text" name="Description" value="<?php echo $row ['Productdescription']?>" placeholder="description" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>

    <button type="submit" name="updatebtn" style="width: 100%; padding: 1.1rem; font-size: 1.25rem; font-weight: 700; color: #ffffff; background: #2563eb; border: none; border-radius: 8px; cursor: pointer; margin-top: 1rem;">update</button>      
  </div>
</form>
</body>
</html>

  <?php
  @include("footer.php")
  ?>