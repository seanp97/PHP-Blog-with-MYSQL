<?php 

    include "db.php";

    if (isset($_POST['btn_update'])) {
        $uptitle = $_POST['uptitle'];
        $upauthor = $_POST['upauthor'];
        $upbody = $_POST['upbody'];
        $upid = $_POST['upid'];

        $query = "UPDATE blogtable SET title = '$uptitle', author = '$upauthor', body = '$upbody' WHERE id='$upid'";
        $runquery = mysqli_query($connection, $query);

        if ($runquery) {
            header("Location: views/index.php");
        }
        else {
            echo "Not updated";
        }
        
    }

?>