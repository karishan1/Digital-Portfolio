<html>
    <head>
        <link rel = "stylesheet" href = "reset.css">
        <link rel = "stylesheet" href = "blog.css?v=<?php echo time(); ?>">
        <link rel = "stylesheet" href = "mobileBlog.css?v=<?php echo time(); ?>">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <script src="blog_entry.js"></script>


    </head>
    <body>
        

        <div class="grid-container">
            <div class="header">
                <header>
                    <nav>
                        <ul>
                            <li><a href = "index.php">Home</a></li>
                            <li> <a href = "experience.html">Experience</a> </li>
                            <li><a href = "contact.html">Contact</a></li>
                            <li><a href = "login.html">Blog</a></li>
                            <li><a href = "viewBlog.php">View Blogs</a></li>
                        </ul>
        
                    </nav>
                </header>
            </div>

            <div class = "heading1">
                <h1>Blog</h1>

            </div>

            <div class = "form2">

                <form action="addPost.php" method="post">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required><br><br>

                    <label for="content">Content:</label><br><br>
                    <textarea id="content" name="content" required rows="10" cols="50"></textarea><br><br>

                    <input type="submit" value="Publish" onclick="preventDefault()">
                    <input type="button" value="Clear" onclick = "clearFields()">

                </form>
            </div>


            <div class = "logout">
                <form action="logout.php" method="post">
                    <input type="submit" value="Logout">
                </form>
            </div>

            

    </body>