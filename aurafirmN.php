<?php include('header.php');?>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <!--Intro-->
  <div id="intro">
      <div id="oats"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;"><span style="font-weight:bold;">aura</span><i>firm N</i></h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">

            
            
            <img src="img/abc_nanotech/img8.jpg" alt="Barley Dermiveil" style="width:100%;height:1000px;">
                
                <img src="img/abc_nanotech/img6.jpg" alt="Barley Dermiveil" style="width:100%;height:400px;">
                <p style="font-weight: 700; font-size: 30px !important;">SKIN BENEFITS & MECHANISMS OF ACTION</p>


                <p>
                <ul>
                <p style="font-weight: 700;">Balances a Healthy Skin Microbiome</p>
                    <li><span style="font-weight: 700;">Increases the biodiversity</span> of the skin microbiota. </li>
                    <li><span style="font-weight: 700;">Increases the presence of bacteria </span> lost through ageing.</li>
                    <li><span style="font-weight: 700;">Rebalances skin pH.</span> </li>
                   
                </p>
                <p style="font-weight: 700;">Boosts Skin Hydration, Resulting in a Youthful Look</p>
                    <li><span style="font-weight: 700;">Improves tight junction stability</span> and <span style="font-weight: 700;">barrier function</span> (↗CLDN7, ↗OCLN).</li>
                    <li><span style="font-weight: 700;">Improves skin plumpness.</span> \</li>
                    
                   
                </p>
                <p style="font-weight: 700;">Fights Skin Sagging and Achieves Firms, Tighter Looking Skin</p>
                    <li><span style="font-weight: 700;">Prevents skin ageing mechanisms </span> (↗SIRT1) and<span style="font-weight: 700;">extracellular matrix breakdown</span>(↘ KLK5, ↘MMP10). </li>
                    <li><span style="font-weight: 700;">Increases epidermis thickness and stratum corneum thickness </span> and lamination.</li>
                    <li><span style="font-weight: 700;">Improves skin firmness.</span> </li>
                   
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
