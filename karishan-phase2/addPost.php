<?php
                
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "phptut";

        $conn = mysqli_connect($servername,$username,$password,$database);

        if (!$conn)
        {
            die("Failed to connect".mysqli_connect_error());

        }
        else{
            echo "connection successfull";
        }


        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = date('Y-m-d');
        $time = date('H:i:s');

        

        $query = "INSERT INTO blog_entries (entry_date,entry_time,entry_title, entry_content) VALUES ( '$date','$time','$title', '$content')";
        $result = mysqli_query($conn, $query);
        header('Location: viewBlog.php');

?>

