 <!-- Top utility strip -->


 <?php
 session_start();
 
 ?>
  <!doctype php>
<php lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sprylo — Tech &amp; Gadgets Ecommerce php Template</title>
  <meta name="description" content="Sprylo is a free modern php template for tech and electronics stores — multi-color bento hero, indigo primary palette, Plus Jakarta + Outfit + Roboto Mono pair, 5 fully responsive pages, no framework, no build step." />
  <meta name="theme-color" content="#4F46E5" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Outfit:wght@400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body>

  <div class="utility">
    <div class="container">
      <span class="promo">
        <span class="tag">SALE</span>
        Free shipping on orders over $50 · 30-day returns
      </span>
      <span class="links">
        <a href="#">Track order</a>
        <a href="#">Help</a>
        <a href="#">EN · USD</a>
      </span>
    </div>
  </div>

  <!-- Header -->
  <header class="site-header">
    <div class="container">
      <a href="index.php" class="brand">
        <span class="brand-mark">S</span>
        Sprylo
      </a>

      <form class="search" role="search" onsubmit="event.preventDefault();">
        <input type="text" placeholder="Search for products, brands, categories…" aria-label="Search the store" />
        <button type="submit" aria-label="Search">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
        </button>
      </form>

      <div class="icon-row">
        <?php
              if(isset($_SESSION['email'])){
                    echo "<a href='logout_db.php' class='icon-btn' aria-label='Logout'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-box-arrow-in-right' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z'/><path fill-rule='evenodd' d='M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z'/></svg>
                    </a>";}
              else{
                  echo "<a href='registration.php' class='icon-btn' aria-label='Account'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-plus-fill' viewBox='0 0 16 16'><path d='M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6'/><path fill-rule='evenodd' d='M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5'/>  </svg>
                  </a>
                  <a href='login.php' class='icon-btn' aria-label='Login'>
                      <svg width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round'><circle cx='12' cy='8' r='4'/><path d='M4 21c0-4 4-7 8-7s8 3 8 7'/></svg>
                  </a>";
                    }
                      ?>
        <a href="cart.php" class="icon-btn icon-btn--cart" aria-label="Cart">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2l-2 5v13a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7l-2-5z"/><path d="M4 7h16"/><path d="M16 11a4 4 0 0 1-8 0"/></svg>
          <span class="count">2</span>
        </a>
        <button class="nav-toggle" aria-label="Open menu" aria-expanded="false">≡</button>
      </div>
    </div>
  </header>

  <!-- Category nav -->
  <nav class="nav-bar" aria-label="Primary">
    <div class="container">
      <a href="shop.php" class="all-cats">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        All Categories
      </a>
      <div class="main-nav">
        <a href="index.php" aria-current="page">Home</a>
        <a href="shop.php">Shop ▾</a>
        <a href="product.php">Products</a>
        <a href="cart.php">Cart</a>
        <a href="contact.php">Contact</a>
      </div>
      <span class="nav-cta">UP TO <strong>60% OFF</strong> ALL ITEMS</span>
    </div>
  </nav>

  <!-- Mobile drawer -->
  <div class="drawer" id="drawer" aria-hidden="true">
    <div class="drawer-head">
      <a href="index.php" class="brand"><span class="brand-mark">S</span> Sprylo</a>
      <button class="drawer-close" aria-label="Close menu">Close ✕</button>
    </div>
    <a href="index.php">Home</a>
    <a href="shop.php">Shop</a>
    <a href="product.php">Products</a>
    <a href="cart.php">Cart</a>
    <a href="contact.php">Contact</a>
    <a href="cart.php" class="btn btn--indigo" style="margin-top:var(--s5); justify-content:center">View cart →</a>
  </div>
