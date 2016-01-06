</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="assets/js/menu.js"></script>
    <script src="assets/js/classie.js"></script>

     <!--js color textbox script-->
    <script type="text/javascript" src="assets/jscolor/jscolor.js"></script>

    <!--accordion script-->
    <script src="assets/js/accordion.js"></script>

	<!--editor script-->
    <script type="text/javascript" src="assets/js/editorScript.js"></script>

	<script src="assets/js/highcharts.js" type="text/javascript"></script>
    <script src="assets/js/charts.js" type="text/javascript"></script>

    <!--accordion script-->
    <script src="assets/js/accordion.js"></script>

    <!--zero clipboard script-->
    <script src="assets/zcb/jquery.zclip.js"></script>

    <!--owl carousel script-->
    <script src="assets/owl/owl.carousel.js"></script>
    <script src="assets/js/slider.js"></script>

    <!--script for image creatives search-->
    <script src="assets/js/search.js"></script>

    <!--script for text creatives search-->
    <script src="assets/js/search2.js"></script>

	<!--bootstrap select with search script-->
	<script src="assets/js/bootstrap-select.min.js" type="text/javascript"></script>


    <!-- subscriber page stylesheet -->
    <link href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>


    <!-- datatable tools -->
    <link href="datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
    <!-- <link href="datatables/tools/css/dataTables.tableTools.bootstrap.css" rel="stylesheet"> -->
    <script src="datatables/js/jquery.dataTables.js"></script>
    <script src="datatables/tools/js/dataTables.tableTools.js"></script>
    <!-- datatable tools -->

    

    <link href="assets/dragndrop/jquery.ezdz.css" rel="stylesheet" type="text/css">
    <script src="assets/dragndrop/jquery.ezdz.js"></script>




    <!-- subscriber page stylesheet -->    

    <!-- list page scripts -->
    <script src="assets/js/listscript.js"></script>
    <script src="assets/js/jquery.table2excel.js"></script>
    <!-- end list page scripts -->

    <script type="text/javascript">
        $(document).ready(function(){

            $('#mobileView').click(function(){
                $('#1colmail').css({"width":"320px"});
            });
            $('#desktopView').click(function(){
                $('#1colmail').css({"width":"650px"});
            })



            $('#txtCreative').click(function(){
                $('#imgCreativeRow').css({'display':'none'})
                $('#txtCreativeRow').css({'display':'block'});
            });

            $('#imgCreative').click(function(){
                $('#imgCreativeRow').css({'display':'block'});
                $('#txtCreativeRow').css({'display':'none'})
            });

            //ANIMATION FOR EACH CARD
            $('#imgCreativesWrapper .col-md-2').hide()

            $('#imgCreativesWrapper .col-md-2').each(function(i) {
               delay =(i)*300;
               setTimeout(function (div) {
                        div.show().addClass('animated fadeIn');
                    }, delay, $(this));
            });
            //END ANIMATION

            //script for domain picker
            $('.domainPicker').selectpicker({
		      style: 'btn-select',
		      size: 4
		  	});


		  	$(".domainList input[type='checkbox']").on('change', function(){
		  		if ($(this).is(':checked')) {
			  		$('.viewSubDomainList').removeClass('hidethisdiv');
			  		$('.editButtonsChecked li a').removeClass('disabled');
		  		}
		  		else{
		  			$('.viewSubDomainList').addClass('hidethisdiv');
		  			$('.editButtonsChecked li a').addClass('disabled');
		  		}
		  	});

		  	$("#checkalldomains").on('change', function(){
		        $(".domainList input[type='checkbox']").prop('checked', $(this).prop("checked"));
		    });

            $("#allListCheck").on('change', function(){
                $(".campaignList input[type='checkbox']").prop('checked', $(this).prop("checked"));
            });

            $(".checkallsubdomains").on('change', function(){
                $(this).closest('table').find(".subDomainList input[type='checkbox']").prop('checked', $(this).prop("checked"));
            });

		  	$('#addDomainsBtn').click(function(){
		  		$('.addDomainFormWrapper').css({'display':'block'});
		  	});

        });
    </script>
</html>