<!DOCTYPE html>
<html>
<header>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</header>

<body>
  <!-- <form id="registerUser" action="Login.php" method="POST">
            <input type="text" name="userName" placeholder="Enter Username"/>
            <input type="password" name="userPass" placeholder="Enter Password"/><br>
            <button type="submit">Login</button>
        </form>
		<br> -->
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
          <li><a href="#">Messages</a></li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group input-group">
            <input type="text" class="form-control" placeholder="Search..">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <div class="container-xl border border-bottom rounded-sm" style="width:800px; margin:0 auto;">
    <form id="formLogin" action="Login.php" method="POST">
      <div class="form-group">
        <label>Username</label>
        <input id="userName" type="text" class="form-control" name="userName" placeholder="Enter Username">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input id="userPass" type="password" class="form-control" name="userPass" placeholder="Enter Password">
      </div>
      <button type="submit" class="btn btn-dark rounded-pill" id="submitLogin">Submit</button>
    </form>
  </div>
</body>
<script type="text/javascript" src="main.js"></script>

</html>