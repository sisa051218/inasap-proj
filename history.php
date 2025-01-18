<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoundIt!</title>
    <link rel="stylesheet" href="style4.css">
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

    <!--HISTORY-->
    <section class="history">
        <div class="table">
            <div class="table-header">
                <h2>User's History</h2>
            </div>

            <div class="table-sections">
                <table>
                    <thead>
                        <tr>
                            <th>Number</th>
                            <th>Item</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Date and Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="key.jpg" alt=""></td>
                            <td>Locker Keys</td>
                            <td>Hallway</td>
                            <td>09/16/2025 10:47 pm</td>
                            <td>
                                <button><i class="fa-solid fa-pen-to-square"></i></button>
                                <button><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>