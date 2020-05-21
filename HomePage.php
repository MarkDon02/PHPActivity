<!DOCTYPE html>
<?php
require_once 'Authentication.php';
?>
<html>
<header>
    <?php
    include 'styles.php';
    include 'scripts.php';
    ?>
</header>

<body data-gr-c-s-loaded="true">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="RegistrationPage.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SearchPage.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ModifyPage.php">Modify</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Logout.php">Logout</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <button id="logoutButton" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </div>
        </div>
    </nav>
    <br><br>
    <h1> HELLO BRUV! </h1>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php
    include 'endscripts.php';
    ?>
</body>

</html>