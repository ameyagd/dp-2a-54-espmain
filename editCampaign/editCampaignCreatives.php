<?php 
    @($camp_id=$_REQUEST['id']);
    $campnamejson=file_get_contents('../campaign.json');
    $campnameobj=json_decode($campnamejson, true);
    $campnamedata = $campnameobj['campaign'];
    $campnameid=$camp_id-1;
    $campnamefin=$campnamedata[$campnameid]['info']['camp_name'];

    $pagename="Campaigns";
    $pagetitle="Campaigns";
    include('../includes/innerHeader.php'); 
?>

<div class="content">
     
	<div class="container-fluid creativesContainer">
        
       
        <div class="row imgCreativeRow">
            <div class="col-md-12">
                <div class="header">
                    <h4 class="title" style="margin-top:0">
                       Creative mapped<div class="pull-right"><input class="search" placeholder="Search" /></div>
                    </h4>
                </div>
            </div>

            <div id="imgCreativesWrapper clearfix">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="card">
                                <a href="../editMailer.php?title=Email-rentToOwn-v1-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-rentToOwn-v1-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="../assets/img/creative1.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card">
                                <a href="../editMailer.php?title=Email-newCar-v2-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-newCar-v2-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="../assets/img/creative2.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card">
                                <a href="../editMailer.php?title=Email-laserHairRemoval-v2-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-laserHairRemoval-v2-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="../assets/img/creative3.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div>                  

                        <div class="col-md-2">
                            <div class="card">
                                <a href="../editMailer.php?title=Email-RentalApartments-v2-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-RentalApartments-v2-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="../assets/img/creative4.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div> 

                        <div class="col-md-2">
                            <div class="card">
                                <a href="../editMailer.php?title=Email-houseCleaning-v2-aug2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-houseCleaning-v2-aug2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="../assets/img/creative5.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div> 

                        <div class="col-md-2">
                            <div class="card">
                                <a href="../editMailer.php?title=Email-checkingAccount-v1-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-checkingAccount-v1-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="../assets/img/creative6.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="card">
                                <a href="../editMailer.php?title=Email-VOIP-v2-sept2015">
                                    <div class="header creativeHeader">
                                        <h4 class="title">Email-VOIP-v2-sept2015</h4>
                                    </div>
                                    <div class="content creativeContent">
                                        <img src="../assets/img/creative7.jpg" />
                                    </div>
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
       


        <div class="stepFooter clearfix">
            <ul class="stepPrev">
                <li><i class="fa fa-chevron-left"></i></li>
                <li><a href="editCampaignSetup.php?id=<?php echo $camp_id; ?>" class="stepLink">Previous</a></li>
            </ul>

            <ul class="stepList">
                <li><a href="editCampaignSetup.php?id=<?php echo $camp_id; ?>" class="stepLink">Setup </a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="editCampaignDomains.php?id=<?php echo $camp_id; ?>" class="stepLink active">Domains </a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="editCampaignRecepients.php?id=<?php echo $camp_id; ?>" class="stepLink">Lists</a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="editCampaignCreatives.php?id=<?php echo $camp_id; ?>" class="stepLink">Template</a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="editCampaignEditMailer.php?id=<?php echo $camp_id; ?>" class="stepLink">Design</a></li>
                <li><i class="fa fa-chevron-right"></i></li>

                <li><a href="editCampaignConfirm.php?id=<?php echo $camp_id; ?>" class="stepLink">Confirm</a></li>
            </ul>

            <ul class="stepNext">
                <li><a href="editCampaignRecepients.php?id=<?php echo $camp_id; ?>" class="stepLink">Next</a></li>
                <li><i class="fa fa-chevron-right"></i></li>
            </ul>
        </div> 
    </div>
</div>

<?php include('../includes/innerFooter.php'); ?>

<script type="text/javascript">
$(document).ready(function() {
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };

    var id = getUrlParameter('id');

    var test = [];
    $.getJSON( "../campaign.json", function( data ) {
        $.each(data, function (item, value) {
            $.each(value, function (i, object) {
                if (i == id-1) {
                    $.each(object, function (subI, subObject) {
                        if(subI=="creative_details"){
                            $.each(subObject, function (sub1I, subObject1) {
                                // console.log(sub1I + "=" + subObject1);
                                if(sub1I=="creative_name"){                                    
                                    var creative_name=subObject1;                                    
                                    test.push(creative_name);
                                }                                
                            });
                        }
                    });
                }
            });     
        });

        var creative_name=test;
        console.log(creative_name);
        console.log($('.creativeHeader .title').text());
        if($('.creativeHeader .title').text() == creative_name){
            alert('test');
        };

    });

});
</script>