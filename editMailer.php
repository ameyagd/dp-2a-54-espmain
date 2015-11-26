<?php 
    $pagename="Email Editor";
    include('includes/header.php'); 
?>
                     
                     
        <div class="content contentEditor">
            <div class="container-fluid">    
                <div class="row">
                	<div class="col-md-12">
                		
						<?php
							// $type=$_REQUEST['type'];
                            $title=$_REQUEST['title'];
							if($title==""){
								header("location:creatives.php");
							}
                           
							else {
                                echo "<div class='header'>
                                <h4 class='title creativeTitle'> $title <div class='pull-right'><a id='desktopView'>Desktop</a><a id='mobileView'>Mobile</a></div></h4>
                            </div>
                            <iframe src='Creatives/$title/index.html' width='650' height='800' id='1colmail' class='animated slideInLeft'></iframe>
                            ";
                            }
						?>
					</div>
				</div>
			</div>
		</div>

		<div class="rightSidebar animated slideInRight">
			<div class="col-md-12">
				<h4>Settings</h4>

                <!-- <div class='card clearfix'>
                    <div class='accordion'>
                        <div class='accordion-section'>
                            <a class='accordion-section-title active' href='#accordion-0'>Creative</a>
                            <div id='accordion-0' class='accordion-section-content clearfix' style='display:block'>
                                <label>Background Color</label><input type='text' id='creativeBG' class='color creativeBG'/>
                                
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- ALL CTA WRAPPER-->
                <div class="ctaWrapper">                    
                </div>
                <!--END ALL CTA WRAPPER-->

                <!--ALL IMAGES WRAPPER-->
                <div class="imagesWrapper"></div>
                <!--END ALL IMAGES WRAPPER-->

                <!--ALL TEXT WRAPPER-->
                <div class="textWrapper"></div>
                <!--END ALL TEXT WRAPPER-->



                <input type="button" value="Get Code" class="btn-lg animated2 fadeIn" id="gcbtn"/>

                
                
			</div>
		</div>
	</div>


    <div class="stepFooter">
        <ul>
            <li><a href="campaignSetup.php" class="stepLink">Setup </a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignRecepients.php" class="stepLink">List</a></li>
            <li><i class="fa fa-chevron-right"></i></li>            

            <li><a href="creatives.php" class="stepLink">Template</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="editMailer.php" class="stepLink active">Design</a></li>
            <li><i class="fa fa-chevron-right"></i></li>

            <li><a href="campaignConfirm.php" class="stepLink">Confirm</a></li>
        </ul>
    </div>  

<?php include('includes/footer.php'); ?>
