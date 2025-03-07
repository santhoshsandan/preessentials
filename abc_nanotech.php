<?php include('header.php');?>
<style>
.btn{
  background-image: linear-gradient(to right, #4e0200 , #926c65);
}
</style>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

  <!--Intro-->
  <div id="intro">
      <div id="abc_nanotech"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;">ABC Nanotech</h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">

                <table id='myTable' class='table table-striped table-bordered' style='width:100%'>
                  <thead class="thead-dark">
                    <tr>
                      <th><strong>Product</strong></th>
                      <th><strong>INCI</strong></th>
                      <th><strong>Description</strong></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Silnos</td>
                      <td>Silica</td>
                      <td>Amorphous Spherical Silica powder with pore inside</td>
                      <td><a href="silnos.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>E+</td>
                      <td>Polymethyl silsesquioxane</td>
                      <td>Spherical Silicone Resin Powder with 3D  Network structure</td>
                      <td><a href="e+.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Rheosil</td>
                      <td>VINYL DIMETHICONE/METHICONE  SILSESQUIOXANE CROSSPOLYMER</td>
                      <td>Spherical Silcone Elastomer powder of cross -  linked Dimethyl Polysiloxane</td>
                      <td><a href="rheosil.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Silagel</td>
                      <td>Ref TDS</td>
                      <td>Diversiform Silicone Elastomers blends with various solvents</td>
                      <td><a href="silagel.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>V BEAD</td>
                      <td>Ref TDS</td>
                      <td>Micro- sized Colour Granule with Instant Colour Change</td>
                      <td><a href="vbead.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                  </tbody>
                </table>

            </div>
            <div class="col-lg-3 animated zoomIn Slow">
              <img src="img/abc.png" width="100%"/>
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
