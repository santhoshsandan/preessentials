<?php include('header.php');?>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <!--Intro-->
  <div id="intro">
      <div id="radiant"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;">PUREWHITE™</h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">

              <img src="img/radiant/purewhite-1.jpg" class="img-thumbnail" width="100%"/>
              <img src="img/radiant/purewhite-2.jpg" class="img-thumbnail" width="100%"/>




            </div>
            <div class="col-lg-3 animated zoomIn Slow">
              <img src="img/logo-color.png" width="100%"/>
              <?php include('for.php');?>
            </div>
          </div>
      </div>

    </div><br>

  <!--End of Intro-->

  <!--Footer-->
  <footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <!-- <h4>Heading 1</h4> -->
          <p><ul class="list-unstyled" style="font-size:18px!important;">
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html#partners">Partners</a></li>
            <li><a href="index.html#applications">Applications</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="#applications">Properties</a></li>
            <li><a href="#applications">Product Finder</a></li>
            <li><a href="#applications">Contact Us</a></li>
            <li><a href="#">Success Stories</a></li>


          </ul></p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Contact Us</h4>

          <p><b>Perc Essentials</b><br>
          413 Whitney avenue, Unit B<br>Hamilton ON<br>L9B 0G6<br>Canada</p>
          <p>Tel : <a href="tel:12899233354" style="font-size:18px;">1 289 923 3354</a></p>
          <p>Email : <a href="mailto:info@percessentials.com" style="font-size:18px;">info@percessentials.com</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
    </div>
  </div><br>
  <div class="row">
    <div class="col-md-12 copy">
      <p class="text-center">&copy; Copyright 2020 - Perc Essentials. All rights reserved.</p>
    </div>
  </div>


  </div>
  </div>
</footer>
    <!--End of Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/mdb.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
      $('#myTable').DataTable({
        responsive: true,
              "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
          } );
      } );
          </script>
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
