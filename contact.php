<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="style.css" type="text/css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Stint+Ultra+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
  <style>.carousel-inner > .d-block w-100 > .src { width:100%; height:100px; } </style>
    <title>Sensible Soccer</title>
  </head>
  <body>
    <h1 class="logo" style="text-align: center; background-color: black; color:#00CC00;"><img class="left-align" src="img/logo.png" width="75" height="75" alt="logo">SENSIBLE SOCCER<img class="left-align" src="img/logo.png" width="75" height="75"></h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->

  </head>
  
<nav class="navbar navbar-expand-lg navbar-black bg-dark">
 <!--  <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="programs.html">Programs</a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="calendar.html">Calendar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
 <!--    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<br>
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 style="text-align: center; color: green">CONTACT US</h5>
           <p>Are your players ready to take the next step in their individual development?

Discover more about our programs and send us any questions you may have! Coach Williams or one of our staff will get back to you as soon as possible. Thank you for your interest in our programs!</p>

     
<!-- 
  <nav class="black" role="navigation">
    <div class="nav-default container">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
            <a class="nav-link-js-scroll-trigger" href="index.html">Home</a>
          </li>
            <a class="nav-link-js-scroll-trigger" href="contact.html">Contact</a>
          </li>
        </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 -->

          <form id="contactForm" action=”post.php” method=”post” name="sentMessage" novalidate="novalidate">
            <div class="row">
            <div class="container">
           <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
            </div>
             <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" name="message" required></textarea>
           </div>
             <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
            </div>
       </form>
   </div><!-- 
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <br>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                 <br>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
              </div>
            </div>
          </form> -->
  
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
  <h4>Location:</h4> 

    <p><br>Soccer Sense programs are hosted at Sports City: <br>

       Address: 269 Squankum Road (Rear of Property), Farmingdale, NJ 07727 <br>
        Phone: 732-996-2271</p>
        </div>
      </div>

    </div>
    </div>
    </div>

    </body>
    </html>
