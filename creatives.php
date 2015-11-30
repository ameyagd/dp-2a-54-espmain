
<?php 
    $pagename="Creatives";
    $pagetitle="Creatives";
    include('includes/header.php'); 
?>
                     
                     
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header">
                            <h4 class="title" style="margin-top:0">
                                Choose Creative Type
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <a href="javascript:;" id="txtCreative">
                                <div class="creativeHeader">
                                    <h4 class="title mainTitle"><i class="pe-7s-note2"></i> Text Creative</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="card">
                            <a href="javascript:;" id="imgCreative">
                                <div class="creativeHeader">
                                    <h4 class="title mainTitle"><i class="pe-7s-photo"></i>  Image Creative</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!--text creatives-->
                <div class="row" id="txtCreativeRow">
                    <div class="col-md-12">
                        <div class="header">
                            <h4 class="title" style="margin-top:0">
                               Text Creatives <div class="pull-right"><input class="search1" placeholder="Search" /></div>
                            </h4>
                        </div>
                    </div>

                    <div id="txtCreativesWrapper">
                        <div class="col-md-2">
                            <div class="card">
                                <a href="#">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Creative 1</h4>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card">
                                <div class="header creativeHeader">
                                    <h4 class="title">Creative 2</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--image creatives-->
                <div class="row imgCreativeRow" id="imgCreativeRow">
                    <div class="col-md-12">
                        <div class="header">
                            <h4 class="title" style="margin-top:0">
                               Image Creatives <div class="pull-right"><input class="search" placeholder="Search" /></div>
                            </h4>
                        </div>
                    </div>

                    <div id="imgCreativesWrapper">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="card">
                                    <a href="editMailer.php?title=Email-rentToOwn-v1-sept2015">
                                        <div class="header creativeHeader">
                                            <h4 class="title">Email-rentToOwn-v1-sept2015</h4>
                                        </div>
                                        <div class="content creativeContent">
                                            <img src="assets/img/creative1.jpg" />
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card">
                                    <a href="editMailer.php?title=Email-newCar-v2-sept2015">
                                        <div class="header creativeHeader">
                                            <h4 class="title">Email-newCar-v2-sept2015</h4>
                                        </div>
                                        <div class="content creativeContent">
                                            <img src="assets/img/creative2.jpg" />
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card">
                                    <a href="editMailer.php?title=Email-laserHairRemoval-v2-sept2015">
                                        <div class="header creativeHeader">
                                            <h4 class="title">Email-laserHairRemoval-v2-sept2015</h4>
                                        </div>
                                        <div class="content creativeContent">
                                            <img src="assets/img/creative3.jpg" />
                                        </div>
                                    </a>
                                </div>
                            </div>                  

                            <div class="col-md-2">
                                <div class="card">
                                    <a href="editMailer.php?title=Email-RentalApartments-v2-sept2015">
                                        <div class="header creativeHeader">
                                            <h4 class="title">Email-RentalApartments-v2-sept2015</h4>
                                        </div>
                                        <div class="content creativeContent">
                                            <img src="assets/img/creative4.jpg" />
                                        </div>
                                    </a>
                                </div>
                            </div> 

                            <div class="col-md-2">
                                <div class="card">
                                    <a href="editMailer.php?title=Email-houseCleaning-v2-aug2015">
                                        <div class="header creativeHeader">
                                            <h4 class="title">Email-houseCleaning-v2-aug2015</h4>
                                        </div>
                                        <div class="content creativeContent">
                                            <img src="assets/img/creative5.jpg" />
                                        </div>
                                    </a>
                                </div>
                            </div> 

                            <div class="col-md-2">
                                <div class="card">
                                    <a href="editMailer.php?title=Email-checkingAccount-v1-sept2015">
                                        <div class="header creativeHeader">
                                            <h4 class="title">Email-checkingAccount-v1-sept2015</h4>
                                        </div>
                                        <div class="content creativeContent">
                                            <img src="assets/img/creative6.jpg" />
                                        </div>
                                    </a>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="card">
                                    <a href="editMailer.php?title=Email-VOIP-v2-sept2015">
                                        <div class="header creativeHeader">
                                            <h4 class="title">Email-VOIP-v2-sept2015</h4>
                                        </div>
                                        <div class="content creativeContent">
                                            <img src="assets/img/creative7.jpg" />
                                        </div>
                                    </a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

              
                    
            </div>    
        </div>
        
    </div>

    
</div>

<?php include('includes/footer.php'); ?>