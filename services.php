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
        .service-container {
            margin-left: 60px;
            margin-right: 60px;
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

    <!--
    - MAIN
  -->
    <main>


        <!-- PRODUCT CONTAINER -->
        <div class="service-container">
            <?php
            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'logo');

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch services
            $sql = "SELECT * FROM services";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
          <div class="service-card">
              <img src="admin/uploads/' . htmlspecialchars($row['service_image']) . '" 
                   alt="' . htmlspecialchars($row['service_name']) . '" 
                   class="service-img">
              <h3 class="service-title">' . htmlspecialchars($row['service_name']) . '</h3>
              <p class="service-description">' . htmlspecialchars($row['service_description']) . '</p>
              <p class="service-price">Rs. ' . htmlspecialchars($row['service_price']) . '</p>
          </div>';
                }
            } else {
                echo "<p>No services available.</p>";
            }

            // Close the database connection
            $conn->close();
            ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>