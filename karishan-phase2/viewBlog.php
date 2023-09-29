<html>


    <?php
    
        session_start();

        $_SESSION['servername'] = "localhost"; 
        $_SESSION['username'] = "root"; 
        $_SESSION['password'] = ""; 
        $_SESSION['database'] = "phptut"; 


        $conn = mysqli_connect($_SESSION['servername'],$_SESSION['username'],$_SESSION['password'],$_SESSION['database']);

        $query = "SELECT * FROM blog_entries";
        $_SESSION['all_entries'] = $conn->query($query);

        $list_entry_title = array();
        $list_entry_title_sorted = array();

        $list_entry_date = array();
        $list_entry_date_sorted = array();

        $list_entry_time = array();
        $list_entry_time_sorted = array();

        $list_entry_content = array();
        $list_entry_content_sorted = array();



    ?>


    <head>
        <link rel = "stylesheet" href = "reset.css">
        <link rel = "stylesheet" href = "viewBlog.css?v=<?php echo time(); ?>">
        <link rel = "stylesheet" href = "mobileBlog.css?v=<?php echo time(); ?>">

        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

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


            <div class = "monthForm">
                <form method="POST" name="monthlyForm">

                    <label for="Month">Select Month:</label>

                    <select name="month">
                        <option value="">All Months</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                                    
                    </select>

                    <input type="submit" name="submit" value="Submit">


                </form>

            </div>

            <?php
            


            
            if (isset($_POST["month"]))
            {
                $selectedMonth = $_POST["month"];

                if ($selectedMonth != "")
                {
                    $query = "SELECT * FROM blog_entries WHERE MONTH(entry_date) = '$selectedMonth'";
                    $_SESSION['all_entries'] = $conn->query($query);
                }


            }
            
            else
            {
                $query = "SELECT * FROM blog_entries";
                $_SESSION['all_entries'] = $conn->query($query);
            }


            while($row = mysqli_fetch_assoc($_SESSION['all_entries']))
            {
                $list_entry_title[] = $row["entry_title"];
                $list_entry_date[] = $row["entry_date"];
                $list_entry_time[] = $row["entry_time"];
                $list_entry_content[]= $row["entry_content"];
                
            }

            for ($i = count($list_entry_title) - 1; $i >= 0; $i--)
            {
                $list_entry_title_sorted[] = $list_entry_title[$i];
                $list_entry_date_sorted[] = $list_entry_date[$i];
                $list_entry_time_sorted[] = $list_entry_time[$i];
                $list_entry_content_sorted[] = $list_entry_content[$i];
            }



            for ($i = 0;$i<=count($list_entry_title_sorted)-1;$i++)
            {

                
            ?>




            <div class = "post">
                <div class  = "container">
                    <div>
                        <p class = "title"> <?php echo $list_entry_title_sorted[$i] ?> </p>
                    </div>
                    <div>
                        <p class = "date"> <?php echo  $list_entry_date_sorted[$i] ?> </p>
                    </div>
                    <div>   
                        <p class = "time"> <?php echo  $list_entry_time_sorted[$i] ?> </p>
                    </div>
                
                </div>
                
                
                <hr>
                <p class = "content"> <?php echo  $list_entry_content_sorted[$i] ?> </p>
                
                
            </div>





            <?php

            }
            ?>

        

    </body>
</html>
 