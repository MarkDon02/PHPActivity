<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION["Authorize"])){
        header("Location: HomePage.php");
    }
?>
<html>
<header>
    <?php
    include 'styles.php';
    include 'scripts.php';
    ?>
</header>

<body>
    <!-- <form id="registerUser" action="Login.php" method="POST">
            <input type="text" name="userName" placeholder="Enter Username"/>
            <input type="password" name="userPass" placeholder="Enter Password"/><br>
            <button type="submit">Login</button>
        </form>
		<br> -->
    <br>
    <div class="container-xl border border-bottom rounded-sm" style="width:800px; margin:0 auto;">
        <form id="formLogin" action="Login.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input id="UsernameHT" type="text" class="form-control" name="UsernameHT" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input id="PasswordHT" type="password" class="form-control" name="PasswordHT"
                    placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-dark rounded-pill" id="submitLogin">Submit</button>
        </form>
    </div>
</body>
<script type="text/javascript" src="main.js"></script>

</html>