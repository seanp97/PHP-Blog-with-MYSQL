<?php
    session_start();
    include "db.php";

    if(isset($_POST['login_btn'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM loginuser WHERE id='2'";
        $runquery = mysqli_query($connection, $query);

        if ($username == "admin" && $password == "password123") {
            echo "Logged in";
            $_SESSION['login'] = "Logged in";
        }
        else {
            echo "Not logged in";
            session_unset();
        }
    }

?>