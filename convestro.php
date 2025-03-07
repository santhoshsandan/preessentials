<?php include('header.php');?>
<style>
  .btn{
    background-image: linear-gradient(to right, #374c1e , #898f72);
  }
</style>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

  <!--Intro-->
  <div id="intro">
      <div id="covestro"><h1 class="text-align-center" style="padding-top:10px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;">Covestro</h1></div>
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
                      <td>Baycusan C 1000/1</td>
                      <td>Polyurethane-34</td>
                      <td>Multi functional film former for skin care,  colour & suncare</td>
                      <td><a href="baycusan_c_1000.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Baycusan C 1001/1</td>
                      <td>Polyurethane-34</td>
                      <td>Multi functional film former for skin care,  colour & suncare</td>
                      <td><a href="baycusan_c_1001.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Baycusan C 1003/1</td>
                      <td>Polyurethane-32</td>
                      <td>Multi functional film former for skin care,  colour & suncare</td>
                      <td><a href="baycusan_c_1003.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Baycusan C 1004/1</td>
                      <td>Polyurethane -35</td>
                      <td>Multifunctional film former colour, Sun care, hair care</td>
                      <td><a href="baycusan_c_1004.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Baycusan C 1008/1</td>
                      <td>Polyurethane-48</td>
                      <td>Multifunctional film former for Hair - repair, Frizz control, Heat protection, Strong & flexible hold</td>
                      <td><a href="baycusan_c_1008.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Baycusan C 1010</td>
                      <td>Polyurethane 35</td>
                      <td>Multifunctional film former for Hair - repair, Frizz control, Heat protection, Strong & flexible hold</td>
                      <td><a href="baycusan_c_1010.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Baycusan C 2000</td>
                      <td>Polyuretane 64</td>
                      <td>Film former for use  in Sun care & Ethanol based Hair care formulations</td>
                      <td><a href="baycusan_c_2000.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Baycusan Eco 1000</td>
                      <td>Polyuretnane 93</td>
                      <td>Naturally - derived Baycusan® eco E 1000 has been developed for high performance hair styling formulations with similar or better characteristics than synthetic polymers</td>
                      <td><a href="baycusan_echo_e_1000.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                    <tr>
                      <td>Baycusan ECO 1001</td>
                      <td>Polyurethane 98</td>
                      <td>Water based Naturally Derived Polymer</td>
                      <td><a href="baycusan_echo_e_1001.php" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>

                  </tbody>
                </table>

            </div>
            <div class="col-lg-3 animated zoomIn Slow">
              <img src="img/Covestro_logo.svg.png" width="100%"/>
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
