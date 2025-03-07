<?php include('header.php');?>

  <!--Intro--><body style="background-image:url(img/properties.jpg);background-repeat: no-repeat;background-size: 100% 100%;">
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <div id="intro" style="z-index:-1;">
      <div><h1 class="text-align-center" style="padding-top:120px;padding-bottom:20px;color: #46733C!important;font-weight:normal;font-size:80px;">Properties</h1></div>
    <div class="container" style="margin-top:50px;background-color:rgba(255,255,255,0.5);padding:10px;border-radius:10px;">
    <div class="row">
    <div class="col-md-3 mb-3" style="padding-right:0px;">
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Ageing" role="tab" aria-controls="home" aria-selected="true">Anti Aging</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Moisturization" role="tab" aria-controls="profile" aria-selected="false">Moisturization</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Oxidant" role="tab" aria-controls="contact" aria-selected="false">Anti Oxidant</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="extract-tab" data-toggle="tab" href="#Oil" role="tab" aria-controls="extract" aria-selected="false">Oil Absorbing</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pigment-tab" data-toggle="tab" href="#Mattifying" role="tab" aria-controls="pigment" aria-selected="false">Mattifying</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="active-tab" data-toggle="tab" href="#Brightening" role="tab" aria-controls="active" aria-selected="false">Brightening/Luminescence</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Emulsifier-tab" data-toggle="tab" href="#Environmental" role="tab" aria-controls="Emulsifier" aria-selected="false">Environmental Protection</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Emollient-tab" data-toggle="tab" href="#Conditioning" role="tab" aria-controls="Emollient" aria-selected="false">Conditioning</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Chemical" role="tab" aria-controls="Surfactant" aria-selected="false">Chemical Protection</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#UV" role="tab" aria-controls="Surfactant" aria-selected="false">UV</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Spots" role="tab" aria-controls="Surfactant" aria-selected="false">Age Spots</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Pollution" role="tab" aria-controls="Surfactant" aria-selected="false">Anti Pollution</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Pigment" role="tab" aria-controls="Surfactant" aria-selected="false">Pigment Dispersion</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Solubilizer" role="tab" aria-controls="Surfactant" aria-selected="false">Solubilizer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Acne" role="tab" aria-controls="Surfactant" aria-selected="false">Anti Acne</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Soft" role="tab" aria-controls="Surfactant" aria-selected="false">Soft Focus</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Binder" role="tab" aria-controls="Surfactant" aria-selected="false">Binder/Compressibility</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Dyes" role="tab" aria-controls="Surfactant" aria-selected="false">Hair Dyes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Microbiome" role="tab" aria-controls="Surfactant" aria-selected="false">Microbiome</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Cell" role="tab" aria-controls="Surfactant" aria-selected="false">Cell Renewal</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Microbial" role="tab" aria-controls="Surfactant" aria-selected="false">Anti Microbial</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Film" role="tab" aria-controls="Surfactant" aria-selected="false">Film Former</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Surfactant" role="tab" aria-controls="Hair" aria-selected="false">Hair Growth</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Slimming" role="tab" aria-controls="Surfactant" aria-selected="false">Slimming</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" id="Surfactant-tab" data-toggle="tab" href="#Genital" role="tab" aria-controls="Surfactant" aria-selected="false">Genital Hygiene</a>
  </li> 

