<?php include('header.php');?>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <!--Intro-->
  <div id="intro">
      <div id="oats"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;"><span style="font-weight:bold;">AvenaPLex</span><i></i></h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">

            
            
            <img src="img/abc_nanotech/avv.jpg" alt="Barley Dermiveil" style="width:100%;height:1000px;">
                
                <img src="img/abc_nanotech/av1v.jpg" alt="Barley Dermiveil" style="width:100%;height:400px;">
                <p style="font-weight: 700; font-size: 30px !important;">SKIN BENEFITS & MECHANISMS OF ACTION</p>
                
                <ul>
                <p style="font-weight: 700;">Restores and Repairs the Skin Barrier</p>
                    <li><span style="font-weight: 700;">Rapidly repairs the skin lipid barrier.</span> </li>
                    <li><span style="font-weight: 700;">Improves the quality of the epidermal barrier</span>(by increasing the length of the lipid
                    lamellae in the intercellular space).</li>
                    <li><span style="font-weight: 700;"></span>Increases skin barrier function (by reducing TEWL).</li>
                   
                </p>
                <p style="font-weight: 700;">Deeply Hydrates the Skin</p>
                    <li><span style="font-weight: 700;"></span>Boosts the natural moisturising factor of the skin (↗Hyaluronan Synthase 3).</li>
                    <li><span style="font-weight: 700;">Improves skin hydration</span>Enhances skin hydration by upregulating genes (↗PPARD, ↗SMPD1).</li>
                    <li><span style="font-weight: 700;">Boosts the hyaluronic acid content of the skin.</span></li>
                    <li><span style="font-weight: 700;">Improves skin hydration</span>in the short and long term.</li>
                  </p>
                <p style="font-weight: 700;">Improves Skin Smoothness and Promotes an Even Skin Tone</p>
                    <li>Induces<span style="font-weight: 700;">Decreases skin roughness.</span></li>
                   
                </p>
                <p style="font-weight: 700;">Helps Improve the Appearance of Ageing Skin</p>
                    <li><span style="font-weight: 700;">Maintains</span>the extracellular matrix integrity (↗FBN1, ↗COL1A3, ↗COL1A1).</li>
                    <li><span style="font-weight: 700;">Replenishes skin lipids</span>lost through ageing.</li>
                    <li><span style="font-weight: 700;">Increases</span>the level of<span style="font-weight: 700;">essential ceramides in the skin.</span></li>
                    <li><span style="font-weight: 700;">Visibly reduces the appearance of crow’s feet wrinkles.</span></li>
                  </p>
                  <p style="font-weight: 700;">Reduces Skin Redness and Protects Against UV Damage</p>
                    <li>Protects skin cells against<span style="font-weight: 700;">oxidative stress</span>(↗NFE2L2, ↗HMOX1, ↗TXNRD1). Rapidly</li>
                    <li><span style="font-weight: 700;">soothes irritated skin, reduces redness and provides relief from erythema.</span></li>
                   
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
