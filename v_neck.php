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
        /* Style the code box */
        .code-box {
            font-size: 20px;
            /* Adjust the font size */
            font-family: monospace;
            /* Monospaced font for a code appearance */
            background-color: #f0f0f0;
            /* Light background color */
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            width: 150px;
            /* Adjust the width as per your preference */
            text-align: center;
            cursor: not-allowed;
            /* Make it non-interactive */
            user-select: none;
            /* Disable text selection */
            pointer-events: none;
            /* Disable interaction with the element */
        }

        .contact-form-section button {
            padding: 8px 12px;
            /* Reduced padding to make buttons smaller */
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Product Grid */
        /* Container and Row */
        .container {
            display: flex;
            gap: 30px;
            /* Adds space between the columns */
            padding: 20px;
        }

        .row {
            display: flex;
            width: 100%;
        }

        /* Column Styling */
        .col-8 {
            flex: 2;
            /* Occupies more space for the product grid */
        }

        .col-4 {
            flex: 1;
            /* Occupies less space for the contact form */
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 3 products per row */
            gap: 20px;
            /* Space between products */
        }

        .product-grid>* {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            background-color: #fff;
        }

        /* Contact Form Styling */
        .contact-form-section {
            position: sticky;
            top: 20px;
            /* Keeps the form 20px from the top when scrolling */
            background-color: #fff;
            /* Ensures the background color is consistent */
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .code-box {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

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
            display: none;
            /* Hidden by default */
            padding: 10px 0;
            min-width: 150px;
            z-index: 1000;
            /* Ensures the dropdown is above other elements */
        }

        .menu-category:hover .dropdown {
            display: block;
            /* Show on hover */
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
            color: hsl(0, 100%, 70%);
            ;
        }

        /* Ensure parent container doesn't hide overflow */
        .container {
            position: relative;
            z-index: auto;
            /* Prevents conflicts with dropdown z-index */
        }

        /* Add clearfix to prevent layout issues */
        .container::after {
            content: '';
            display: table;
            clear: both;
        }

        .product-box {
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
                                <li><a href="">Pool T-Shirt </a></li>
                                <li><a href="">Cut and sew T-Shirt</a></li>
                                <li><a href="">Basic Pool T-Shirt</a></li>

                            </ul>
                        </li>

                        <li class="menu-category">
                            <a href="" class="menu-title">Apparels</a>
                            <ul class="dropdown">
                                <li><a href="cap.php">Cap</a></li>
                                <li><a href="jackets.php">Jackets</a></li>
                                <li><a href="">Sweartshirt</a></li>
                                <li><a href="">Denim Shirt</a></li>
                                <li><a href="">Windcheaters</a></li>
                                <li><a href="">Ties</a></li>

                            </ul>
                        </li>

                        <li class="menu-category">
                            <a href="#" class="menu-title">Travel</a>
                            <ul class="dropdown">
                                <li><a href="handbag.php">Hand Bag</a></li>
                                <li><a href="">Strolley Bags</a></li>
                                <li><a href="travelbag.php">Travel Bags</a></li>
                                <li><a href="">Back Packs</a></li>
                                <li><a href="laptopbag.php">Laptop Bags</a></li>
                                <li><a href="">Laptop Cum Overnighter Bag</a></li>
                                <li><a href="">Trekking Bag</a></li>
                                <li><a href="">Passport Holder</a></li>
                                <li><a href="">I Pad Pouch</a></li>
                                <li><a href="">Laptop Hand Bag</a></li>
                                <li><a href="">Laptop Pouch</a></li>

                            </ul>
                        </li>

                        <li class="menu-category">
                            <a href="" class="menu-title">Leather</a>
                            <ul class="dropdown">
                                <li><a href="">Leather office Bags</a></li>
                                <li><a href="">Leather Passport Holder</a></li>
                                <li><a href="">Leather Wallets</a></li>
                                <li><a href="">Leather Organizers</a></li>
                                <li><a href="">Leather Gift Sets</a></li>
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

    <main>
    <div class="product-container">

      <div class="container">

        <!-- products  -->
        <div class="product-box">
          <div class="container">
            <div class="row">
              <!-- PRODUCT COLUMN -->
              <div class="col-8 product-column">
               
               <!-- PRODUCT GRID -->
               <?php
                    // Set the category filter to 'cap'
                    $category_filter = 'v_neck_tshirt';
                    ?>

                    <div class="product-grid">
                        <?php include 'Admin/fetch_products.php'; ?>
                    </div>
                    
              </div>

<!-- CONTACT FORM COLUMN -->
<div class="col-4 form-column">
  <div class="contact-form-section">
    <form action="submit_contact.php" method="post" id="contactForm" onsubmit="return validateCode()">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write your message here" required></textarea>
      </div>
      <div class="form-group">
        <label for="verificationCode">Code</label>
        <input type="text" id="verificationCode" name="verificationCode" placeholder="Enter the code below" required>
      </div>
      <div class="form-group">
        <p id="codeDisplay" class="code-box">ABC123</p>
        <button type="button" id="refreshCodeBtn">Refresh Code</button>
      </div>
      <button type="submit" class="submit-btn" id="submitButton">Submit</button>
    </form>
  </div>
</div>

            </div>
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

    <!-- For Contact Form  -->

    <!-- Script for Contact Form -->
    <script>
        // Initialize the verification code
        const generateCode = () => {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let newCode = '';
            for (let i = 0; i < 6; i++) {
                newCode += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            return newCode;
        };

        // Update the displayed code
        const refreshCode = () => {
            const newCode = generateCode();
            document.getElementById('codeDisplay').textContent = newCode;
        };

        // Event listener for refreshing the code
        document.getElementById('refreshCodeBtn').addEventListener('click', refreshCode);

        // Validate the code on form submission
        const validateCode = () => {
            const displayedCode = document.getElementById('codeDisplay').textContent;
            const enteredCode = document.getElementById('verificationCode').value;

            if (displayedCode !== enteredCode) {
                alert('Verification code is incorrect. Please try again.');
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        };

        // Set an initial code when the page loads
        window.onload = refreshCode;
    </script>

</body>

</html>