<?php include('header.php');?>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <!--Intro-->
  <div id="intro">
      <div id="innovacos"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;">PolyAquol LW</h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">
              <!-- <iframe src="doc/bioptimized_guava.pdf" width="100%" height="600px"></iframe> -->
              <!-- <embed src="doc/polyaquol_lw.pdf" type="application/pdf"   height="600px" width="100%"> -->
              <img src="img/innovacos/product/polyaquol_lw.jpg" class="img-thumbnail" width="100%"/>

                <!-- <img src="img/oat_cosmetics1.jpg" alt="Barley Dermiveil" style="width:250px;height:250px;margin-left:15px;float:right;">
                <p>A cost-effective Certified Organic, anti-ageing, anti-irritant, cleanser & moisturiser.</p>

                <p>This fine silky powder has been produced using a unique process, making it extremely easy to use even at low ambient temperatures. The process increases the capability to absorb oil resulting in an excellent active base for creams and lotions without an ‘oily’ feel.</p>
                <p>The availability of beta glucan has been enhanced, which allows Oat COM ORG to exhibit more effective moisturising properties than alternative colloidal oatmeals.</p>
                <p>Oat COM ORG is a natural anti-irritant, that gives a silky smooth feel to the skin. It has good skin buffering properties and is an effective antioxidant. It also demonstrates excellent cleansing properties. This is the first Ecocert Organic Colloidal Oatmeal available.</p>
                <p style="font-weight: 700;">Oat COM is ECOCERT certified</p>
                <p><span style="font-weight: 700;">INCI: </span>Avena Sativa Kernel Flour</p> -->



            </div>
            <div class="col-lg-3 animated zoomIn Slow">
              <img src="img/innovacos-logo.png" width="100%"/>
              <?php include('for.php');?>
            </div>
          </div>
      </div>

    </div><br>

  <!--End of Intro-->

  <!--Footer-->
<?php include('footer.php');?>
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
