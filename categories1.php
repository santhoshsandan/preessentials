<?php include('header.php');?>

  <!--Intro--><body style="background-image:url(img/category.jpg);background-repeat: no-repeat;background-size: 100% 100%;">
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <div id="intro" style="z-index:-1;">
      <div><h1 class="text-align-center" style="padding-top:120px;padding-bottom:20px;color: #46733C!important;font-weight:normal;font-size:80px;">Categories</h1></div>
    <div class="container" style="margin-top:50px;">
    <div class="row">
    <div class="col-md-3" style="margin-top:10px;">
    <div class="thumbnail"  style="background-color:#fff;">
      
        <img src="img/categories/3.jpg" alt="Nature" style="width:100%">
        <div class="caption" style="text-align:center;padding:30px 10px;">
          <!-- <p><strong>Product Types</strong></p> -->
          <a href="product_type.php"class="btn btn-success" role="button" style="background-color:#38bc1c!important;font-size: 18px;">Products</a>
        </div>
      
    </div>
  </div>
  <div class="col-md-3" style="margin-top:10px;">
    <div class="thumbnail"  style="background-color:#fff;">
      
        <img src="img/categories/4.jpg" alt="Nature" style="width:100%">
        <div class="caption" style="text-align:center;padding:30px 10px;">
          <!-- <p><strong>Properties</strong></p> -->
          <a href="properties1.php"class="btn btn-success" role="button" style="background-color:#38bc1c!important;font-size: 18px;">Properties</a>
        </div>
      
    </div>
  </div>
  <div class="col-md-3" style="margin-top:10px;">
    <div class="thumbnail"  style="background-color:#fff;">
      
        <img src="img/categories/1.jpg" alt="Nature" style="width:100%">
        <div class="caption" style="text-align:center;padding:30px 10px;">
          <!-- <p><strong>Applications</strong></p> -->
          <a href="applications.php"class="btn btn-success" role="button" style="background-color:#38bc1c!important;font-size: 18px;">Applications</a>
        </div>
      
    </div>
  </div>
  <div class="col-md-3" style="margin-top:10px;">
    <div class="thumbnail" style="background-color:#fff;">
      
        <img src="img/categories/2.jpg" alt="Nature" style="width:100%">
        <div class="caption" style="text-align:center;padding:30px 10px;">
          <!-- <p><strong>Certifications</strong></p> -->
          <a href="certifications.php"class="btn btn-success" role="button" style="background-color:#38bc1c!important;font-size: 18px;">Certifications</a>
        </div>
      
    </div>
  </div>

</div>
      
            



  </div>

    </div>

  <!--End of Intro-->
<br><br>

  <!--Footer-->
  <?php include('footer.php');?>
    <!--End of Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/mdb.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script> -->


<script src="js/app.js"></script>
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