</ul>
    </div>
    <!-- /.col-md-4 -->
        <div class="col-md-9" style="padding-left:0px;">
      <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="Ageing" role="tabpanel" aria-labelledby="home-tab">
  <h2>Anti Aging</h2>
  <ul class="list-group" style="overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_com_usp.php" style="color: lightslategrey;"><b>Oat COM USP</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_lipid_e.php" style="color: lightslategrey;"><b>Oat Lipid e</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_com_org.php" style="color: lightslategrey;"><b>Oat COM ORG</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="bioptimized_guava.php" style="color: lightslategrey;"><b>Bioptimized™ Guava</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="regenesea.php" style="color: lightslategrey;"><b>ReGENESEA™ LS</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="activoil_spotless_zro.php" style="color: lightslategrey;"><b>Activoil™ Spotless ZRO</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="plant_c_stem.php" style="color: lightslategrey;"><b>Plant C Stem™ Vigna Radiata</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="innopom.php" style="color: lightslategrey;"><b>InnoPOM™</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1000.php" style="color: lightslategrey;"><b>Baycusan C 1000/1</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="bismuth_subnitrate.php" style="color: lightslategrey;"><b>Bismuth Subnitrate</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="bismuth_subgallate.php" style="color: lightslategrey;"><b>Bismuth Subgallate</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="uvicare.php" style="color: lightslategrey;"><b>Uvicare - Bismuth Oxichloride</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="aginon.php" style="color: lightslategrey;"><b>AGINON</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="cuti_pro.php" style="color: lightslategrey;"><b>CUTI PRO</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="derma_clock.php" style="color: lightslategrey;"><b>Derma CLOCK</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="radiant_product_list.php" style="color: lightslategrey;"><b>Planoxia CL-SF</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="RASTEM.php" style="color: lightslategrey;"><b>RASTEM</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="timesel_bam.php" style="color: lightslategrey;"><b>TimeSel BAM</b></a></h6></li>
            
            </ul>
  </div>
  <div class="tab-pane fade" id="Moisturization" role="tabpanel" aria-labelledby="profile-tab">
  <h2>Moisturization</h2>
  <ul class="list-group" style="overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_com_usp.php" style="color: lightslategrey;"><b>Oat COM USP</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_lipid_e.php" style="color: lightslategrey;"><b>Oat Lipid e</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_com_org.php" style="color: lightslategrey;"><b>Oat COM ORG</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="avenaplex.php" style="color: lightslategrey;"><b>Avenaplex</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="aurafirm.php" style="color: lightslategrey;"><b><span style="font-weight:bold;">aura</span><i>firm</i></b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="virgin_poppy_oil.php" style="color: lightslategrey;"><b>Virgin Poppy Seed Oil</b></a></h6></li>
            
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="regenesea.php" style="color: lightslategrey;"><b>ReGENESEA™ LS</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="innollient_lo.php" style="color: lightslategrey;"><b>Innollient™ LO</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="innollient_sl.php" style="color: lightslategrey;"><b>Innollient™ SL</b></a></h6></li>
            
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1000.php" style="color: lightslategrey;"><b>Baycusan C 1000/1</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="radican_s20.php" style="color: lightslategrey;"><b>RADICAN S20</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="radiant_product_list.php" style="color: lightslategrey;"><b>Radican SP</b></a></h6></li>
            
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="white_snow_gel.php" style="color: lightslategrey;"><b>White snow Gel</b></a></h6></li>
            
            </ul>
  </div>
  <div class="tab-pane fade" id="Oxidant" role="tabpanel" aria-labelledby="contact-tab">
  <h2>Anti Oxidant</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_com_usp.php" style="color: lightslategrey;"><b>Oat COM USP</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_lipid_e.php" style="color: lightslategrey;"><b>Oat Lipid e</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_com_org.php" style="color: lightslategrey;"><b>Oat COM ORG</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="avenaplex.php" style="color: lightslategrey;"><b>Avenaplex</b></a></h6></li>
  </ul>
  </div>
  <div class="tab-pane fade" id="Oil" role="tabpanel" aria-labelledby="contact-tab">
  <h2>Oil Absorbing</h2>
  <ul class="list-group" style="overflow-x: auto;" >
    <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="silnos.php" style="color: lightslategrey;"><b>Silnos</b></a></h6></li>
  </ul>
  </div>
  <div class="tab-pane fade" id="Mattifying" role="tabpanel" aria-labelledby="pigment-tab">
  <h2>Mattifying</h2>
  <ul class="list-group" style="overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_silk_12.php" style="color: lightslategrey;"><b>Oat Silk 12</b></a></h6></li>
            
            </ul>
  </div>
  <div class="tab-pane fade" id="Brightening" role="tabpanel" aria-labelledby="active-tab">
  <h2>Brightening/ Luminescence</h2>
  <ul class="list-group" style="overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_silk_12.php" style="color: lightslategrey;"><b>Oat Silk 12</b></a></h6></li>
            
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="aurafirm.php" style="color: lightslategrey;"><b><span style="font-weight:bold;">aura</span><i>firm</i></b></a></h6></li>
            
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="activoil_spotless_zro.php" style="color: lightslategrey;"><b>Activoil™ Spotless ZRO</b></a></h6></li>
            
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="ginsenolite_g.php" style="color: lightslategrey;"><b>GinsenoLite™-G</b></a></h6></li>
            
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="radiant_product_list.php" style="color: lightslategrey;"><b>Planoxia CL-SF</b></a></h6></li>
            
            </ul>
  </div>
  <div class="tab-pane fade" id="Environmental" role="tabpanel" aria-labelledby="Emulsifier-tab">
  <h2>Environmental Protection</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="bioptimized_guava.php" style="color: lightslategrey;"><b>Bioptimized™ Guava</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="regenesea.php" style="color: lightslategrey;"><b>ReGENESEA™ LS</b></a></h6></li>
           
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="activoil_enchnidium_zro.php" style="color: lightslategrey;"><b>Activoil™ Echnidium ZRO</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="activoil_kerox_pro.php" style="color: lightslategrey;"><b>Activoil™ Kerox-Pro™</b></a></h6></li>
            
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="innopom.php" style="color: lightslategrey;"><b>InnoPOM™</b></a></h6></li>
            
            
            </ul>
  </div>
  <div class="tab-pane fade" id="Conditioning" role="tabpanel" aria-labelledby="Emollient-tab">
  <h2>Conditioning</h2>
  <ul class="list-group" style="overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_lipid_e.php" style="color: lightslategrey;"><b>Oat Lipid e</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="innollient_lo.php" style="color: lightslategrey;"><b>Innollient™ LO</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="innollient_sl.php" style="color: lightslategrey;"><b>Innollient™ SL</b></a></h6></li>
            
            </ul>
  </div>
  <div class="tab-pane fade" id="Chemical" role="tabpanel" aria-labelledby="Emollient-tab">
  <h2>Chemical Protection</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="liceryl.php" style="color: lightslategrey;"><b>Liceryl™-12</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="eceryl.php" style="color: lightslategrey;"><b>Eceryl™-12</b></a></h6></li>
            
            </ul>
  </div>
  <div class="tab-pane fade" id="UV" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>UV</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="activoil_spotless_zro.php" style="color: lightslategrey;"><b>Activoil™ Spotless ZRO</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="activoil_kerox_pro.php" style="color: lightslategrey;"><b>Activoil™ Kerox-Pro™</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="plant_c_stem.php" style="color: lightslategrey;"><b>Plant C Stem™ Vigna Radiata</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="innopom.php" style="color: lightslategrey;"><b>InnoPOM™</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1000.php" style="color: lightslategrey;"><b>Baycusan C 1000/1</b></a></h6></li>
            
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="uvicare.php" style="color: lightslategrey;"><b>Uvicare - Bismuth Oxichloride</b></a></h6></li>
            
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="cuti_pro.php" style="color: lightslategrey;"><b>CUTI PRO</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="florant_cs.php" style="color: lightslategrey;"><b>FLORANT CS</b></a></h6></li>
            
           
            </ul>
  </div>
  <div class="tab-pane fade" id="Spots" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Age Spots</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="activoil_spotless_zro.php" style="color: lightslategrey;"><b>Activoil™ Spotless ZRO</b></a></h6></li>
            
            </ul>
  </div>
  <div class="tab-pane fade" id="Pollution" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Anti Pollution</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="activoil_spotless_zro.php" style="color: lightslategrey;"><b>Activoil™ Spotless ZRO</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1004.php" style="color: lightslategrey;"><b>Baycusan C 1004/1</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1010.php" style="color: lightslategrey;"><b>Baycusan C 1010</b></a></h6></li>          
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="PLANOXIA-BW.php" style="color: lightslategrey;"><b>Planoxia BW</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="radiant_product_list.php" style="color: lightslategrey;"><b>ROSIVETA</b></a></h6></li>
            </ul>
  </div>
  <div class="tab-pane fade" id="Pigment" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Pigment Dispersion</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="innollient_lo.php" style="color: lightslategrey;"><b>Innollient™ LO</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="innollient_sl.php" style="color: lightslategrey;"><b>Innollient™ SL</b></a></h6></li>
            </ul>
  </div>
  <div class="tab-pane fade" id="Solubilizer" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Solubilizer</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="liceryl.php" style="color: lightslategrey;"><b>Liceryl™-12</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="eceryl.php" style="color: lightslategrey;"><b>Eceryl™-12</b></a></h6></li>
            </ul>
  </div>
  <div class="tab-pane fade" id="Acne" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Anti Acne</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_lipid_e.php" style="color: lightslategrey;"><b>Oat Lipid e</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="oat_silk_12.php" style="color: lightslategrey;"><b>Oat Silk 12</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1000.php" style="color: lightslategrey;"><b>Baycusan C 1000/1</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="purefix_dc.php" style="color: lightslategrey;"><b>PUREFIX DC</b></a></h6></li>
            </ul>
  </div>
  <div class="tab-pane fade" id="Soft" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Soft Focus</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="silnos.php" style="color: lightslategrey;"><b>Silnos</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="wsp.php" style="color: lightslategrey;"><b>White Silver powders - Cosmetic Pearlescent Pigments</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="astro_H60.php" style="color: lightslategrey;"><b>Pearlescent dispersion - Astro H 60</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="astro_CO60.php" style="color: lightslategrey;"><b>Pearlescent dispersion Astro C060</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="tres.php" style="color: lightslategrey;"><b>PUHP 3002</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="tres.php" style="color: lightslategrey;"><b>PUHP 500</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="tres.php" style="color: lightslategrey;"><b>PUHP 3008</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="tres.php" style="color: lightslategrey;"><b>PUHP 1109</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="tres.php" style="color: lightslategrey;"><b>PUHP 3016</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="tres.php" style="color: lightslategrey;"><b>PUHP 1108</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="tres.php" style="color: lightslategrey;"><b>TRES BN Granular - PUHP 120T</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="tres.php" style="color: lightslategrey;"><b>TRES BN Granular - PUHP 200S</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="LEAUBN.php" style="color: lightslategrey;"><b>Leau BN 3002 - water dispersible</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="LEAUBN.php" style="color: lightslategrey;"><b>Leau BN 500 - water dispersible</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="TRESBN_Surface.php" style="color: lightslategrey;"><b>TRES BN 1106 - Surface treated powder</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="TRESBN_Surface.php" style="color: lightslategrey;"><b>TRES BN 1107 - Surface treated powder</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="TRES_BN_Spherique.php" style="color: lightslategrey;"><b>TRES BN Spherique - PUHP 50S</b></a></h6></li>
            </ul>
  </div>
  <div class="tab-pane fade" id="Binder" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Binder/Compressibility</h2>
  <ul class="list-group" style="overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="wsp.php" style="color: lightslategrey;"><b>  White Silver powders - Cosmetic Pearlescent Pigments</b></a></h6></li>

  
            </ul>
  </div>
  <div class="tab-pane fade" id="Dyes" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Hair Dyes</h2>
  <ul class="list-group" style="overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="bismuth_citrate.php" style="color: lightslategrey;"><b>Bismuth Citrate Powder</b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="Colloidal_bismuth.php" style="color: lightslategrey;"><b>Colloidal Bismuth Sub Citrate</b></a></h6></li>

            </ul>
  </div>
  <div class="tab-pane fade" id="Microbiome" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Microbiome</h2>
  <ul class="list-group" style="overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="aurafirm.php" style="color: lightslategrey;"><b> <span style="font-weight:bold;">aura</span><i>firm</i></b></a></h6></li>
            

  
            </ul>
  </div>
  <div class="tab-pane fade" id="Cell" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Cell Renewal</h2>
  <ul class="list-group" style="overflow-x: auto;" >
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="aurafirm.php" style="color: lightslategrey;"><b><span style="font-weight:bold;">aura</span><i>firm</i></b></a></h6></li>
            <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="regenesea.php" style="color: lightslategrey;"><b>ReGENESEA™ LS</b></a></h6></li>

            </ul>
  </div>
  <div class="tab-pane fade" id="Microbial" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Anti Microbial</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="berriant.php" style="color: lightslategrey;"><b>BERRIANT</b></a></h6></li>

            </ul>
  </div>
  <div class="tab-pane fade" id="Hair" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Hair Growth</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="orich_37.php" style="color: lightslategrey;"><b>ORICH 37</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="planoxia_rg.php" style="color: lightslategrey;"><b>PLANOXIA RG</b></a></h6></li>

            </ul>
  </div>
  <div class="tab-pane fade" id="Film" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Film Former</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1000.php" style="color: lightslategrey;"><b>Baycusan C 1000/1</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1001.php" style="color: lightslategrey;"><b>Baycusan C 1001/1</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1003.php" style="color: lightslategrey;"><b>Baycusan C 1003/1</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1004.php" style="color: lightslategrey;"><b>Baycusan C 1004/1</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1008.php" style="color: lightslategrey;"><b>Baycusan C 1008/1</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_1010.php" style="color: lightslategrey;"><b>Baycusan C 1010</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_c_2000.php" style="color: lightslategrey;"><b>Baycusan C 2000</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="baycusan_echo_e_1000.php" style="color: lightslategrey;"><b>Baycusan Echo 1000</b></a></h6></li>

            </ul>
  </div>

<div class="tab-pane fade" id="Slimming" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Slimming</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="RADIPO.php" style="color: lightslategrey;"><b>RADIPO</b></a></h6></li>
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="slimlite.php" style="color: lightslategrey;"><b>SLIMLITE</b></a></h6></li>

            </ul>
  </div>
  <div class="tab-pane fade" id="Genital" role="tabpanel" aria-labelledby="Surfactant-tab">
  <h2>Genital Hygiene</h2>
  <ul class="list-group" style="overflow-x: auto;" >
  <li class="list-group-item list-group-item-action list-group-item-light" ><h6><a href="berriant.php" style="color: lightslategrey;"><b>BERRIANT</b></a></h6></li>

            </ul>
  </div>
  </div>
    </div>
    <!-- /.col-md-8 -->
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
