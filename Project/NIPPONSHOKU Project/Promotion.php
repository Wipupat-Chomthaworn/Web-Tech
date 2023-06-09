<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/videopointers" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>NIPPONSHOKU GA TABEITAI</title>
  <link href="cart.css" rel="stylesheet" type="text/css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container-fluid {
      mix-blend-mode: lighten;
    }

    body {
      -webkit-text-stroke: 0.5px black;
      font-family: 'Roboto Slab', serif;
      background-size: cover;
      background-repeat: no-repeat;
      background-image: url("img/bg.png");
      min-height: 100%;
      width: 100%;
      color: white;
    }

    .add-to-cart {
      /*       background-color: rgba(var(--right-side-bg-color), 0.7); */
      background-color: #000;

      display: flex;
      justify-content: center;
      align-items: center;

      position: absolute;
      top: 10px;
      right: 30px;

      padding: 5px;

      border-radius: 50%;

      cursor: pointer;
    }

    .add-to-cart img {
      width: 64px;
      height: 64px;
    }

    #mban {
      width: 90%;
      height: 80%;
      margin: auto;
      margin-bottom: 10%;
    }

    .swiper-container {
      top: -10%;
      width: 90vw;
      height: 100%;
      object-fit: cover;
    }

    .swiper-slide {
      width: auto;
      height: auto;
      background-size: cover;
    }

    .swiper-slide img {
      width: 100%;
      height: 100%;
      background-size: auto;
    }

    h2 {
      font-size: 70px;
      margin-top: 30px;
    }

    .swiper-pagination {
      position: absolute;
      bottom: 50%;
      right: 45%;
      width: auto !important;
      left: auto !important;
      margin: 0;
    }

    .swiper-pagination-bullet {
      padding: 5px 10px;
      border-radius: 20px;
      width: 70px;
      height: 20px;
      text-align: center;
      line-height: 30px;
      font-size: 12px;
      color: #000;
      opacity: 1;
      background: rgba(0, 0, 0, 0.2);
    }

    .swiper-pagination-bullet-active {
      color: #fff;
      background: #007aff;
    }

    ::-webkit-scrollbar {
      width: 1rem;
    }

    ::-webkit-scrollbar-track {
      background-color: black;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #ae0707;
    }

    footer {
      position: relative;
      width: 100%;
      height: auto;
      padding: 20px;
      background: #111;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    footer .container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      flex-direction: row;
    }

    footer .container .sec {
      margin-right: 30px;
      margin-bottom: 0;
    }

    footer .container .sec.aboutus {
      width: 50%;
    }

    .contact {
      width: 50%;
      margin-right: 0 !important;
    }

    footer .container h3 {
      position: relative;
      color: #fff;
      font-weight: 500;
      margin-bottom: 15px;
    }

    footer .container h3:before {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 50px;
      height: 3px;
      background: #f00;
    }

    footer p {
      color: #999;
    }

    .connect {
      position: relative;
      width: 25%;
    }

    .sci {
      margin-top: 20px;
    }

    .sci li {
      list-style: none;
    }

    .connect .sci li a {
      flex-direction: column;
      width: 30px;
      height: 30px;
      background: #222;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 10px;
      text-decoration: none;
      border-radius: 4px;
    }

    .sci li a:hover {
      background: red;
    }

    .sci li a .fa {
      color: #fff;
      font-size: 20px;
    }

    .contact {
      width: calc(25% - 60px);
      margin-right: 0 !important;
    }

    .contact .info {
      position: relative;
    }

    .contact .info li {
      display: flex;
      margin-bottom: 10px;
    }

    .contact .info li span:nth-child(1) {
      color: #ffffff;
      font-size: 20px;
      margin-right: 10px;
    }

    .contact .info li span {
      color: #999;
    }

    .contact .info li a {
      color: #999;
      text-decoration: none;
    }

    .contact .info li a:hover {
      color: #fff;
    }

    .copyrightText {
      padding-top: 8px;
      background: black;
      width: 100% padding: 8px 100px;
      text-align: center;
      color: #999;
      height: 5vh;
    }

    .navbar-menu img,
    .navbar-home img {
      height: 95px;
      opacity: 0.5;
    }

    .navbar-promotion img {
      height: 95px;
      opacity: 1;
    }

    .navbar-menu img:hover,
    .navbar-home img:hover {
      height: 95px;
      opacity: 1;
    }

    .navbar-account {
      display: flex;
      flex-wrap: nowrap;
      align-content: center;
      align-items: center;
      justify-content: space-evenly;
      padding: 5px;
      border: 3px solid white;
      border-radius: 20px;
    }

    .navbar-account img {
      mix-blend-mode: lighten;
      width: 40px;
    }

    .navbar-account #textacct {
      color: white;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-black" style="min-height: 100px; height: 100px; max-height: 100px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="img/Logo.png" style="height: 95px;" alt="logo">
      </a>
    </div>

    <div class="container-fluid">
      <a class="navbar-home" href="index.php">
        <img id="navbar-home" src="img/Home_selected.png" alt="logo">
        <!--         <h1 class="nav-name">Home</h1> -->
      </a>
    </div>
    <div class="container-fluid">
      <a class="navbar-promotion" href="Promotion.php">
        <img id="navbar-promotion" src="img/Promotion-web_selected.png" alt="logo">
        <!--         <h1 class="nav-name">Promotion</h1> -->
      </a>
    </div>

    <div class="container-fluid">
      <a class="navbar-menu" href="Sashimi.php">
        <img id="navbar-menu" src="img/Menu_selected.png" alt="logo">
        <!--         <h1 class="nav-name">Menu</h1> -->
      </a>
    </div>

    <!--     nev trolley login -->
    <div class="container">
      <div class="shopping-bag">
        <a class="navbar-trolley" href="Cart.php">
          <img src="img/Trolley.png" alt="logo">
          <div class="textcart">Cart</div>
          <div class="total-items-in-cart">
            0
          </div>
        </a>
      </div>
      <div class="container-fluid">
        <a class="navbar-account" href="log in.php">
          <img src="img/Account.png" alt="logo">

          <div id="textacct">Anonymous
          </div>
        </a>

      </div>
      <div class="container-fluid">
        <a class="navbar-contact" href="contact.php">
          <img src="img/Contact us.png" alt="logo">
          <!--         <h1 class="nav-name">Menu</h1> -->
        </a>
      </div>
    </div>
  </nav>
  <div id='mban'>
    <div class="swiper-container">
      <b>
        <h2>Promotion</h2>
      </b>
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <img src="img/Banner1.png" alt="">
        </div>
        <div class="swiper-slide"><img src="img/welcom.png" alt=""></div>
        <div class="swiper-slide"><img src="img/Banner2.png" alt=""></div>

        <!-- navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
  <script>
    var path = window.location.pathname;
    var page = path.split("/").pop();
    var fname = page.split('.php').reverse().pop();
    var fname = fname.toLowerCase();
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
  <script src="numcart.js"></script>
  <script src="promotion.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
  <script src="products.js"></script>   
  <script src="app.js"></script>
  <script>
    const mySwiper = new Swiper('.swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      speed: 300,
      mousewheel: true,
      effect: "fade",
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + '</span>';
        },
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
    function updateCart() {
      let finalnum = 0;
      for (i = 0; i < cart.length; i++) {
        finalnum += cart[i].numberOfUnits;
      }
      cartnumber.innerHTML = finalnum;
      localStorage.setItem("CART", JSON.stringify(cart));
    }

    function getSet1(id) {
      var success = true;
      if (cart.some((item) => item.id === id)) {
        success = false;
      }
      else {
        success = true;
        for (i = 0; i < promotion[0][fname + '1'].length; i++) {
          const item = promotion[0][fname + '1'][i];
          cart.push({
            ...item,
            numberOfUnits: 1,
          });
          window.localStorage.setItem("CART", JSON.stringify(cart));
        }
      }
      if (success == false) {
        setTimeout(function () {
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Product is already in cart!!',
            showConfirmButton: false,
            timer: 3000
          }), 3000
        });
      }
      else {
        setTimeout(function () {
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Item added to cart.',
            showConfirmButton: false,
            timer: 3000
          }), 3000
        });
      }
      updateCart();
    }
    function getSet2(id) {
      var success = true;
      if (cart.some((item) => item.id === id)) {
        success = false;
      }
      else {
        success = true;
        for (i = 0; i < promotion[0][fname + '2'].length; i++) {
          const item = promotion[0][fname + '2'][i];
          cart.push({
            ...item,
            numberOfUnits: 1,
          });
          window.localStorage.setItem("CART", JSON.stringify(cart));
        }
      }
      if (success == false) {
        setTimeout(function () {
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Product is already in cart!!',
            showConfirmButton: false,
            timer: 3000
          }), 3000
        });
      }
      else {
        setTimeout(function () {
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Item added to cart.',
            showConfirmButton: false,
            timer: 3000
          }), 3000
        });
      }
      updateCart();
    }
  </script>
  <footer>
    <div class="container">
      <div class="sec aboutus">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi quas ratione explicabo officia saepe aperiam
          repellendus quae at nam vitae fugiat facere inventore, laborum culpa necessitatibus nemo iusto assumenda ab
          possimus, repellat sunt eaque laboriosam distinctio. Sit quo odio modi nemo pariatur ab fuga culpa quia saepe
          necessitatibus! Error, id!</p>
      </div>
      <div class="sec connect">
        <h3>Connect</h3>
        <ul class="sci">
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="sec contact">
        <h3>Contact Info</h3>
        <ul class="info">
          <li>
            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            <span>1 Chalong Krung<br>
              1 Alley, Lat Krabang, Bangkok 10520,<br>TH</span>
          </li>
          <li>
            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
            <p><a href="tel:12345678900">+1 234 567 8900</a></p>
          </li>
          <li>
            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <p><a href="tabetai:knowmore@email.com">tabetai@email.com</a></p>
          </li>
        </ul>
      </div>
    </div>

  </footer>
  <div class="copyrightText">
    <p>Copyright © 2022 NIPPON GA TABETAI, All Rights Reserved.</p>
  </div>
</body>
<script>
  
      if (localStorage.getItem("Name").length > 0) {
          console.log("hi");
          <?php $access = true; ?>
          textacct.innerHTML = localStorage.getItem("Name");
      }
      let arg = localStorage.getItem("Name");
      if (<?php echo $access; ?>1) {
          // localStorage.clear();
          console.log("cool");
          console.log(typeof(localStorage.getItem("Name")));

          localStorage.setItem("Name", arg);
          textacct.innerHTML = localStorage.getItem("Name");
      } else {
          // localStorage.setItem("Name", "Anonymous");
          textacct.innerHTML = localStorage.getItem('Name');
      }
    </script>

</html>