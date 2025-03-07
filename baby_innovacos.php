<?php include('header.php');?>
<style>
  .btn{
    background-image: linear-gradient(to right, #bc611e , #d9a57e);
  }
</style>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

  <!--Intro-->
  <div id="intro">
        <div id="innovacos"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;">Baby Care Products</h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">

                <table id='myTable' class='table table-default table-bordered' style='width:100%'>
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
                      <td>PolyAquol™ 2W</td>
                      <td>Polyglyceryl-2- Stearate (and) Glyceryl Stearate (and) Stearyl Alcohol</td>
                      <td>Polyglycerol-based for O/W, self-emulsifying, repairs skin barrier function</td>
                      <td><a href="polyaquol2w.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>PolyAquol™ OS2</td>
                      <td>Polyglyceryl-2 Oleate (and) Polyhydroxystearic Acid (and) Polyglyceryl-2 Stearate</td>
                      <td>Polyglycerol-based for W/O, cold-processable, unique skin feel</td>
                      <td><a href="polyaquol_os2.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>

                    <tr>
                      <td>Innollient™ LO</td>
                      <td>Octyldodecyl Oleate (and) Octyldodecyl Stearoyl Stearate (and) Polyhydroxystearic Acid (and) Octyldodecanol</td>
                      <td>Improves spreadability index, pigment dispersion</td>
                      <td><a href="innollient_lo.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Innollient™ SL</td>
                      <td>Stearyl Linoleate (and) Stearyl Stearate (and) Polyhydroxystearic Acid (and) Stearyl Alcohol</td>
                      <td>Hydrofeelm™, long lasting skin barrier action</td>
                      <td><a href="innollient_sl.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Liceryl™-12</td>
                      <td>Glyceryl Linoleate (and) PEG-12 Oleate</td>
                      <td>Solubilizer for clear gels, reduces surfactant irritation</td>
                      <td><a href="liceryl.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Eceryl™-12</td>
                      <td>Glyceryl Erucate (and) PEG-12 Oleate</td>
                      <td>Co-emulsifier, Solubilizer, maintains skin barrier function</td>
                      <td><a href="eceryl.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                  </tbody>
                </table>

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
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false,
        "columnDefs": [
    { "width": "20%", "targets": 0 }
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
