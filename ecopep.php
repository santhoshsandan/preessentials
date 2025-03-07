<?php include('header.php');?>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <!--Intro-->
  <div id="intro">
      <div id="oats"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;"><span style="font-weight:bold;">Eco Pep</span><i></i></h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">

            
            
            <img src="img/abc_nanotech/ecoa.jpg" alt="Barley Dermiveil" style="width:100%;height:1000px;">
                
                <img src="img/abc_nanotech/eco1a.jpg" alt="Barley Dermiveil" style="width:100%;height:400px;">
                <p style="font-weight: 700; font-size: 30px !important;">SCALP & HAIR BENEFITS & MECHANISMS OF ACTION</p>
                
                <ul>
                <p style="font-weight: 700;">Revitalises Hair from the Scalp</p>
                    <li>Maintains the<span style="font-weight: 700;">extracellular matrix integrity</span>(↗COL1A1, ↗TIMP2). </li>
                    <li><span style="font-weight: 700;">Strengthens and improves the health of the scalp by boosting collagen (COL1, COL3 and
                    COL5) and elastin</span>contributing to healthier, thicker hair.</li>
                    <li>Improves<span style="font-weight: 700;">cell viability,</span>preventing cells from being vulnerable to damage.</li>
                   
                </p>
                <p style="font-weight: 700;">Reduces Hair Fall and Increases Hair Density</p>
                    <li>Blocks the production of dihydrotestosterone (essential agent of hair loss) through inhibition of
                    5α-reductase.<span style="font-weight: 700;"></span></li>
                    <li><span style="font-weight: 700;">Reduces hair fall,</span>resulting in fuller-looking hair with minimised shedding.</li>
                    <li><span style="font-weight: 700;">Increases hair density</span>and visibly promotes denser-looking hair.</li>
                  </p>
                <p style="font-weight: 700;">Repairs Damaged Hair</p>
                    <li>Protects protein carbonylation from oxidative stress (↗TXN).<span style="font-weight: 700;"></span></li>
                    <li><span style="font-weight: 700;">Repairs keratins</span>damaged by external aggressions (heat).</li>
                </p>
                <p style="font-weight: 700;">Protects Hair from Premature Ageing</p>
                    <li><span style="font-weight: 700;">Prevents hair fibre degradation,</span>reorganises and increases density, for<span style="font-weight: 700;">healthier and more
                    resilient hair.</span></li>
                    <li>Acts on the cuticle, penetrates the innermost area and protects against chemical aggression
                    (bleaching).</li>
                  </p>
                  <p style="font-weight: 700;">Restructures and Strengthens Hair</p>
                    <li>Contributes to<span style="font-weight: 700;">denser, thicker and stronger hair.</span></li>
                    <li><span style="font-weight: 700;">Repairs hair from breakage</span>and strengthens damaged hair.</li>
                    <li>Provides thermal protection.<span style="font-weight: 700;"></span></li> 
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
