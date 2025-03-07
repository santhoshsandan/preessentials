<?php include('header.php');?>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

  <!--Intro-->
  <div id="intro">
      <div id="innovacos"><h1 class="text-align-center" style="padding-top:120px;padding-bottom:80px;color: #fff;font-weight:bold;">Vendor</h1></div>
      <div class="container animated zoomIn Slow" style="margin-top:50px;">

                <table id='myTable' class='table table-striped table-bordered' style='width:100%;' ng-controller="myCtrl">
                  <thead class="thead-dark">
                    <tr>
                      <th><strong>Product</strong></th>
                      <th><strong>INCI</strong></th>
                      <th><strong>Description</strong></th>
                      <th><strong>characteristics</strong></th>
                      <th><strong>Important Properties</strong></th>
                      <th><strong>Application</strong></th>
                      <th><strong>Certificate</strong></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="x in cars_list">
                      <td><b>{{ x.title }}</b></td>
                      <td>{{ x.INCI }}</td>
                      <td>{{ x.Description }}</td>
                      <td><span ng-repeat="C in x.Characteristics">{{ C }}, </span></td>
                      <td><span ng-repeat="I in x.Important_properties">{{ I }}, </span></td>
                      <td><span ng-repeat="m in x.Application">{{ m }}, </span></td>
                      <td><span ng-repeat="Ce in x.certificate">{{ Ce }}, </span></td>
                      <td><a href="{{ x.url }}" class="btn btn-warning" role="button">View Product</a></td>
                    </tr>
                  </tbody>
                </table>


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
    <script src="js/app.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
      $('#myTable').DataTable({

              "lengthMenu": [[2,5,10, 25, 50, -1], [2,5,10, 25, 50, "All"]]
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
