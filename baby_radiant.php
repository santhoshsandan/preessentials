<?php include('header.php');?>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

  <!--Intro-->
  <div id="intro">
      <div id="radiant"><h1 class="text-align-center" style="padding-top:40px;padding-bottom:0px;color: #fff;font-weight:bold;font-size:48px">Baby Care Products</h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
            <div class="col-lg-9 animated zoomIn Slow">

              <p>Thanks for your interest in our products. We are not able to support your requirements for ingredients in this segment at the moment. </p>

<p>We welcome you to take a look at our other range of products.</p>
            </div>
            <div class="col-lg-3 animated zoomIn Slow">
              <img src="img/logo-color.png" width="100%"/>
              <?php include('for.php');?>
            </div>
          </div>
      </div>

    </div><br>

  <!--End of Intro-->
<div style="height:50px;"></div>
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
