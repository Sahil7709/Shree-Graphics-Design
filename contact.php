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
  .row {
  display: flex;
  flex-wrap: wrap;
}

.col-left,
.col-right {
  flex: 1; /* Ensures both columns are of equal width */
  padding: 20px;
  box-sizing: border-box;
}

.col-left {
  position: sticky;
  top: 0; 
  height: 100vh; /* Optional: If you want the column to span the full viewport height */
  padding: 20px;
}

.col-right {
  background-color: #ffffff; /* Optional: Background color for the right column */
}

  </style>
<style>
  /* General container styling */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Address container styling */
.address-container {
  padding: 20px;
  border-radius: 8px;
  margin-bottom: 20px;
  box-shadow: 0 7px 14px rgba(0, 0, 0, 0.1);
}

.address-container h3 {
  margin-top: 0;
  font-size: 24px;
  color: #333;
}

.address-container p {
  font-size: 16px;
  color: #555;
  line-height: 1.5;
}

/* Contact form section styling */
.contact-form-section {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  font-size: 16px;
  color: #333;
  margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.form-group textarea {
  resize: vertical;
  height: 100px;
}

#codeDisplay {
  background-color: #f1f1f1;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  text-align: center;
  margin-bottom: 10px;
}

button {
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  background-color: #007bff;
  color: #ffffff;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

.submit-btn {
  background-color: #28a745;
}

.submit-btn:hover {
  background-color: #218838;
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


  <!--
    - MAIN
  -->

  <main>

  <div class="container">
  <div class="row">
    <div class="col-left">
   
      <div class="address-container">

      <h3>Address:</h3>
      <p>Devcon software Services<br>
      Office No. 4-B, Second Floor, <br>
      Ganesham Commercial -A,<br>
      Survey No. 21/18-21/24, BRTS Road, <br>
      Pimple Saudagar, Pune- 411027<br>
</div>
      <div class="address-container">
      <h3>Phone:</h3>

         1 234 567 890<br>
      </div>
      <div class="address-container">
         <h3>Email:</h3>

          info@company.com</p>
      </div>

    </div>
    <div class="col-right">
   
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
      <input type="text" id="verificationCode" name="verificationCode" required>
      <!-- Display the code inside a div -->
      <div id="codeDisplay" class="code-box">ABC123</div>
      <!-- Input field to store the code (invisibly) -->
    </div>

    <div class="form-group">
      <button type="button" id="refreshCodeBtn">Refresh Code</button>
    </div>
    <button type="submit" class="submit-btn">Submit</button>
  </form>
    </div>
  </div>
</div>

  <div class="map-container">
    <!-- <h3> Location</h3> -->
    <div class="map-responsive">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.4804323839676!2d73.80092486980347!3d18.59744852819473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b95d8c1f62cf%3A0xa88ec1997c7acf8b!2sDevcons%20Software%20Solutions%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1737766217321!5m2!1sen!2sin" 
        width="100%"
         height="400" 
         style="border:0;" 
         allowfullscreen=""
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>