<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoundIt!</title>
    <link rel="stylesheet" href="style3.css">
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

    <!--Post-->

    <section class="post">
        <div class="form_container">
            <form action="#">
                <h2>Post Item</h2>

                <div class="form-group">
                    <label for="item-image">Item Image</label>
                    <input type="file" id="item-image" name="item-image" accept="image/*" required>
                </div>
        
                <div class="form-group">
                    <label for="item-name">Item Name</label>
                    <input type="text" id="item-name" name="item-name" placeholder="Enter item name" required>
                </div>
        
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" placeholder="Enter the location where the item was lost" required>
                </div>
        
                <div class="form-group">
                    <label for="date-time">Date and Time</label>
                    <input type="datetime-local" id="date-time" name="date-time" required>
                </div>
        
                <div class="form-group">
                    <label for="contact">Person to Contact</label>
                    <input type="text" id="contact" name="contact" placeholder="Enter your email or phone number" required>
                </div>

                <button type="submit" class="post-btn">Post</button>

            </form>
        </div>
    </section>
</body>
</html>