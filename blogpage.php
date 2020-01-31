<?php
    session_start();
    include "../db.php";
    //include "../layouts/header.php";
    include "../edit.php";

    $query = "SELECT * FROM blogtable";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_num_rows($query_run) > 0) { ?>
        <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Body Post</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php while($row = mysqli_fetch_assoc($query_run)) { ?>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo $row['body']; ?></td>
                <td>
                    <form action="../edit.php" method="POST">
                        <input type="hidden" name ="edit_id" value="<?php echo $row['id'] ?>" />
                        <button name="edit_btn" type="submit" class="btn btn-info">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="../delete.php" method="POST">
                        <input type="hidden" name ="delete_id" value="<?php echo $row['id'] ?>" />
                        <button name="delete_btn" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php
        } ?>
            </tbody>
        </table>
        </div>

  <?php  } include "../layouts/footer.php"; ?>