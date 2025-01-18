<?php
session_start();
include('assets/php/connect.php');

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoundIt!</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!--ICONS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
        <!-- Header -->
        <header>
            <nav class="nav">
                <a href="home.html" class="nav_logo">FoundIt!</a>
        
                <ul class="nav_items">
                    <li class="nav_item">
                        <a href="home.html" class="nav_link">Home</a>
                        <a href="find.html" class="nav_link">Find</a>
                        <a href="post.html" class="nav_link">Post</a>
                        <a href="history.html" class="nav_link">History</a>
                        </li>
                </ul>
                <button class="button" id="form-open">Log Out</button>
            </nav>
        </header>
        <!-- FIND -->
        <section class="find">
            <div class="title">
                <h1>Lost Items</h1>
            </div>
            
            <div class="item_container">
                <div class="item">
                    <img src="key.jpg" alt="">
                    <div class="item_content">
                        <h1>Locker Key</h1>
                        <p><i class="fa-solid fa-location-dot"></i> Hallway</p>
                        <p><i class="fa-solid fa-clock"></i> 1/15/2025 at 18:45:08</p>
                        <p><i class="fa-solid fa-user"></i> sisagirl@gmail.com</p>
                        <button class="claim_btn">Claim</button>
                    </div>
                </div>

                <div class="item">
                    <img src="ballpen.jpg" alt="">
                    <div class="item_content">
                        <h1>Ballpen</h1>
                        <p><i class="fa-solid fa-location-dot"></i> Hallway</p>
                        <p><i class="fa-solid fa-clock"></i> 1/15/2025 at 18:45:08</p>
                        <p><i class="fa-solid fa-user"></i> sisagirl@gmail.com</p>
                        <button class="claim_btn">Claim</button>
                    </div>
                </div>

                <div class="item">
                    <img src="shoes.jpeg" alt="">
                    <div class="item_content">
                        <h1>Shoes</h1>
                        <p><i class="fa-solid fa-location-dot"></i> Hallway</p>
                        <p><i class="fa-solid fa-clock"></i> 1/15/2025 at 18:45:08</p>
                        <p><i class="fa-solid fa-user"></i> sisagirl@gmail.com</p>
                        <button class="claim_btn">Claim</button>
                    </div>
                </div>

                <div class="item">
                    <img src="shoes.jpeg" alt="">
                    <div class="item_content">
                        <h1>Shoes</h1>
                        <p><i class="fa-solid fa-location-dot"></i> Hallway</p>
                        <p><i class="fa-solid fa-clock"></i> 1/15/2025 at 18:45:08</p>
                        <p><i class="fa-solid fa-user"></i> sisagirl@gmail.com</p>
                        <button class="claim_btn">Claim</button>
                    </div>
                </div>

                <div class="item">
                    <img src="shoes.jpeg" alt="">
                    <div class="item_content">
                        <h1>Shoes</h1>
                        <p><i class="fa-solid fa-location-dot"></i> Hallway</p>
                        <p><i class="fa-solid fa-clock"></i> 1/15/2025 at 18:45:08</p>
                        <p><i class="fa-solid fa-user"></i> sisagirl@gmail.com</p>
                        <button class="claim_btn">Claim</button>
                    </div>
                </div>

                <div class="item">
                    <img src="shoes.jpeg" alt="">
                    <div class="item_content">
                        <h1>Shoes</h1>
                        <p><i class="fa-solid fa-location-dot"></i> Hallway</p>
                        <p><i class="fa-solid fa-clock"></i> 1/15/2025 at 18:45:08</p>
                        <p><i class="fa-solid fa-user"></i> sisagirl@gmail.com</p>
                        <button class="claim_btn">Claim</button>
                    </div>
                </div>

                <div class="item">
                    <img src="shoes.jpeg" alt="">
                    <div class="item_content">
                        <h1>Shoes</h1>
                        <p><i class="fa-solid fa-location-dot"></i> Hallway</p>
                        <p><i class="fa-solid fa-clock"></i> 1/15/2025 at 18:45:08</p>
                        <p><i class="fa-solid fa-user"></i> sisagirl@gmail.com</p>
                        <button class="claim_btn">Claim</button>
                    </div>
                </div>

                <div class="item">
                    <img src="shoes.jpeg" alt="">
                    <div class="item_content">
                        <h1>Shoes</h1>
                        <p><i class="fa-solid fa-location-dot"></i> Hallway</p>
                        <p><i class="fa-solid fa-clock"></i> 1/15/2025 at 18:45:08</p>
                        <p><i class="fa-solid fa-user"></i> sisagirl@gmail.com</p>
                        <button class="claim_btn">Claim</button>
                    </div>
                </div>

            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

</body>
</html>