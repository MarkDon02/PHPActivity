<!DOCTYPE html>
<html>
<header>
    <?php
    include 'styles.php';
    include 'scripts.php';
    ?>
</header>

<body>
    <!-- <form id="registerUser" action="Registration.php" method="POST">
            <input type="text" name="FirstName" placeholder="Enter Firstname"/>
            <input type="text" name="LastName" placeholder="Enter Lastname"/><br>
            <input type="text" name="Age" placeholder="Enter Age"/><br>
            <select id="Gender" name="Gender">
                <option>----</option>>
                <option>Male</option>
                <option>Female</option>
            </select><br>
            <input type="text" name="Course" placeholder="Enter Course Here!"><br>
            <input type="text" name="Username" placeholder="Enter Username"/>
            <input type="password" name="Password" placeholder="Enter Password"/><br>
            <input type ="submit" id="SubmitInfo"/>
    </form> -->
    <<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Homepage.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SearchPage.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ModifyPage.php">Modify</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <button id="logoutButton" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </div>
        </div>
    </nav>
    <br><br><br><br>
    <div class="container-xl border border-bottom rounded-sm" style="width:800px; margin:0 auto;">
        <form id="formReg" action="Registration.php" method="POST">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Firstname</label>
                    <input type="text" class="form-control" id="FirstNameReg" name="FirstNameReg" placeholder="Enter Firstname" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Lastname</label>
                    <input type="text" class="form-control" id="LastNameReg" name="LastNameReg" placeholder="Enter Lastname" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Course</label>
                    <input type="text" class="form-control" id="CourseReg" name="CourseReg" placeholder="Enter your Course" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Gender</label>
                    <select class="custom-select" id="GenderReg" name="GenderReg" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Age</label>
                    <input type="text" class="form-control" id="AgeReg" name="AgeReg" placeholder="Enter Age" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Username</label>
                    <input type="text" class="form-control" id="UserNameReg" name="UserNameReg" placeholder="Enter Preffered Username" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" id="PassWordReg" name="PassWordReg" placeholder="Enter Preffered Password" required>
                </div>
            </div>
            <button class="btn btn-dark rounded-pill" type="submit" id="submitReg">Register!</button>
        </form>
    </div>
</body>
<script type="text/javascript" src="main.js"></script>
</html>