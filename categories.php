<?php include('header.php');?>

  <!--Intro--><body style="background-image:url(img/properties.jpg);background-repeat: no-repeat;background-size: 100% 100%;">
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <div id="intro" style="z-index:-1;">
      <div><h1 class="text-align-center" style="padding-top:120px;padding-bottom:20px;color: #644142;font-weight:normal;font-size:80px;">Categories</h1></div>
    <div class="container" style="margin-top:50px;">

       <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home" style="color: #000;">Characteristics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1" style="color: #000;">Important Properties</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2" style="color: #000;">Applications</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" style="background-color: #fff;height: 400px">
    <div id="home" class="container tab-pane active"><br>
      <h3>Characteristics</h3>
      <div class="row">
                <div class="col-lg-4" style="top:50%;">
            <!--<label style="font-size:24px;font-weight: bold;">Property </label>-->
            <!-- <input type="text" list="car" ng-model="car" ng-keyup="total(car)" placeholder="Select Property" class="form-control" /> -->
            <select ng-model="car" ng-keyup="total(car)" placeholder="Select Property" class="form-control" id="car">
            <option value="">Select Characteristics</option>
            <option value="Powder">Powder</option>
            <option value="Oils">Oils</option>
            <option value="Beads">Beads</option>
            <option value="Extract">Extract</option>
            <option value="Pigments">Pigments</option>
            <option value="Actives">Actives</option>
            <option value="Emulsifier">Emulsifier</option>
            <option value="Emollient">Emollient</option>
            <option value="Surfactant">Surfactant</option>
            <option value="Fim former">Fim former</option>
            

          </select>

        </div>
        <div class="col-lg-8" ng-show="car">
          <label style="font-size:24px;font-weight: bold;">Products </label>
            <ul class="list-group" style="height: 200px;overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ng-repeat="x in cars_list | filter: car">

              <h6><a href="{{ x.url }}" target="_blank" style="color: lightslategrey;"><b>{{ x.title }}</b></a></h6>
              <!-- <p><b>INCI: </b>{{ x.INCI }}</p>
              <p><b>Description: </b>{{ x.Description }}</p>
              <p><b>Characteristics:</b> <span ng-repeat="C in x.Characteristics">{{ C }}, </span></p>
              <p><b>Important properties:</b> <span ng-repeat="I in x.Important_properties">{{ I }}, </span></p>
              <p><b>Application:</b> <span ng-repeat="m in x.Application">{{ m }}, </span></p>
              <p><b>Certificate:</b> <span ng-repeat="Ce in x.certificate">{{ Ce }}, </span></p> -->
              <!-- <div class="row">
                <div class="col-lg-3">
                  <p><b>Characteristics:</b> <span ng-repeat="C in x.Characteristics">{{ C }}, </span></p>
                </div>
                <div class="col-lg-3">
                  <p><b>Important properties:</b> <span ng-repeat="I in x.Important_properties">{{ I }}, </span></p>
                </div>
                <div class="col-lg-3">
                  <p><b>Application:</b> <span ng-repeat="m in x.Application">{{ m }}, </span></p>
                </div>
                <div class="col-lg-3">
                  <p><b>Certificate:</b> <span ng-repeat="Ce in x.certificate">{{ Ce }}, </span></p>
                </div>
              </div>
               -->
            </li>
            </ul>
            <br/>
            <!-- <p>You Selected <b>{{ car }}</b></p>
            {{cars_list}} -->

        </div>
        </div>
    </div>
    
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Important Properties</h3>
      <div class="row">
                <div class="col-lg-4" style="top:50%;">
            <!--<label style="font-size:24px;font-weight: bold;">Property </label>-->
            <!-- <input type="text" list="car" ng-model="car" ng-keyup="total(car)" placeholder="Select Property" class="form-control" /> -->
            <select ng-model="car" ng-keyup="total(car)" placeholder="Select Property" class="form-control" id="car">
            <option value="">Select Properties</option>
            
            <option value="Anti Ageing">Anti Ageing</option>
            <option value="Moisturization">Moisturization</option>
            <option value="Anti oxidant">Anti oxidant</option>
            <option value="SPF booster">SPF booster</option>
            <option value="Soothing">Soothing</option>
            <option value="Ceramides">Ceramides</option>
            <option value="Anti inflamation">Anti inflamation</option>
            <option value="Sensorial">Sensorial</option>
            <option value="Skin Protectant">Skin Protectant</option>
            <option value="Oil Absorbing">Oil Absorbing</option>
            <option value="Mattifying">Mattifying</option>
            <option value="Brightening/Luminiscence">Brightening/Luminiscence</option>
            <option value="Firming">Firming</option>
            <option value="Environmental protection">Environmental protection</option>
            <option value="Sun care">Sun care</option>
            <option value="Chemical protection">Chemical protection</option>
            <option value="UV">UV</option>
            <option value="Age spots">Age spots</option>
            <option value="Anti pollution">Anti pollution</option>
            <option value="Skin barrier">Skin barrier</option>
            <option value="Pigment dispersion">Pigment dispersion</option>
            <option value="Solubilizer">Solubilizer</option>
            <option value="Anti Acne">Anti Acne</option>
            <option value="Soft Focus">Soft Focus</option>
            <option value="Binder/Compressibility">Binder/Compressibility</option>
            <option value="Hair Dyes">Hair Dyes</option>
            <option value="Microbiome">Microbiome</option>
            <option value="Cell Renewal">Cell Renewal</option>
            <option value="Anti microbial">Anti microbial</option>
            <option value="Hair growth">Hair growth</option>
            <option value="slimming">slimming</option>
            <option value="UV Light">UV Light</option>
           

          </select>

        </div>
        <div class="col-lg-8" ng-show="car">
          <label style="font-size:24px;font-weight: bold;">Products </label>
            <ul class="list-group" style="height: 200px;overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ng-repeat="x in cars_list | filter: car">

              <h6><a href="{{ x.url }}" target="_blank" style="color: lightslategrey;"><b>{{ x.title }}</b></a></h6>
              <!-- <p><b>INCI: </b>{{ x.INCI }}</p>
              <p><b>Description: </b>{{ x.Description }}</p>
              <p><b>Characteristics:</b> <span ng-repeat="C in x.Characteristics">{{ C }}, </span></p>
              <p><b>Important properties:</b> <span ng-repeat="I in x.Important_properties">{{ I }}, </span></p>
              <p><b>Application:</b> <span ng-repeat="m in x.Application">{{ m }}, </span></p>
              <p><b>Certificate:</b> <span ng-repeat="Ce in x.certificate">{{ Ce }}, </span></p> -->
              <!-- <div class="row">
                <div class="col-lg-3">
                  <p><b>Characteristics:</b> <span ng-repeat="C in x.Characteristics">{{ C }}, </span></p>
                </div>
                <div class="col-lg-3">
                  <p><b>Important properties:</b> <span ng-repeat="I in x.Important_properties">{{ I }}, </span></p>
                </div>
                <div class="col-lg-3">
                  <p><b>Application:</b> <span ng-repeat="m in x.Application">{{ m }}, </span></p>
                </div>
                <div class="col-lg-3">
                  <p><b>Certificate:</b> <span ng-repeat="Ce in x.certificate">{{ Ce }}, </span></p>
                </div>
              </div>
               -->
            </li>
            </ul>
            <br/>
            <!-- <p>You Selected <b>{{ car }}</b></p>
            {{cars_list}} -->

        </div>
        </div>
    </div>
    
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Applications</h3>
      <div class="row">
                <div class="col-lg-4" style="top:50%;">
            <!--<label style="font-size:24px;font-weight: bold;">Property </label>-->
            <!-- <input type="text" list="car" ng-model="car" ng-keyup="total(car)" placeholder="Select Property" class="form-control" /> -->
            <select ng-model="car" ng-keyup="total(car)" placeholder="Select Property" class="form-control" id="car">
            <option value="">Select Application</option>
            
            <option value="Skin care">Skin care</option>
            <option value="Hair care">Hair care</option>
            <option value="Colour">Colour</option>
            <option value="Baby care">Baby care</option>
            <option value="Soaps & Bath">Soaps & Bath</option>
            <option value="Genital Hygiene">Genital Hygiene</option>
           

          </select>

        </div>
        <div class="col-lg-8" ng-show="car">
          <label style="font-size:24px;font-weight: bold;">Products </label>
            <ul class="list-group" style="height: 200px;overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ng-repeat="x in cars_list | filter: car">

              <h6><a href="{{ x.url }}" target="_blank" style="color: lightslategrey;"><b>{{ x.title }}</b></a></h6>
              <!-- <p><b>INCI: </b>{{ x.INCI }}</p>
              <p><b>Description: </b>{{ x.Description }}</p>
              <p><b>Characteristics:</b> <span ng-repeat="C in x.Characteristics">{{ C }}, </span></p>
              <p><b>Important properties:</b> <span ng-repeat="I in x.Important_properties">{{ I }}, </span></p>
              <p><b>Application:</b> <span ng-repeat="m in x.Application">{{ m }}, </span></p>
              <p><b>Certificate:</b> <span ng-repeat="Ce in x.certificate">{{ Ce }}, </span></p> -->
              <!-- <div class="row">
                <div class="col-lg-3">
                  <p><b>Characteristics:</b> <span ng-repeat="C in x.Characteristics">{{ C }}, </span></p>
                </div>
                <div class="col-lg-3">
                  <p><b>Important properties:</b> <span ng-repeat="I in x.Important_properties">{{ I }}, </span></p>
                </div>
                <div class="col-lg-3">
                  <p><b>Application:</b> <span ng-repeat="m in x.Application">{{ m }}, </span></p>
                </div>
                <div class="col-lg-3">
                  <p><b>Certificate:</b> <span ng-repeat="Ce in x.certificate">{{ Ce }}, </span></p>
                </div>
              </div>
               -->
            </li>
            </ul>
            <br/>
            <!-- <p>You Selected <b>{{ car }}</b></p>
            {{cars_list}} -->

        </div>
        </div>
    </div>
    
  </div>
            



  </div>

    </div>

  <!--End of Intro-->
<br><br>

  <!--Footer-->
  <?php include('footer.php');?>
    <!--End of Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/mdb.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script> -->


<script src="js/app.js"></script>
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
