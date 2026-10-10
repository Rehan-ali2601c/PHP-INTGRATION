<?php
@include("header.php")?>
<div class="container-fluid vh-100 d-flex flex-column p-4 bg-light">
  <h2 class="mb-4 text-center fw-bold">Product Information</h2>
  
  <form class="d-flex flex-column flex-grow-1 justify-content-between">
    <!-- Product Input -->
    <div class="flex-grow-3 d-flex flex-column mb-3">
      <label for="productInput" class="form-label fs-4">Product</label>
      <input type="text" class="form-control form-control-lg flex-grow-1 fs-3" id="productInput" placeholder="Enter product name" required>
    </div>

    <!-- Quantity Input -->
    <div class="flex-grow-3 d-flex flex-column mb-3">
      <label for="qtyInput" class="form-label fs-4">Qty</label>
      <input type="number" class="form-control form-control-lg flex-grow-1 fs-3" id="qtyInput" placeholder="Quantity" min="1" required>
    </div>

    <!-- Price Input -->
    <div class="flex-grow-1 d-flex flex-column mb-3">
      <label for="priceInput" class="form-label fs-4">Price</label>
      <div class="input-group flex-grow-1">
        <span class="input-group-text fs-3 px-4">$</span>
        <input type="text" class="form-control form-control-lg fs-3" id="priceInput" placeholder="0.00" required>
      </div>
    </div>

    <!-- Description Input -->
    <div class="flex-grow-1 d-flex flex-column mb-4">
      <label for="descInput" class="form-label fs-4">Desc</label>
      <textarea class="form-control form-control-lg flex-grow-1 fs-3" id="descInput" placeholder="Enter product description"></textarea>
    </div>

    <!-- Submit Button -->
    <div class="w-100">
      <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fs-3 fw-bold">Submit</button>
    </div>
  </form>
</div>

///....hfgjjihylgfijjmklfh  
<?php
@include("footer.php")?>
