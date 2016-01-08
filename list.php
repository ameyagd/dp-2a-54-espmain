<?php 
    $pagename="Lists";
    $pagetitle="Lists";
    include('includes/header.php');
    if(isset($_REQUEST['listid'])){
       $listid = $_REQUEST['listid'];
    }
   
?>
<input type="hidden" id="listid" value="<?php echo $listid ?>"/>
<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <div>
               <div class="card">
                  <div class="content clearfix" id="listsinglechart">
                     <div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                  </div>
               </div>
            </div>
           <div>
               <div class="card">
                  <div class="content clearfix" id="listsinglechart">
                     <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-7">
            <div class="card listwrap">
               <div class="content">
   <div class="container">
      <div class="row mlistnav">
         <div class="col-md-8 ">
            <ul class="nav navbar-nav">
               <li class="nactive">
                  <a href="" class="mlistfchild">
                  Manage subscribers
                  </a>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Add subscribers
                  <b class="fa fa-angle-down"></b>
                  </a>
                  <ul class="dropdown-menu">
                     <li class=""><a href="javascript:void(0);" class="madduser">Add a subscriber</a></li>
                     <li class=""><a href="javascript:void(0);" class="mimportbtn">Import subscribers</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Statistics
                  <b class="fa fa-angle-down"></b>
                  </a>
                  <ul class="dropdown-menu">
                     <li class=""><a href="javascript:void(0);" id="liststats">List Statistics</a></li>
                     <li class=""><a href="javascript:void(0);" id="overallliststats">Overall Statistics</a></li>
                  </ul>
                  
               </li>
            </ul>
         </div>
         <div  class="col-md-4">
            <div class="pull-right unsubscribewrap">
               <a href="javascript:void(0);" class="btn lgreybtn madduser">Add Subscriber</a>
               <a href="javascript:void(0);" class="btn lgreybtn mdeluser" id="">Delete</a>
            </div>
         </div>
      </div>
      <div class="row" id="mimportbox">
      <!--import form -->
      
         <div class="col-md-12">
            <div class="container importboxcontainer">
               <div class="card">
                  <form id="importform" name="importform" method="post" action="" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-md-12">
                           <h4 class="listtitle">Where do you want to import subscribers from?</h4>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <input type="radio" name="radioList1" id="radioList1">
                              <label class="rlabel" for="radioList1"><span></span>CSV or tab-delimited text file</label>
                              <span class="rdesc">Import contacts from .csv files</span>
                           </div>
                           <div id="listimport" class="form-group listimport">
                              <input type="file" name="importcsv" id="importcsv">
                           </div>
                         
                           <div class="form-group" style="padding-top:10px">
                            <input type="submit" class="btn btn-info greybtn" value="Import Data">
                              <a href="lists.php" class="cancel">Back</a>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </div>
                  </form>
                 
               </div>
            </div>
         </div>

      <!-- end import form -->
     </div>
        <!-- add subscriber -->
      <div class="row madduseredit" id="madduseredit">
         <!-- <div  class="col-md-1 col-xs-1 hideonmob">&nbsp;</div> -->
         <div class="col-md-6 col-xs-12 leftrightpaddingzero">
            <div class="">
               <div class="header">
                  <h4 class="title">Add a subscriber</h4>
               </div>
               <form>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                           <label>First Name</label>
                           <input type="text" class="form-control" placeholder="First Name" value="Mike">
                        </div>
                     </div>
                    <div class="col-md-6">
                        <div class="form-group">
                           <label>Last Name</label>
                           <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                        </div>
                     </div>
                  </div>
                 
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Email address</label>
                           <input type="email" class="form-control" placeholder="Email">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <label class="form-group">
                           <input type="checkbox" name="" id="terms">
                           <label for="terms"><span></span></label>
                           If this person is already on my list, update their profile.  
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <label class="form-group">
                           <input type="checkbox" name="" id="terms2">
                           <label for="terms2"><span></span></label>
                           This person gave me permission to email them. 
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="alert alert-info alert-with-icon" data-notify="container">
                           <span data-notify="icon" class="pe-7s-info infoicon"></span>
                           <span data-notify="message">
                           This person will not receive a confirmation email from Email Zilla. Subscribers added manually won't have an opt-in IP address or date in your records.</span>
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-info greybtn">Save Profile</button>
                  <a href="javascript:void(0)" class="cancel" id="mcancel">Cancel</a>
                  <div class="clearfix"></div>
               </form>
            </div>
         </div>
      </div>
      <!-- end add subscriber -->
      <div class="row">
         <div class="col-md-12">
            <div class="card card-plain mlistbox">
               <div class="row">
                  <div class="col-md-8">
                     <h4 class="title">View Subscribers</h4>
                  </div>
               </div>
               <div class="table-responsive subscribertablewrap">
                  <table id="memberlist" class="table table-bordred table-striped memberlist checklistclass">
                     <thead>
                        <th>
                           <div class="listcheckall">    
                              <input type="checkbox" name="mlistcheckall" id="listcheckall" onclick="checkChecked()">
                              <label for="listcheckall"><span></span></label>
                           </div>
                        </th>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>IP Address</th>
                        <th>Last Changed</th>
                        <th>Edit</th>
                        <th>Delete</th>
                     </thead>
                     <tbody>

                      <!-- php code for json data-->
                        <?php
                        $json = file_get_contents('listdata.json');
                        $obj = json_decode($json, true);
                        $listdata = $obj['lists'];
                        if(isset($listid)){
                           $currentlistid = $listid - 1; //to acheived for array
                           $subscribersdata = $listdata[$currentlistid]['subscribers'];
                        
                        
                        foreach ($subscribersdata as $value) {
                         $checkID = $value['id'];
                        ?>
                           <tr>
                              <td>
                                 <div class="listcheckbox excludeThisClass">
                                    <input type="checkbox" name="list<?php echo $checkID; ?>Check" id="list<?php echo $checkID; ?>Check" class="lisinglecheck" onclick="checkChecked()">
                                    <label for="list<?php echo $checkID; ?>Check"><span></span></label>
                                 </div>
                              </td>
                              <td><?php echo $value['email'] ?></td>
                              <td><?php echo $value['fname'] ?></td>
                              <td><?php echo $value['lname'] ?></td>
                              <td><?php echo $value['ip'] ?></td>
                              <td><?php echo $value['lasteditdate'] ?></td>
                              <td>
                                 <p data-placement="top" data-toggle="tooltip" title="Edit" onclick="editsubscriberdetails('<?php echo $value['email']; ?>','<?php echo $value['fname']; ?>','<?php echo $value['lname']; ?>')"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                              </td>
                              <td>
                                 <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                              </td>
                           </tr> 



<?php
}
}
?>

                     </tbody>
                  </table>
                   <!-- start modal modal -->
                  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                              <h4 class="modal-title custom_align" id="Heading">Edit Subscriber Details</h4>
                           </div>
                           <div class="modal-body">
                              <div class="form-group">
                                 <input class="form-control" type="email" value="kbl@gmail.com" name="email">
                              </div>
                              <div class="form-group">
                                 <input class="form-control" type="text" value="Ryan" name="fname">
                              </div>
                              <div class="form-group">
                                 <input class="form-control" type="text" value="Desouza" name="lname">
                              </div>
                              <!-- <div class="form-group">
                                 <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
                                 </div> -->
                           </div>
                           <div class="modal-footer ">
                              <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                           </div>
                        </div>
                        <!-- /.modal-content --> 
                     </div>
                     <!-- /.modal-dialog --> 
                  </div>
                  <!-- end modal editor   -->
                  
               </div>
            </div>
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
<script type="text/javascript">
$(function () {
     $('#container2').highcharts({
             chart: {
            type: 'column'
        },
        title: {
            text: 'List Performance Compared To Others'
        },
        xAxis: {
            categories: ['List Name 1', 'List Name 2', 'List Name 3', 'List Name 4']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total List Reached'
            }
        },
        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            shared: true
        },
        plotOptions: {
            column: {
                stacking: 'percent'
            }
        },
        series: [{
            name: 'Open',
            data: [5, 2, 10, 20]
        }, {
            name: 'Clicks',
            data: [3, 2, 5, 10]
        }, {
            name: 'Leads',
            data: [2, 2, 3, 6]
        }]
        });

     //overall stats

     $('#container1').highcharts({
              chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Browse Lists Success January, 2015 to May, 2015'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Lists',
            colorByPoint: true,
            data: [{
                name: 'List Name 1',
                y: 56.33
            }, {
                name: 'List Name 2',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'List Name 3',
                y: 10.38
            }, {
                name: 'List Name 4',
                y: 4.77
            }, {
                name: 'Others',
                y: 0.91
            }]
        }]
        });



});


$(document).ready(function(){


$("form#importform").submit(function(){
// bCheck is a input type button
 var fileName = $("#importcsv").val();
    var exts = ['csv'];
      $('div[id^="error"]').remove();    
    if(fileName) { // returns true if the string is not empty

        // split file name at dot
        var get_ext = fileName.split('.');
        // reverse name to check extension
        get_ext = get_ext.reverse();
        // check file type is valid as given in 'exts' array
        if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1 ){
          

         //submit code
         var formData = new FormData($(this)[0]);

          $.ajax({
              url: "post.php",
              type: 'POST',
              data: formData,
              async: false,
              success: function (data) {
                  alert(data);
              },
              cache: false,
              contentType: false,
              processData: false
          });

          return false;
         // 

        } else {
          $("#listimport").after("<div id='error' class='error' style='text-align:left'>Invalid File; Please Select CSV File</div>");
           return false;
        }
     
    } else { // no file was selected
          $("#listimport").after("<div id='error' class='error' style='text-align:left'>Please Select CSV File</div>");
           return false;
    }

});


})


</script>
