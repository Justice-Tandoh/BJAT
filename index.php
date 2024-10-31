<?php
session_start();
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login page
    header("Location: login.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1c1c1c;
            color: white;
        }
        .container {
            max-width: 400px;
            margin: auto;
        }
        /* Header */
        .header {
            display: flex;
            align-items: center;
            padding: 10px;
        }
        .header img {
            width: 60px;
        }
        /* Carousel/Slider */
        .carousel {
            position: relative;
        }
        .carousel img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        /* Icon Section */
        .icons {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }
        .icon {
            text-align: center;
            width: 22%;
        }
        .icon img {
            width: 50px;
            height: 50px;
        }
        .icon p {
            margin-top: 5px;
            font-size: 14px;
            color: white;
        }
        /* Information Section */
        .information {
            margin-bottom: 20px;
        }
        .info-card {
            display: flex;
            margin-bottom: 15px;
            background-color: #2d2d2d;
            border-radius: 10px;
            overflow: hidden;
        }
        .info-card img {
            width: 40%;
            height: 100px;
            object-fit: cover;
        }
        .info-text {
            padding: 10px;
            width: 60%;
        }
        .info-text p {
            margin: 0;
            font-size: 14px;
            color: white;
        }
        /* Bottom Navigation */
        .bottom-nav {
            margin-top: 40px;
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #1c1c1c;
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            border-top: 1px solid #333;
        }
        .nav-item {
            text-align: center;
            color: white;
        }
        .nav-item img {
            width: 25px;
            height: 25px;
        }
        .nav-item p {
            font-size: 12px;
        }
        .nav-item.active img {
            filter: brightness(2);
        }
        a {
            
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">

        <!-- Header with Logo -->
        <div class="header">
            <img src="Screenshot 2024-07-21 141903.png" alt="Logo">
        </div>

        <!-- Carousel/Slider -->
        <div class="carousel">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Screenshot 2024-10-11 214639.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Screenshot 2024-10-11 110349.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Screenshot 2024-10-11 095138.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>

        <!-- Icon Section -->
        <div class="icons">
            <div class="icon">
                <a href="recharge.html"><img src="Screenshot 2024-10-09 133206.png" alt="Recharge">
                <p>Recharge</p></a>
            </div>
            <div class="icon">
<a href="refer.html">                <img src="Screenshot 2024-09-01 143848.png" alt="Exchange">
                <p>Refer</p>
   </a>         </div>
            <div class="icon">
       <a href="withdraw.html">         <img src="Screenshot 2024-09-01 143911.png" alt="Withdraw">
                <p>Withdraw</p>
          </a>  </div>
            <div class="icon">
              <a href="team.html">  <img src="Screenshot 2024-09-01 143906.png" alt="My Team">
                <p>My Team</p>
            </a></div>
        </div>

        <!-- Information Section -->
        <div class="information" style="padding: 20px; margin: 50px;">
            <div class="info-card">
                <img src="Screenshot 2024-09-01 143825.png" alt="Info Image">
                <div class="info-text">
                    <p>Hut 8 receives $150 million investment to advance artificial...</p>
                </div>
            </div>
            <div class="info-card">
                <img src="Screenshot 2024-09-01 143825.png" alt="Info Image">
                <div class="info-text">
                    <p>Hut 8 receives $150 million investment to advance artificial...</p>
                </div>
            </div>
            <div class="info-card">
                <img src="Screenshot 2024-09-01 143825.png" alt="Info Image">
                <div class="info-text">
                    <p>Hut 8 receives $150 million investment to advance artificial...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="bottom-nav">
        <div class="nav-item active">
<a href="index.html">            <img src="Screenshot 2024-09-01 143858.png" alt="Home">
            <p style="color: violet;">Home</p>
   </a>     </div>
        <div class="nav-item">
    <a href="product.html">        <img src="Screenshot 2024-10-09 205520.png" alt="Product">
            <p>Product</p>
      </a>  </div>
        <div class="nav-item">
          <a href="wallet.html">  <img src="Screenshot 2024-10-09 204924.png" alt="Wallet">
            <p>Wallet</p>
        </a></div>
        <div class="nav-item">
      <a href="my.html">      <img src="Screenshot 2024-10-11 093137.png" alt="My">
            <p>My</p>
      </a>  </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
