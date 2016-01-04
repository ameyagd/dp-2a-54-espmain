<?php 
    $pagename="Import Subscribers";
    $pagetitle="Import Subscribers";
    include('includes/header.php'); 
?>
                     
                     
        <div class="content">
           
            <div class="container importboxcontainer">
                <div class="card">

                <!-- <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="alert alert-warning">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span><b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                        </div>
                    </div>
                </div>     -->

                <form id="importform" name="importform" method="post" action="upload1.php" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-12"><h4 class="listtitle">Where do you want to import subscribers from?</h4></div>

                </div>
                <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                    <input type="radio" name="radioList1" id="radioList1">
                    <label class="rlabel" for="radioList1"><span></span>CSV or tab-delimited text file</label>
                    <span class="rdesc">Import contacts from .csv or .txt files</span>
                </div>
                <div class="form-group listimport">
                    <input type="file" name="importcsv" id="importcsv">
                </div>    
                <div class="form-group">
                    <input type="radio" name="radioList1" id="radioList2">
                    <label class="rlabel" for="radioList2"><span></span>Copy/paste from file </label>
                    <span class="rdesc">Copy and paste contacts from .xls or .xlsx files</span>
                </div>

                <div class="form-group manualimport">
                    <textarea class="form-control" placeholder="Email Address...    First Name...    Last Name...    Untitled...
Email Address...    First Name...    Last Name...    Untitled...
Email Address...    First Name...    Last Name...    Untitled...
Email Address...    First Name...    Last Name...    Untitled..." rows="6" cols="10" name="importsdata" id="importsdata"></textarea>
                    
                </div>

               

              <!--   <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                           <input type="checkbox" name="" id="terms2">
                              <label for="terms2"><span></span></label>
                          <b>I understand that my billing plan may be automatically upgraded.</b> 
<div class="checkbox_description">If your import causes your list to exceed your Forever Free Plan subscriber limit, you’ll need to <a href="" target="_blank">upgrade your billing plan</a> to accommodate the new subscribers before you can send. <a href="" target="_blank" >Undo your list import before you send</a> to revert to the Forever Free Plan.</div>

                      </div>        
                  </div>

                </div> -->

                <div class="form-group" style="padding-top:10px">
                   <a href="javascript:void(0);" id="importsubmit" class="btn btn-info greybtn">Submit</a>
                   <a href="lists.php" class="cancel">Back</a>
                    <div class="clearfix"></div>
                </div>


                


                </div>
                </div>
                </form>

                </div>

                
                
                
            

                                 
           
          
            </div>
        </div>
        
    </div>   
</div>


<?php include('includes/footer.php'); ?>
<script type="text/javascript">
$(document).ready(function(){
$("#importsubmit").click(function(){ // bCheck is a input type button
    var fileName = $("#importcsv").val();
    var exts = ['csv'];
    if(fileName) { // returns true if the string is not empty

        

        if ( fileName ) {
        // split file name at dot
        var get_ext = fileName.split('.');
        // reverse name to check extension
        get_ext = get_ext.reverse();
        // check file type is valid as given in 'exts' array
        if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1 ){
          $( "#importform" ).submit();
        } else {
          alert( 'Invalid file!' );
        }

     }   
    } else { // no file was selected

        var importsdata = $("#importsdata").val();
        if(importsdata==""){
            alert("Neither file selected nor manual data added");
        }else{
            $( "#importform" ).submit();
        }

        
    }
});




});

function load() {
document.importform.reset();
}
window.onload = load;
</script>