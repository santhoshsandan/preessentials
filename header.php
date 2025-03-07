<?php include ("config.php");
session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>PerC Essentials</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <style>
        body {
            margin: 0;
            padding: 0;
        }


  .carousel-inner {
    height: 85vh; /* full screen */
  }
  .carousel-inner > .item > img {
    width: 100%; /* to make smaller images look full */
  }
  @media (max-width: 767px){
    .carousel-inner{
        height: 32vh;
    }
}


    </style>
    <link rel="stylesheet" href="css/all.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mdb.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="icon" href="img/icon.png" type="image/gif" sizes="16x16">
    <style>
    html {
  scroll-behavior: smooth;
}
        /* Chart.js */
/* @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;} */
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.min.js"></script>
    <script src="app.js"></script>
<!-- <script type="text/javascript" src="./js/smoothscroll.js"></script> -->
    </head>
    <body ng-app="myApp" ng-controller="myCtrl">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="main-nav" style="padding-bottom:0px;background-color:#fff!important;color:#000!important;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="width:300px;"><img src="img/logo.png" alt="Perc Essentials Logo" width="100%" style="padding:10px;"/></a>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#partners">Partners</a>
              </li>

  <li class="nav-item">
    <a class="nav-link" href="index.php#applications">Applications</a>
  </li>

              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>

              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Partners
                </a>
                <div class="dropdown-menu" style="margin-left: 0px;margin-top:35px;">
                  <a class="dropdown-item" href="oats.php"><img src="img/icon.png"/> Oat Cosmetics UK</a>
                  <a class="dropdown-item" href="convestro.php"><img src="img/icon.png"/> Covestro USA</a>
                  <a class="dropdown-item" href="saint_gobain.php"><img src="img/icon.png"/> Saint Gobain advanced Ceramics <br>- Personal care division.USA</a>

                  <a class="dropdown-item" href="innovacos.php"><img src="img/icon.png"/> Innovacos UK</a>
                  <a class="dropdown-item" href="fq_speciality.php"><img src="img/icon.png"/> FQ Speciality Mexico</a>
                  <a class="dropdown-item" href="abc_nanotech.php"><img src="img/icon.png"/> ABC Nanotech Korea</a>
                  <a class="dropdown-item" href="radiant.php"><img src="img/icon.png"/> Radiant Korea</a>
                </div>
              </li> -->


              <li class="nav-item">
                <a class="nav-link" href="categories1.php">Categories</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="product_finder.php">Products</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
              </li>

              <li class="nav-item">
              <div class="searchBox" style="height: 50px;background-color: #fffde9;border-radius: 40px;padding: 5px;">

                <input class="searchInput" list="searchbox" formaction=""type="text" ng-model="searchbox" name="searchbox" placeholder="Search">
                <ul class="list-group float-right" ng-show="searchbox" style="position: absolute;right: 23px;top: 100px;width: 250px;height: 300px !important;overflow: auto;">
                <li class="list-group-item list-group-item-action list-group-item-light" ng-repeat="x in product | filter: searchbox">

                <p><a href="{{ x.url }}" style="color: lightslategrey;"><b>{{ x.title }}</b></a></p>

                </li>
                </ul>

                <!-- <datalist id="searchbox" style="height:300px !important;">
                  <option ng-repeat="x in cars_list" value="{{x.title}}"><a href="{{x.url}}">{{x.title}}</a></option>
                </datalist> -->
                <button class="searchButton" href="#" style="border:none;">
                  <i class="fas fa-search"></i>
                </button>

            </div>
          </li>
          </ul>
          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </nav>
</body>
</html>
