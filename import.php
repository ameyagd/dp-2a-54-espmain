 <!--import form -->
      
         <div class="col-md-12">
            <div class="container importboxcontainer">
               <div class="card">
                  <form id="importform" name="importform" method="post" action="#" enctype="multipart/form-data">
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
                           <div class="form-group listimport">
                              <input type="file" name="importcsv" id="importcsv">
                           </div>
                         
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

      <!-- end import form -->
