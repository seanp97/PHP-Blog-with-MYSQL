<?php
    session_start();
    include "../db.php";

    if(isset($_POST['btn_add'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $body = $_POST['body'];

        $query = "INSERT INTO blogtable (title, author, body) VALUES ('$title', '$author', '$body')";
        $query_do = mysqli_query($connection, $query);

        if ($query_do) {
            header("Location: index.php");
        }
        else {
            echo "Blog not added";
        }
    }
?>