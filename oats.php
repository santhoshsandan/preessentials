<?php include('header.php');?>
<style>
  .btn{
    background-image: linear-gradient(to right, #cc9900 , #e5c78d);
  }
</style>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

  <!--Intro-->
  <div id="intro">
      <div id="oats"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;">Oat Cosmetics</h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">

                <table id='myTable' class='table table-striped table-bordered' style='width:100%'>
                  <thead class="thead-dark">
                    <tr>
                      <th><strong>Product</strong></th>
                      <th><strong>INCI Name/ Description</strong></th>
                      <th><strong>Comments</strong></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    <tr>
                      <td>AvenaPLex</td>
                      <td>Avena sativa (Oat) Kernel Extract</td>
                      <td>A complex of skin identical lipids including ceramides, phosphatidylcholine and phosphatidylethanolamine which provide both short-term and long-term protection of aged skin.</td>
                      <td><a href="avenaplex.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td><span style="font-weight:bold;">aurarfirm N</span><i style="font-weight:normal!important;"></i></td>
                      <td>Lactobacillus Ferment, Avena sativa Kernel
Extract, Sodium Benzoate, Potassium Sorbate</td>
                      <td>A Lactobacilli fermented natural Oat active that improves the complexion radiance whilst firming and re-plumping the skin</td>
                      <td><a href="aurafirmN.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td><span style="font-weight:bold;">aurarfirm P</span><i style="font-weight:normal!important;"></i></td>
                      <td>Lactobacillus Ferment, Avena sativa Kernel
Extract, Sodium Benzoate, Potassium Sorbate</td>
                      <td>A Lactobacilli fermented natural Oat active that supports and accelerates the recovery of the skin microbiome</td>
                      <td><a href="aurafirmP.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td><span style="font-weight:bold;">aurarfirm S</span><i style="font-weight:normal!important;"></i></td>
                      <td>Lactobacillus Ferment, Avena sativa Kernel
Extract, Sodium Benzoate, Potassium Sorbate</td>
                      <td>An active liquid serum. A Lactobacilli fermented active liquid serum that deeply penetrates and stabilises the skin barrier using the power of Oats</td>
                      <td><a href="aurafirmS.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Ecopep</td>
                      <td>Avena sativa (Oat) Peptide</td>
                      <td>Natural high purity peptide for revitalised scalp and hair</td>
                      <td><a href="ecopep.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Glucaveen</td>
                      <td>Avena sativa (Oat) Bran Extract</td>
                      <td>Glucaveen is a unique powder active that is highly concentrated in oat beta glucan. and has a proven effect on hair physiology and appearance.</td>
                      <td><a href="glucaveen.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Rejuvaveen</td>
                      <td>Avena sativa (Oat) Bran Extract</td>
                      <td>	
Essential oat active for skin rejuvenation and wellness. Rejuvaveen is a holistic active which protects against stress related skin damage and addresses the

concepts of emotional wellbeing and well ageing.</td>
                      <td><a href="rejuv.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Oat COM USP</td>
                      <td>Avena Sativa Kernel Flour</td>
                      <td>Anti-ageing, cleansing, anti-irritant, moisturising</td>
                      <td><a href="oatcom.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Oat Lipid e</td>
                      <td>Avena Sativa Kernel Oil</td>
                      <td>Effective emollient, natural emulsifying properties</td>
                      <td><a href="oatlipid.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <!-- <tr>
                      <td>Oat Silk 12</td>
                      <td>Avena Sativa (Oat) Meal Extract</td>
                      <td>Excellent textural characteristics</td>
                      <td><a href="oat_silk_12.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr> -->
                    <!-- <tr>
                      <td>Virgin Poppy Seed Oil</td>
                      <td>Papaver Somniferum Seed Oil</td>
                      <td>Smooths and softens	</td>
                      <td><a href="virgin_poppy_oil.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr> -->
                  </tbody>
                </table>

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
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false,
        "columnDefs": [
    { "width": "40%", "targets": 0 }
  ]
              // "lengthMenu": [[2,5,10, 25, 50, -1], [2,5,10, 25, 50, "All"]]
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
