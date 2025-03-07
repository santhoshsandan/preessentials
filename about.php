<?php include('header.php');?>
<body style="background-image:url(img/about.jpg);background-repeat: no-repeat;background-size: 100% 100%;">
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <!--Intro-->
  <div id="intro">
      <div id="about"><h1 class="text-align-center" style="padding-top:30px;padding-bottom:0px;color: #46733C!important;font-weight:normal;font-size:80px;">About Us</h1></div>
      <div class="container" style="margin-top:50px;color:#000!important;background-color:rgba(255,255,255,0.6);padding:40px;text-align:justify;border-radius:10px;">
          <div class="row">
              <div class="col-lg-12 animated zoomIn Slow">
                <p>Founded in 2012, PerC Essentials Incorporated offers a range of specialty cosmetic ingredients to the personal care industry. PerC Essentials continues to set new standards in the cosmetics industry through quality, commitment and a proven track record.</p>

                  <p>PerC Essentials brings personal care into every partnership as well. We work closely with our customers right from understanding their needs to creating innovative solutions in proactive ways. We work closely with a carefully selected group of partners from across the globe to provide innovative and market leading ingredients to our customers. With our strengths in global sourcing, we are able to bring the latest in new product innovations allowing our customers to be at the forefront of cutting edge technology.</p>

                  <p><b style="color:#38bc1c;font-weight:bold;">Products</b></p>

                  <p>Our wide range of unique products brings flexibility and versatility in product formulations. The range includes Actives, Powders, Emollients, Natural Oils, Extracts as well as a number of sustainable specialty ingredients.</p>

                  <p><b style="color:#38bc1c;font-weight:bold;">Partners</b></p>

                  <p>Our partners are at the core of our business growth. We are proud of our partners and offer technical expertise to our customers to overcome challenges in formulating and developing new products. We are committed to building long-term relationships with our customers with dedicated technical support.</p>

                  <p><b style="color:#38bc1c;font-weight:bold;">Vision</b></p>

                  <p>Our vision is to become a one-stop source of quality specialty ingredients to our customers.</p>
        </div>
        </div>
      </div>

    </div><br><br>

  <!--End of Intro-->

  <!--Footer-->
  <?php include('footer.php');?>
    <!--End of Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/mdb.min.js"></script>
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>
  </body>
</html>
