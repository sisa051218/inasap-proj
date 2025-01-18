<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoundIt!</title>
    <link rel="stylesheet" href="style1.css">
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

         <!-- HOME -->
         <section class="home">
            <div class="home_container">
                <div class="title">
                    <h1>Welcome to FoundIt!</h1>
                </div>

                <div class="services">
                    <div class="card">
                        <div class="icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <h2>Find Items</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quis impedit quas maiores atque totam dolorem non veniam.</p>
                        <a href="find.html" class="button">Find</a>
                    </div>

                    <div class="card">
                        <div class="icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <h2>Post Item</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quis impedit quas maiores atque totam dolorem non veniam.</p>
                        <a href="post.html" class="button">Post</a>
                    </div>

                    <div class="card">
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <h2>User History</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quis impedit quas maiores atque totam dolorem non veniam.</p>
                        <a href="history.html" class="button">View</a>
                    </div>
                </div>
            </div>
         </section>
</body>
</html>