<?php 

    include "db.php";

    if (isset($_POST['delete_btn'])) {
        $deleteid = $_POST['delete_id'];

        $query = "DELETE FROM blogtable WHERE id='$deleteid'";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            header("Location: views/index.php");
        }
        else {
            echo "Not deleted";
        }
    }

?>