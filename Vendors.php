<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Devcon - eCommerce Website</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <style>
    /* 2nd Nav */
    .desktop-menu-category-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
    }

    .menu-category {
      position: relative;
      margin-right: 20px;
    }

    .menu-category .menu-title {
      text-decoration: none;
      color: #000;
    }

    .menu-category .dropdown {
      list-style: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #fff;
      border: 1px solid #ddd;
      display: none;
      padding: 10px 0;
      min-width: 200px;
      z-index: 1000;
      /* Add a high z-index */
    }

    .menu-category:hover .dropdown {
      display: block;
    }

    .dropdown li {
      padding: 5px 15px;
      border-bottom: 1px solid #ddd;
      /* Add a small gray line under each item */
    }

    .dropdown li a {
      text-decoration: none;
      color: #333;
    }

    .dropdown li a:hover {
      color: var(--salmon-pink);
    }

    /* Add a higher z-index to the nav container */
    .desktop-navigation-menu {
      position: relative;
      z-index: 1000;
    }
  </style>

  <style>
    /* Style for Logo Order Section and Modal */
    /* Center the entire logo-order-section */
    .logo-order-section {
      display: flex;
      justify-content: center;
      /* Horizontally center */
      align-items: center;
      /* Vertically center */
      height: 20vh;
      /* Make it take up the full height of the viewport */
    }

    /* Center the content inside the wrapper */
    .wrapper {
      display: flex;
      justify-content: center;
      /* Horizontally center */
      align-items: center;
      /* Vertically center */
      width: 100%;
      /* Ensure it spans the full width */
    }

    /* Ensure the order-box doesn't exceed content's size */
    .order-box {
      display: flex;
      justify-content: center;
      /* Horizontally center button */
      align-items: center;
      /* Vertically center button */
    }

    /* Style the button */
    .order-btn {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>

</head>

<body>
  <!--
    - HEADER
  -->

  <header>


    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <!-- <img src="./assets/images/logo/devcon.webp" alt="Devcon's logo" width="120" height="36"> -->
        </a>
        Devcon


        <div class="header-search-container">
          <ul class="desktop-menu-category-list">

            <li class="menu-category">
              <a href="index.php" class="menu-title">Home</a>
            </li>


            <li class="menu-category">
              <a href="vendors.php" class="menu-title">vendors</a>
            </li>

            <li class="menu-category">
              <a href="services.php" class="menu-title">Services</a>
            </li>


            <li class="menu-category">
              <a href="contact.php" class="menu-title">Contact</a>
            </li>

          </ul>
        </div>
      </div>

    </div>



    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="index.php" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>



        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">vendors</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Services</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>



        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

    <!-- 2nd Nav Bar  -->
    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <ul class="desktop-menu-category-list">

            <li class="menu-category">
              <a href="#" class="menu-title">Embroidery Designing</a>
            </li>


            <li class="menu-category">
              <a href="#" class="menu-title">T-Shirt</a>
              <ul class="dropdown">
                <li><a href="round_neck.php">Round Neck</a></li>
                <li><a href="v_neck.php">V-Neck</a></li>
                <li><a href="pool_tshirt.php">Pool T-Shirt </a></li>
                <li><a href="cutSew.php">Cut and sew T-Shirt</a></li>
                <li><a href="basicpool.php">Basic Pool T-Shirt</a></li>

              </ul>
            </li>

            <li class="menu-category">
              <a href="" class="menu-title">Apparels</a>
              <ul class="dropdown">
                <li><a href="cap.php">Cap</a></li>
                <li><a href="jackets.php">Jackets</a></li>
                <li><a href="sweartshirt.php">Sweartshirt</a></li>
                <li><a href="denimShirt.php">Denim Shirt</a></li>
                <li><a href="windcheaters.php">Windcheaters</a></li>
                <li><a href="ties.php">Ties</a></li>

              </ul>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Travel</a>
              <ul class="dropdown">
                <li><a href="handbag.php">Hand Bag</a></li>
                <li><a href="strolleybag.php">Strolley Bags</a></li>
                <li><a href="travelbag.php">Travel Bags</a></li>
                <li><a href="backpacks.php">Back Packs</a></li>
                <li><a href="laptopbag.php">Laptop Bags</a></li>
                <li><a href="laptopcumbag.php">Laptop Cum Overnighter Bag</a></li>
                <li><a href="trekkingbag.php">Trekking Bag</a></li>
                <li><a href="passport.php">Passport Holder</a></li>
                <li><a href="ipad.php">I Pad Pouch</a></li>
                <li><a href="laptophandbag.php">Laptop Hand Bag</a></li>
                <li><a href="laptopPouch.php">Laptop Pouch</a></li>

              </ul>
            </li>

            <li class="menu-category">
              <a href="" class="menu-title">Leather</a>
              <ul class="dropdown">
                <li><a href="leatherofficebag.php">Leather office Bags</a></li>
                <li><a href="leatherpassport.php">Leather Passport Holder</a></li>
                <li><a href="leatherwallets.php">Leather Wallets</a></li>
                <li><a href="leatherorganizer.php">Leather Organizers</a></li>
                <li><a href="leathergift.php">Leather Gift Sets</a></li>
              </ul>
            </li>

            <li class="menu-category">
              <a href="" class="menu-title">Awards</a>

            </li>

            <li class="menu-category">
              <a href="" class="menu-title">Brands</a>
            </li>
          </ul>

      </div>

    </nav>
  </header>


  <!-- Main -->
  <main>
    <div class="logo-order-section">
      <div class="wrapper">
        <div class="order-box">
          <div class="order-grid">
            <!-- Wrap the button with an anchor tag to redirect on click -->
            <a href="vendorsForm.php">
              <button id="openOrderFormBtn" class="order-btn">Place Order</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>



  <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-category">

      <div class="container">

        <h2 class="footer-category-title">Brand directory</h2>

        <div class="footer-category-box">

          <h3 class="category-box-title">Fashion :</h3>

          <a href="#" class="footer-category-link">T-shirt</a>
          <a href="#" class="footer-category-link">Shirts</a>
          <a href="#" class="footer-category-link">shorts & jeans</a>
          <a href="#" class="footer-category-link">jacket</a>
          <a href="#" class="footer-category-link">dress & frock</a>
          <a href="#" class="footer-category-link">innerwear</a>
          <a href="#" class="footer-category-link">hosiery</a>

        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">footwear :</h3>

          <a href="#" class="footer-category-link">sport</a>
          <a href="#" class="footer-category-link">formal</a>
          <a href="#" class="footer-category-link">Boots</a>
          <a href="#" class="footer-category-link">casual</a>
          <a href="#" class="footer-category-link">cowboy shoes</a>
          <a href="#" class="footer-category-link">safety shoes</a>
          <a href="#" class="footer-category-link">Party wear shoes</a>
          <a href="#" class="footer-category-link">Branded</a>
          <a href="#" class="footer-category-link">Firstcopy</a>
          <a href="#" class="footer-category-link">Long shoes</a>
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">jewellery :</h3>

          <a href="#" class="footer-category-link">Necklace</a>
          <a href="#" class="footer-category-link">Earrings</a>
          <a href="#" class="footer-category-link">Couple rings</a>
          <a href="#" class="footer-category-link">Pendants</a>
          <a href="#" class="footer-category-link">Crystal</a>
          <a href="#" class="footer-category-link">Bangles</a>
          <a href="#" class="footer-category-link">bracelets</a>
          <a href="#" class="footer-category-link">nosepin</a>
          <a href="#" class="footer-category-link">chain</a>
          <a href="#" class="footer-category-link">Earrings</a>
          <a href="#" class="footer-category-link">Couple rings</a>
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">cosmetics :</h3>

          <a href="#" class="footer-category-link">Shampoo</a>
          <a href="#" class="footer-category-link">Bodywash</a>
          <a href="#" class="footer-category-link">Facewash</a>
          <a href="#" class="footer-category-link">makeup kit</a>
          <a href="#" class="footer-category-link">liner</a>
          <a href="#" class="footer-category-link">lipstick</a>
          <a href="#" class="footer-category-link">prefume</a>
          <a href="#" class="footer-category-link">Body soap</a>
          <a href="#" class="footer-category-link">scrub</a>
          <a href="#" class="footer-category-link">hair gel</a>
          <a href="#" class="footer-category-link">hair colors</a>
          <a href="#" class="footer-category-link">hair dye</a>
          <a href="#" class="footer-category-link">sunscreen</a>
          <a href="#" class="footer-category-link">skin loson</a>
          <a href="#" class="footer-category-link">liner</a>
          <a href="#" class="footer-category-link">lipstick</a>
        </div>

      </div>

    </div>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Fashion</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Electronic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmetic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Health</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Watches</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">Devcon</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- script for Ventodr order form open  -->
  <script>
    // When the "Place Order" button is clicked, redirect to the vendorsForm.php page
    document.getElementById('openOrderFormBtn').addEventListener('click', function () {
      window.location.href = 'vendorsForm.php'; // Redirect to the new page
    });
  </script>




</body>

</html>