<?php include('header.php');?>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <!--Intro-->
  <div id="intro">
      <div id="oats"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;"><span style="font-weight:bold;">aura</span><i>firm N</i></h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">
              <p>
                <img src="img/barley_dermiveil.png" alt="Barley Dermiveil" style="width:250px;height:163px;margin-left:15px;float:right;">
                Introducing <span style="font-weight:bold;">aura</span><i>firm</i>, a range of natural Oat fermented actives which improve skin health and boost cell turnover.</p>
                <p style="font-weight: 700;">Efficacy:</p>
                <p>
                <ul>
                    <li><span style="font-weight: 700;">Accelerates Microbiome Recovery</span> – Speeds up the recovery of the skin’s first line of defense and enhances the conditions for the microbiome to thrive (In Vitro).</li>
                    <li><span style="font-weight: 700;">Plumps and Firms Skin</span> – Increases stratum corneum thickness, epidermal thickness and lamination (Ex Vivo).</li>
                    <li><span style="font-weight: 700;">Smoothes Skin</span> – <span style="font-weight:bold;">aura</span><i>firm</i> rapidly decreases skin roughness and firms and plumps the skin (In Vivo).</li>
                    <li><span style="font-weight: 700;">Skin Radiance</span> – <span style="font-weight:bold;">aura</span><i>firm</i> significantly improves complexion and skin radiance (In Vivo).</li>
                    <li><span style="font-weight: 700;">Leaves Skin Moisturized and Comforted</span> – 70% of consumers felt <span style="font-weight:bold;">aura</span><i>firm</i> gave long term comfort, moisturisation, radiance and firmness as well rapid comfort, moisturisation and firmness (Consumer Trial).</li>
                    <li><span style="font-weight: 700;">Conditions and Improves Hair</span> – Benefits hair care products by improving the feel and conditions of wet and dry hair (Ex Vivo).</li>
                </ul>
                </p>

                <p>
                    <ul>
                        <li><span style="font-weight:bold;">aura</span><i>firm</i> <span style="font-weight: 700;">P</span>: An active fermented Oat cream. A Lactobacilli fermented natural Oat active that supports andaccelerates the recovery of the skin microbiome.</li>
                        <li><span style="font-weight:bold;">aura</span><i>firm</i> <span style="font-weight: 700;">N</span>: An active fermented Oat liquid. A Lactobacilli fermented natural Oat active that improves the complexion radiance whilst firming and replumping the skin.</li>
                        <li><span style="font-weight:bold;">aura</span><i>firm</i> <span style="font-weight: 700;">S</span>: An active liquid serum. A Lactobacilli fermented active liquid serum that deeply penetrates and stabilses the skin barrier using the power of Oats.</li>
                    </ul>
                </p>
                <!-- <p><span style="font-weight: 700;"><span style="font-weight:bold;">aura</span><i>firm</i> Fermentation Process</span></p>
                <p><span style="font-weight:bold;">aura</span><i>firm</i> has been developed using a marriage of Oat COM – Oat Cosmetics’ leading, patented, advanced colloidal oatmeal and a highly specialized and stable Lactobacillus strain, developed by German fermentation experts over 50 years using cutting edge technology.</p> -->


                <p><span style="font-weight: 700;">INCI:</span> Lactobacillus Ferment, Avena sativa Kernel Extract, Sodium Benzoate, Potassium Sorbate</p>
                <img src="img/ecocert.png" width="20%" class="img-thumbnail"/>


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
