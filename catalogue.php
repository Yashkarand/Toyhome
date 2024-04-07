<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Catalogue</title>
   <link rel="stylesheet" href="style.css">
   <!---slideshow--->
      <link rel="stylesheet" href="slideshow.css">
      <!----font--->
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lemon&family=Pacifico&family=Poppins:ital@1&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   
   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script>
     function loadContent() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "prod.php", true);
  xhttp.send();
}
</script>
  <script>
     function loadContent1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "prod1.php", true);
  xhttp.send();
}
</script>
     <script>
     function loadContent2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "prod2.php", true);
  xhttp.send();
}
</script>
  
</head>

<body>
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
 <div class="logo"><img src="/IPweb/logo.png" class="logo"></div>
</header>


 <section id="catalogue">
   <div class="cat">
     <h1>Catalogue</h1>
     <h2>Go ahead and choose toys and books!</h2>
  
   </div>
    <div class="search">
           
      <input class="srch" type="search" name="search" placeholder="Search toys and books...">
      <a href="#"><button class="btn">Search</button></a>
    </div>
   
    <!----
     <div class="dropdown">
   <select name="" id="cat" type="select" onselect="loadContent()">
     <option value="1">categories</option>
     <option value="2">all</option>
     <option value="3">toys</option>
     <option value="4">books</option>
     <option value="5">flashcards</option>
   </select>
   </div>---->
    <!---aaaa
ul><h3>category</h3>
    <li>All</li>
    <li><a href="prod.html">Toys</a></li>
     <li>Books</li>
     <li>Flashcards</li>
    </ul></div>
    
    <div class="subcategory"><ul><h3>subcategory</h3>
    <li>All</li>
    </ul></div>
    ----->

    <div class="Age"><ul><h3>Age Group</h3>
    <li>0-3y</li>
    <li>3-5y</li>
     <li>5-7y</li>
     <li>7-9y</li>
     <li>9-11y</li>
     <li>11-13y</li>
    </ul></div>


   
 <div class="category"> <ul> <h3>Category </h3></ul>
    <div id="content">
      <button type="button" onclick="loadContent()" class="b">Toys</button>
      <button type="button" onclick="loadContent1()" class="b">books</button>
      <button type="button" onclick="loadContent2()" class="b">Flashcards</button></div>
    </div>
    
         <!-- Slideshow container -->
  <section class="slide">
   <div class="slideshow-container">
   
     <!-- Full-width images with number and caption text -->
     <div class="mySlides fade">
       <div class="numbertext">1 / 3</div>
       <video src="/v.mp4"  width="100%" height="50%" controls>
       
     </div>
   
     <div class="mySlides fade">
       <div class="numbertext">2 / 3</div>
       <img src="/IPweb/img2.jpg" style="width:100%">
       
     </div>
   
     <div class="mySlides fade">
       <div class="numbertext">3 / 3</div>
       <img src="/IPweb/img3.jpg" style="width:100%">
       
     </div>
   
     <!-- Next and previous buttons -->
     <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
     <a class="next" onclick="plusSlides(1)">&#10095;</a>
   </div>
   <br>
   
   <!-- The dots/circles -->
   <div style="text-align:center">
     <span class="dot" onclick="currentSlide(1)"></span>
     <span class="dot" onclick="currentSlide(2)"></span>
     <span class="dot" onclick="currentSlide(3)"></span>
   </div>
    </section>
     <footer class="foot" >
     <p><h2>Links:</h2>
     <ul>
     <li><a href="index.php">HOME</a></li><br>
      <li><a href="aboutus.php">ABOUT US</a></li><br>
      <li><a href="catalogue.php">CATALOUGE</a></li><br>
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
   <script src="main.js"></script>
</body>

</html>