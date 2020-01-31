<?php
    session_start();
    include "../layouts/header.php";
?>


<form action="../loginuser.php" method="POST" role="form">
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" name="username" id="" placeholder="Enter username">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" id="" placeholder="Enter password">
    </div>

    <button name="login_btn" type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    include "../layouts/footer.php";
?>
