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

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="HomePage.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="RegistrationPage.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Search</a>
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
    <br><br><br>
    <form id="formSearch" action="Search.php" method="POST">
        <div class="input-group mb-3 style=" style="width:800px; margin:0 auto;">
            <input type="text" class="form-control" placeholder="Student's Full Name [e.g John Doe]"
                aria-label="Student's Name  [e.g John Doe]" aria-describedby="submitSearch" id="inputSearch"
                name="inputSearch">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="submitSearch">Search</button>
                <button class="btn btn-outline-secondary" type="submit" id="submitSearchAll">Search All</button>
            </div>
        </div>
    </form>
    <div>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">UserID#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Course</th>
                </tr>
            </thead>
            <tbody id="populateTable">
            </tbody>
        </table>
    </div>
</body>
<script type="text/javascript" src="main.js"></script>
</html>