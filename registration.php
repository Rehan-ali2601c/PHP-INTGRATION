<?php
  @include("header.php")
  ?>
  <form action ="registration_db.php" method ="post" style="max-width: 480px; margin: 0 auto;">
  <div style="flex: 1; display: flex; flex-direction: column; justify-content: center; padding: 1rem 2rem 2rem 2rem; gap: 1.25rem; width: 100%; box-sizing: border-box;">
    <h1 style="display:flex; justify-content:center; align-items:center; font-size: 2.2rem; font-weight: 800; color: #3068b1; letter-spacing: -0.02em; text-shadow: 0 4px 20px rgba(161, 4, 4, 0.37); margin: 0.5rem 0;">Registration</h1>
    
    <!-- Name Field -->
    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="Name" style="font-size: 1.25rem; font-weight: 600;">Name</label>
      <input type="text" name ="name" placeholder="name" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>

    <!-- Email Field -->
    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="email" style="font-size: 1.25rem; font-weight: 600;">Email address</label>
      <input type="email" name ="email" placeholder="name@example.com" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>

    <!-- Password Field -->
    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="password" style="font-size: 1.25rem; font-weight: 600;">Password</label>
      <input type="password" name ="password" placeholder="••••••••" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>

    <!-- Address Field -->
    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="address" style="font-size: 1.25rem; font-weight: 600;">Address</label>
      <input type="text" name ="address" placeholder="sindh" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>

    <button type="submit" name ="registerbtn" style="width: 100%; padding: 1.1rem; font-size: 1.25rem; font-weight: 700; color: #ffffff; background: #2563eb; border: none; border-radius: 8px; cursor: pointer; margin-top: 1rem;">Register</button>
    </div>
    
  </form>

</body>
</html>
  <?php
  @include("footer.php")
  ?>