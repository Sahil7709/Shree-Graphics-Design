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

    <button class="action-btn">
<a href = "index.php">
  <ion-icon name="home-outline"></ion-icon>
  </a>
</button>


    <button class="action-btn" data-mobile-menu-open-btn>
  <a href="vendors.php">
  <ion-icon name="heart-outline"></ion-icon></a>
</button>


<button class="action-btn" data-mobile-menu-open-btn>
  <a href="services.php">
  <ion-icon name="menu-outline"></ion-icon></a>
</button>



<button class="action-btn">
  <a href="contact.php">
  <ion-icon name="arrow-forward-outline"></ion-icon></a>
</button>


</div>


    <!-- 2nd Nav Bar  -->

    <nav class="desktop-navigation-menu">
  <div class="container">
    <ul class="desktop-menu-category-list">
      <li class="menu-category">
        <a href="#" class="menu-title">Embroidery Designing</a>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">T-Shirt</a>
        <ul class="dropdown">
          <li><a href="round_neck.php">Round Neck</a></li>
          <li><a href="v_neck.php">V-Neck</a></li>
          <li><a href="pool_tshirt.php">Pool T-Shirt</a></li>
          <li><a href="cutSew.php">Cut and Sew T-Shirt</a></li>
          <li><a href="basicpool.php">Basic Pool T-Shirt</a></li>
        </ul>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Apparels</a>
        <ul class="dropdown">
          <li><a href="cap.php">Cap</a></li>
          <li><a href="jackets.php">Jackets</a></li>
          <li><a href="sweartshirt.php">Sweatshirt</a></li>
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
        <a href="#" class="menu-title">Leather</a>
        <ul class="dropdown">
          <li><a href="leatherofficebag.php">Leather Office Bags</a></li>
          <li><a href="leatherpassport.php">Leather Passport Holder</a></li>
          <li><a href="leatherwallets.php">Leather Wallets</a></li>
          <li><a href="leatherorganizer.php">Leather Organizers</a></li>
          <li><a href="leathergift.php">Leather Gift Sets</a></li>
        </ul>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Awards</a>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Brands</a>
      </li>
    </ul>
  </div>
</nav>


  </header>

  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <?php
    // Database connection
    $host = 'localhost';
    $user = 'root'; // Default user for XAMPP
    $password = ''; // Default password for XAMPP (empty by default)
    $dbname = 'logo'; // Your database name
    
    // Create connection
    $conn = new mysqli($host, $user, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }

    // Fetch slider images from the database
    $sql = 'SELECT * FROM slider_images';
    $result = $conn->query($sql);
    ?>
    <div class="banner">
      <div class="container">
        <div class="slider-container has-scrollbar">
          <?php
          // Fetch slider images from the database
          $sql = 'SELECT * FROM slider_images';
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
              echo '<div class="slider-item">';
              echo '<img src="Admin/uploads/' .
                $row['image_url'] .
                '" alt="' .
                htmlspecialchars($row['title']) .
                '" class="banner-img">';
              echo '<div class="banner-content">';
              echo '<p class="banner-subtitle">' .
                htmlspecialchars($row['subtitle']) .
                '</p>';
              echo '<h2 class="banner-title">' .
                htmlspecialchars($row['title']) .
                '</h2>';
              echo '<p class="banner-text">starting at RS. <b>' .
                number_format($row['price'], 2) .
                '</b></p>';
              echo '<a href="services.php" class="banner-btn">Shop now</a>';
              echo '</div>';
              echo '</div>';
            }
          } else {
            echo 'No slider images found.';
          }
          ?>
        </div>
      </div>
    </div>



    <?php
    // Close connection
    $conn->close(); ?>


    <!--
      - PRODUCT
    -->

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

                    <a href="index.php">
                      <p class="menu-title">Home </p>
                    </a>
                  </div>

                  <div>
                    <a href="index.php">
                      <ion-icon name="add-outline" class="add-icon"></ion-icon>
                      <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </a>
                  </div>

                </button>



              </li>


              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/services.svg" alt="clothes" class="menu-title-img" width="20"
                      height="20">

                    <a href="services.php">
                      <p class="menu-title">Services</p>
                    </a>
                  </div>

                  <div> <a href="services.php">
                      <ion-icon name="add-outline" class="add-icon"></ion-icon>
                      <ion-icon name="remove-outline" class="remove-icon"></ion-icon></a>
                  </div>

                </button>



              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/client.png" alt="perfume" class="menu-title-img" width="20"
                      height="20">

                    <a href="vendors.php">
                      <p class="menu-title">vendors</p>
                    </a>
                  </div>

                  <div> <a href="vendors.php">
                      <ion-icon name="add-outline" class="add-icon"></ion-icon>
                      <ion-icon name="remove-outline" class="remove-icon"></ion-icon> </a>
                  </div>

                </button>
              </li>
            </ul>
          </div>
        </div>




        <div class="product-box">
          <!-- PRODUCT GRID -->
          <div class="product-grid">
            <?php include 'Admin/fetch_products.php'; ?>
          </div>
        </div>
      </div>

    </div>





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80"
                height="80">

              <p class="testimonial-name">Sonali</p>


              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Amazing work! Devcons Software Solutions created a logo that perfectly represents my brand.
                Their creativity and professionalism are top-notch. Highly recommend!
              </p>

            </div>

          </div>

          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ Rs. 5000</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Logo Design</h3>
                  <p class="service-desc">Unique and creative logos.</p>

                </div>
              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Brand Identity</h3>
                  <p class="service-desc"> Memorable and consistent branding.</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Custom Illustrations</h3>
                  <p class="service-desc">Custom artwork for your brand.</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Business Cards</h3>
                  <p class="service-desc">Professional card designs.</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Social Media Graphics</h3>
                  <p class="service-desc">Eye-catching visuals</p>

                </div>

              </a>

            </div>

          </div>

        </div>

      </div>

    </div>
  </main>

  <!--
    - FOOTER
  -->

  <footer>



    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">T-Shirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Apparels</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Travel</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Leather</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Awards</a>
          </li>


        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">T-Shirt </h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link"> Round Neck</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">V Neck</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Pool T-Shirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Basic Pool T-Shirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cut and sew T-Shirt</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Apparels</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cap</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Jackets</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sweartshirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link"> Denim Shirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Ties</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Logo Design</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Custom Illustrations</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Business Cards</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Social Media Graphics</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Brand Identity</a>
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
              Office No. 4-B, Second Floor,Ganesham Commercial -A,Pune
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">+91 9112100663</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">hr@devconsoftware.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">


        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">
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

  <!-- Script for 2nd Nav -->
   
  <script >
    function toggleMenu() {
  const menu = document.querySelector('.desktop-menu-category-list');
  menu.classList.toggle('show-menu');
}

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>