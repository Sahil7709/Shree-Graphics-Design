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
  <!-- <link rel="shortcut icon" href="./assets/images/logo/devcon.webp" type="image/x-icon"> -->

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">
  <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->


  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <style>
        /* Basic styling */
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
  padding: 10px 15px;
  display: inline-block;
}

.menu-category .dropdown {
  list-style: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #fff;
  border: 1px solid #ddd;
  display: none; /* Hidden by default */
  padding: 10px 0;
  min-width: 150px;
  z-index: 1000; /* Ensures the dropdown is above other elements */
}

.menu-category:hover .dropdown {
  display: block; /* Show on hover */
}

.dropdown li {
  padding: 5px 15px;
}

.dropdown li a {
  text-decoration: none;
  color: #333;
  display: block;
  
}

.dropdown li a:hover {
  color:  hsl(0, 100%, 70%);;
}

/* Ensure parent container doesn't hide overflow */
.container {
  position: relative;
  z-index: auto; /* Prevents conflicts with dropdown z-index */
}

/* Add clearfix to prevent layout issues */
.container::after {
  content: '';
  display: table;
  clear: both;
}

.product-box{
    margin-top: 20px;
}
.sidebar-category{
    margin-top: 20px;
}
    </style>

</head>

<body>
<header>


<div class="header-main">

  <div class="container">

    <a href="#" class="header-logo">
      <!-- <img src="./assets/images/logo/devcon.webp" alt="Devcon's logo" width="120" height="36"> -->
    </a>
    Devcon 

    <div class="header-search-container">

      <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

      <button class="search-btn">
        <ion-icon name="search-outline"></ion-icon>
      </button>

    </div>


  </div>

</div>

<nav class="desktop-navigation-menu">

<div class="container">

<ul class="desktop-menu-category-list">

<li class="menu-category">
  <a href="index.php" class="menu-title">Home</a>
</li>

<li class="menu-category">
  <a href="Women.php" class="menu-title">Women's</a>

</li>

<li class="menu-category">
  <a href="men.php" class="menu-title">Men's</a>
</li>


<li class="menu-category">
  <a href="vendors.php" class="menu-title">vendors</a>
</li>

<li class="menu-category">
  <a href="services.php" class="menu-title">Services</a>
</li>

</ul>

</div>

</nav>

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

      <li class="menu-category">
        <a href="services.php" class="menu-title">T-Shirt</a>
        <ul class="dropdown">
          <li><a href="round_neck.php">Round Neck</a></li>
          <li><a href="v_neck.php">V-Neck</a></li>
        </ul>
      </li>

      <li class="menu-category">
        <a href="services.php" class="menu-title">Apparels</a>
        <ul class="dropdown">
          <li><a href="cap.php">Cap</a></li>
          <li><a href="jackets.php">Jackets</a></li>
        </ul>
      </li>

      <li class="menu-category">
        <a href="services.php" class="menu-title">Travel</a>
        <ul class="dropdown">
          <li><a href="handbag.php">Hand Bag</a></li>
          <li><a href="laptopbag.php">Laptop Bag</a></li>
          <li><a href="travelbag.php">Travel Bag</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>


</header>

<main>

<div class="product-container">

<div class="container">


  <!--
    - SIDEBAR
  -->

  <div class="sidebar  has-scrollbar" data-mobile-menu>

    <div class="sidebar-category">

      <div class="sidebar-top">
        <h2 class="sidebar-title">Quick Links</h2>

        <button class="sidebar-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="sidebar-menu-category-list">

        <li class="sidebar-menu-category">

          <button class="sidebar-accordion-menu" data-accordion-btn>

            <div class="menu-title-flex">
              <img src="./assets/images/icons/home1.svg" alt="clothes" width="20" height="20"
                class="menu-title-img">

             <a href="index.php"> <p class="menu-title">Home </p></a>
            </div>

            <div>
            <a href="index.php"> 
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </a>
            </div>

          </button>

          <ul class="sidebar-submenu-category-list" data-accordion>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Shirt</p>
                <data value="300" class="stock" title="Available Stock">300</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">T-Shirt</p>
                <data value="60" class="stock" title="Available Stock">60</data>
              </a>
            </li>

            

          </ul>

        </li>

      
        <li class="sidebar-menu-category">

          <button class="sidebar-accordion-menu" data-accordion-btn>

            <div class="menu-title-flex">
              <img src="./assets/images/icons/services.svg" alt="clothes" class="menu-title-img" width="20"
                height="20">

              <a href="services.php"> <p class="menu-title">Services</p></a>
            </div>

            <div>   <a href="services.php">
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon></a>
            </div>

          </button>

          <ul class="sidebar-submenu-category-list" data-accordion>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Shirt</p>
                <data value="46" class="stock" title="Available Stock">46</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name"> T-Shirt</p>
                <data value="73" class="stock" title="Available Stock">73</data>
              </a>
            </li>


          </ul>

        </li>

        <li class="sidebar-menu-category">

          <button class="sidebar-accordion-menu" data-accordion-btn>

            <div class="menu-title-flex">
              <img src="./assets/images/icons/client.png" alt="perfume" class="menu-title-img" width="20"
                height="20">

              <a href="vendors.php" ><p class="menu-title">vendors</p></a>
            </div>

            <div>  <a href="vendors.php" >
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon> </a>
            </div>

          </button>

          <ul class="sidebar-submenu-category-list" data-accordion>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Shirt</p>
                <data value="12" class="stock" title="Available Stock">12 pcs</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">T-Shirt</p>
                <data value="60" class="stock" title="Available Stock">60 pcs</data>
              </a>
            </li>

            

          </ul>

        </li>

      </ul>

    </div>


  </div>


  

  <div class="product-box">
<!-- PRODUCT GRID -->
<?php
// Set the category filter to 'cap'
$category_filter = 'round_neck_tshirt';
?>

<div class="product-grid">
  <?php include 'Admin/fetch_products.php'; ?>
</div>
</div>
</div>

</div>

</main>

<footer>

<div class="footer-category">


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
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <!-- For Banner -->

  <script>
    const sliderContainer = document.querySelector('.slider-container');
const sliderItems = document.querySelectorAll('.slider-item');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentIndex = 0;

// Function to update the slider position
function updateSlider() {
  sliderContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Event Listeners for Buttons
prevBtn.addEventListener('click', () => {
  currentIndex = (currentIndex === 0) ? sliderItems.length - 1 : currentIndex - 1;
  updateSlider();
});

nextBtn.addEventListener('click', () => {
  currentIndex = (currentIndex === sliderItems.length - 1) ? 0 : currentIndex + 1;
  updateSlider();
});

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

 
</body>
</html>