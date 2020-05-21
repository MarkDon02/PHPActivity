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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="SearchPage.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Modify</a>
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
    <br><br><br><br>
    <div style="width:800px; margin:0 auto;">
        <form>
            <div class="input-group mb-3 style=" style="width:800px; margin:0 auto;">
                <input type="text" class="form-control" placeholder="Student's Full Name" aria-label="Student's Full Name" aria-describedby="submitSearchUp" id="inputSearchUp" name="inputSearchUp">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="submitSearchUp">Search</button>
                </div>
            </div>
        </form>
    </div>
    <br><br>
    <div class="container-xl border border-bottom rounded-sm" id="updateDiv" style="width:800px; margin:0 auto; display:none">
        <form id="formUpdate" action="Modify.php" method="POST">
            <input style="display:none" type="text" id="UserIDUp" name="UserIDUp"></input>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Firstname</label>
                    <input type="text" class="form-control" id="FirstNameUp" name="FirstNameUp" placeholder="Enter Firstname" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Lastname</label>
                    <input type="text" class="form-control" id="LastNameUp" name="LastNameUp" placeholder="Enter Lastname" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Course</label>
                    <input type="text" class="form-control" id="CourseUp" name="CourseUp" placeholder="Enter your Course" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Gender</label>
                    <select class="custom-select" id="GenderUp" name="GenderUp" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Age</label>
                    <input type="text" class="form-control" id="AgeUp" name="AgeUp" placeholder="Enter Age" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Username</label>
                    <input type="text" class="form-control" id="UserNameUp" name="UserNameUp" placeholder="Enter Preffered Username" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Password</label>
                    <input type="text" class="form-control" id="PassWordUp" name="PassWordUp" placeholder="Enter Preffered Password" required>
                </div>
            </div>
            <button class="btn btn-dark rounded-pill" type="submit" id="submitUp" data-toggle="modal" data-target="#exampleModal">Update Record</button>
        </form>
    </div>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Confirm student's information?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="confirmReg" type="button" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="main.js"></script>

</html>