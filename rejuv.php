<?php include('header.php');?>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <!--Intro-->
  <div id="intro">
      <div id="oats"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;"><span style="font-weight:bold;">Rejuvaveen</span><i></i></h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">

            
            
            <img src="img/abc_nanotech/re.jpg" alt="Barley Dermiveil" style="width:90%;height:1000px;">
                
                <img src="img/abc_nanotech/rej1.jpg" alt="Barley Dermiveil" style="width:100%;height:400px;">
                <p style="font-weight: 700; font-size: 30px !important;">SKIN BENEFITS & MECHANISMS OF ACTION</p>
                
                <ul>
                <p style="font-weight: 700;">Fights Against Stress-Induced Skin Thinning and Boosts Cell Renewal</p>
                    <li>By maintaining the extracellular matrix integrity (↗ DSG3).</li>
                    <li>By<span style="font-weight: 700;">maintaining the stratum corneum integrity.</span> (Increasing stratum corneum and
                    epidermis thickness, and corneocyte layers).</li>
                    <li>By forming a<span style="font-weight: 700;">natural moisture barrier</span> without weighing down the hair.</li>

                   
                </p>
                <p style="font-weight: 700;">Protects the Skin Against Oxidative Stress</p>
                    <li>By counteracting oxidative damage (↗SOD1&2, ↗ARNT, ↗MT2A, ↗NQO1).</li>
                    <li>By<span style="font-weight: 700;">protecting the integrity of the skin barrier.</span></li>
                </p>
                <p style="font-weight: 700;">Counteracts Dry Desquamation to Provide Glowing Skin</p>
                    <li>By enhancing skin hydration (↗ PPARD).</li>
                    <li>By counteracting<span style="font-weight: 700;">flaky and dry skin. </span></li>
                </p>
                <p style="font-weight: 700;">Improves Skin Smoothness to Delay the First Signs of Skin Ageing and to Result in
                an Even Skin Tone</p>
                    <li>By<span style="font-weight: 700;">reducing skin roughness.</li>
                    <li>By diminishing the appearance of fine lines and wrinkles.</li>
                    <li>By maintaining normal ageing (↗HNRND, ↗SIRT1).</li>

                </p>
              
            </div>
           
            <div class="col-lg-3 animated zoomIn Slow">
              <img src="img/oat_cosmetics.png" width="70%"/>
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
