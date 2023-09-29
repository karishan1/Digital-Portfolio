<?php

            session_start();

            $_SESSION['servername'] = "localhost"; 
            $_SESSION['username'] = "root"; 
            $_SESSION['password'] = ""; 
            $_SESSION['database'] = "phptut"; 
        

            $conn = mysqli_connect($_SESSION['servername'],$_SESSION['username'],$_SESSION['password'],$_SESSION['database']);

            if (!$conn)
            {
                die("Failed to connect".mysqli_connect_error());

            }
            else{
                echo "connection successfull";
            }

            $username = $_POST['username'];
	        $password = $_POST['password'];


            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	        $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) != 0) {
                session_start();
                header('Location: addEntry.php');
                exit();
            }
            else{
                header('Location: login.html');
            }
              

              
            

?>