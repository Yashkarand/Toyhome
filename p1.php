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
  <script>
    function loadContent3() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "mssg.html", true);
  xhttp.send();
}
  </script>
  
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
<div class="item1">
  <img src="/IPweb/toy1.png" class="popupp">
  <h2>Code: TA1205</h2>
  <h3>Pop up pirate</h3>
  <p>STATUS: AVAILABLE <br>
  NOTE: The product will be reserved if you have registered yourself on the website 
    
  </p>
  

  <button type="button" onclick="loadContent3()" class="reserve">Reserve</button>
  <div id="content">
  <!-- Content will be loaded here -->
</div>
</div>