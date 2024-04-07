
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title>Registration form</title>
</head>

<body>
  <div id="loginbg">
<header>  
 <nav class="navbar navbar-inverse">
 
    <div class="container-fluid">
 
 
 
 
      <ul class="nav navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="catalogue.php">CATALOUGE</a></li>
        <li><a href="plans.php">PLANS</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right ">
 
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="register1.php"><span class="glyphicon glyphicon-user">Sign Up</span></a></li>
 
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> LOG IN</span></a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-out"> LOG out</span></a></li>
      </ul>
    </div>
  </nav>
 <div class="logo"> 
     <img src="/IPweb/logo.png" class="logo">
     </div>
</header>
<section>
  <br><br><br>
  <div class="regform">
    
    <img src="/IPweb/profile.jpg" class="profilee">
    <h2>User Registration</h2>
<form name="Registration2" action="register.php" method="post">
  <input type="text" name="firstname" class="signin_first" placeholder="Enter first name" required =""><br><br>
  <input type="text" name="lastname" class="signin_last" placeholder="Enter last name" required =""><br><br>
  <input type="email" name="email" class="signin_email" placeholder="Enter Email" required=""><br><br>
  <input type="password" name="password" class="signin_pass" placeholder="Enter password" required=""  >
  <button class="btt" type="submit">Sign Up</button>
  <p>Please Enter valid email</p>


  
  <p>Already have an account?
  <a href="login.php">Log in!</a></p>
  
</form>
</div>
</section>
</div>

<!---footer-->
  <footer class="foot" >
     <p><h2>Links:</h2>
     <ul>
     <li><a href="index.php">HOME</a></li><br>
      <li><a href="aboutus.php">ABOUT US</a></li><br>
      <li><a href="catalogue.php">CATLOUGE</a></li><br>
      <li><a href="plans.php">PLANS</a></li><br>
      <li><a href="contact.php">CONTACT</a></li><br>
      <li><a href="login.php">LOG IN</a></li>
     </ul>
     <p>
       <h3>Address:</h3><span>Cradle toys and books library shop no.10<br> ground floor Railway station road.<br> mumbai:412 506</span>
       <h3>Email us:</h3>cradle@gmail.com
       <h3>Contact us:</h3>+9898242466
       <h3>Log in with</h3></p>
 <div class="icon">
           <a href="https://m.facebook.com/?wtsid=rdr_0XAzZzzs3snUgd1Bt"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="https://www.instagram.com/accounts/onetap/?next=%2F"><ion-icon name="logo-Instagram"></ion-icon></a>
       
          <a href="https://twitter.com/i/flow/login"><ion-icon name="logo-Twitter"></ion-icon></a>
       
          <a href="https://g.co/kgs/cKonLW5"><ion-icon name="logo-Google"></ion-icon></a>
     </div>
     
   </footer>
  
 
 

 <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"> </script>
</body>
</html>