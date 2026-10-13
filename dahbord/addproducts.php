  <?php
  @include("header.php")
  ?>
      <h1 style="display:flex; justify-content:center; align-items:center; height:9vh; margin:;">Add Product</h1>
<form action="../db.php" method="Post">
  <div style="flex: 1; display: flex; flex-direction: column; justify-content: center; padding: 2rem; gap: 1.5rem; width: 100%; height: 100%; box-sizing: border-box;">
    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="Product" style="font-size: 1.25rem; font-weight: 600;">product</label>
      <input type="text" name="name" placeholder="Product" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>
    
    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="Quentity" style="font-size: 1.25rem; font-weight: 600;">Quentity</label>
      <input type="number" name="Quentity" placeholder="Quentity" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>

    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="Price" style="font-size: 1.25rem; font-weight: 600;">Price</label>
      <input type="number" name="Price" placeholder="Price" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>
  <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="Description" style="font-size: 1.25rem; font-weight: 600;">Description</label>
      <input type="text" name="Description" placeholder="description" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>

    <button type="submit" name="submit" style="width: 100%; padding: 1.1rem; font-size: 1.25rem; font-weight: 700; color: #ffffff; background: #2563eb; border: none; border-radius: 8px; cursor: pointer; margin-top: 1rem;">Submit</button>      
  </div>
</form>
</body>
</html>

  <?php
  @include("footer.php")
  ?>