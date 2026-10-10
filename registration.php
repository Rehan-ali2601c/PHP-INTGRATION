  <?php
  @include("header.php")
  ?>
  <form style="flex: 1; display: flex; flex-direction: column; justify-content: center; padding: 2rem; gap: 1.5rem; width: 100%; height: 100%; box-sizing: border-box;" onsubmit="event.preventDefault();">

    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="email" style="font-size: 1.25rem; font-weight: 600;">Name</label>
      <input type="text"  placeholder="name" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>
    <!-- Email Field -->
    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="email" style="font-size: 1.25rem; font-weight: 600;">Email address</label>
      <input type="email" id="email" placeholder="name@example.com" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>

    <!-- Password Field -->
    <div style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%;">
      <label for="password" style="font-size: 1.25rem; font-weight: 600;">Password</label>
      <input type="password" id="password" placeholder="••••••••" style="width: 100%; padding: 1rem 1.25rem; font-size: 1.1rem; border-radius: 8px; border: 1px solid #334155; background: #1e293b; color: #ffffff; box-sizing: border-box; outline: none;">
    </div>

    <!-- Checkbox Option -->
    <div style="display: flex; align-items: center; gap: 0.75rem; margin-top: 0.5rem;">
      <input type="checkbox" id="check" style="width: 1.25rem; height: 1.25rem; accent-color: #2563eb; cursor: pointer;">
    </div>

    <button type="submit" style="width: 100%; padding: 1.1rem; font-size: 1.25rem; font-weight: 700; color: #ffffff; background: #2563eb; border: none; border-radius: 8px; cursor: pointer; margin-top: 1rem;">
      Submit
    </button>
  </form>

</body>
</html>
  <?php
  @include("footer.php")
  ?>