<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
-->
</header>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="SearchPage.php">Search</a></li>
                    <li><a href="RegistrationPage.php">Register</a></li>
                    <li><a href="ModifyPage.<?php  ?>">Modify</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-xl border border-bottom rounded-sm" style="width:800px; margin:0 auto;">
        <form>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>First name</label>
                    <input type="text" class="form-control" name="FirstName" placeholder="Enter Firstname" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Last name</label>
                    <input type="text" class="form-control" name="LastName" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Course</label>
                    <input type="text" class="form-control" name="Course" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Gender</label>
                    <select class="custom-select" name="Gender" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Age</label>
                    <input type="text" class="form-control" name="Age" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Username</label>
                    <input type="text" class="form-control" name="Username" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="Password" required>
                </div>
            </div>
            <button class="btn btn-dark rounded-pill" type="submit">Register</button>
        </form>
    </div>
</body>

</html>