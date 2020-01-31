<?php 
    session_start();
    include "../db.php";
    include "../layouts/header.php";
?>


<form action="addblog.php" method="POST" role="form">

    <div class="form-group">
        <label for="">Name</label>
        <input name="title" type="text" class="form-control" id="" placeholder="Enter title">
    </div>

    <div class="form-group">
        <label for="">Name</label>
        <input name="author" type="text" class="form-control" id="" placeholder="Enter author">
    </div>

    <div class="form-group">
        <label for="">Name</label>
        <input name="body" type="text" class="form-control" id="" placeholder="Enter body">
    </div>

    <button name="btn_add" type="submit" class="btn btn-primary">Submit</button>
</form>


<?php
    include "../layouts/footer.php";
?>



