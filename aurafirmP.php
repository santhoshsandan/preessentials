<?php include('header.php');?>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <!--Intro-->
  <div id="intro">
      <div id="oats"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;"><span style="font-weight:bold;">aura</span><i>firm P</i></h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">

            
            
            <img src="img/abc_nanotech/pp.jpg" alt="Barley Dermiveil" style="width:100%;height:1000px;">
                
                <img src="img/abc_nanotech/p1p.jpg" alt="Barley Dermiveil" style="width:100%;height:400px;">
                <p style="font-weight: 700; font-size: 30px !important;">SKIN BENEFITS & MECHANISMS OF ACTION</p>


                <p>
                <ul>
                <p style="font-weight: 700;">Maintains and Supports a Healthy Skin Microbiome</p>
                    <li><span style="font-weight: 700;">Increases the biodiversity</span> of the skin microbiota. </li>
                    <li><span style="font-weight: 700;">Maintains the natural ratios </span> of the skin bacteria.</li>
                    <li><span style="font-weight: 700;">Rebalances skin pH.</span> </li>
                   
                </p>
                <p style="font-weight: 700;">Protects the Skin Against the Effects of Environmental Stress</p>
                    <li>Enhances<span style="font-weight: 700;">resistance to oxidative stresses</span>(↗NFE2L2, ↗MT2A, ↗SOD1 & 2).</li>
                    <li><span style="font-weight: 700;">Counteracts oxidative damage</span>(in increasing total antioxidant capacity).</li>
                    <li><span style="font-weight: 700;">Protects against DNA damage</span> and reduces 8-OHdG expression levels.</li>
                   
                </p>
                <p style="font-weight: 700;">Boosts Skin Radiance Resulting in a Glowing Look</p>
                    <li>Helps to<span style="font-weight: 700;">stimulate skin cell regeneration/renewal </span> (↗GSK3B, ↗PPARG).</li>
                    <li><span style="font-weight: 700;">Locks moisture </span> into the skin (↗HAS2).</li>
                </p>
                <p style="font-weight: 700;">Provides Instantly Smoothing Effect</p>
                    <li><span style="font-weight: 700;">Improves skin texture.</span></li>
                    <li><span style="font-weight: 700;"></span> Prevents skin ageing mechanisms (↗MFN2, ↗SIRT1, ↗HNRNPD).</li>
                    <li><span style="font-weight: 700;">Maintains extracellular matrix integrity</span>(↗COL4A2, ↗DCN, ↗TIMP1).</li>
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
