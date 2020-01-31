<?php
    include "db.php";
    include "layouts/header.php";
    include "updateblog.php";

    if (isset($_POST['edit_btn'])) {
        $id = $_POST['edit_id'];

        $query = "SELECT * FROM blogtable WHERE id='$id'";
        $run_query = mysqli_query($connection, $query);  

        if (mysqli_num_rows($run_query) > 0) { ?>
           <?php while ($row = mysqli_fetch_assoc($run_query)) { ?>

        <form action="updateblog.php" method="POST" role="form">
        <div class="form-group">
            <label for="">Name</label>
            <input name="uptitle" type="text" class="form-control" id="" value="<?php echo $row['title'] ?>" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label for="">Name</label>
            <input name="upauthor" type="text" class="form-control" id="" value="<?php echo $row['author'] ?>" placeholder="Enter author">
        </div>

        <div class="form-group">
            <label for="">Name</label>
            <input name="upbody" type="text" class="form-control" id="" value="<?php echo $row['body'] ?>" placeholder="Enter body">
        </div>

        <div class="form-group">
            <input name="upid" type="hidden" class="form-control" id="" value="<?php echo $row['id'] ?>" placeholder="Enter body">
        </div>

        <button name="btn_update" type="submit" class="btn btn-primary">Submit</button>
        </form>

          <?php  }
        }

    } include "layouts/footer.php";
?>