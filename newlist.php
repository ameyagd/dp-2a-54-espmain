<?php 
   $pagename="Create List";
   $pagetitle="Create List";
   include('includes/header.php'); 
   ?>
<style type="text/css"></style>
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="results"></div>
         <div class="col-md-12">
            <div class="card">
               <div class="content clearfix">
                  <div class="row">
                     <form id="addlist" name="addlist" method="post" action="" enctype="multipart/form-data">
                     <div class="col-md-7">
                         <div class="clist">
                        <div class="row">
                           <div class="col-md-12 ">
                              <div class="content addlistedit"  id="addlistedit">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>List Name</label>
                                             <input type="text" class="form-control" placeholder="List Name" name="listname">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Company / organization</label>
                                             <input type="text" class="form-control" placeholder="Company / organization"  name="company">
                                          </div>
                                       </div>
                            
                                    </div>
                          
                                    <hr>
                                   
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>City</label>
                                             <input type="text" class="form-control" placeholder="City"  name="city">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="description" class="">Country</label> 
                                             <select name="country" id="country" name="country">
                                                <option value="">Select a country</option>
                                                <option value="164">USA</option>
                                                <option value="286">Aaland Islands</option>
                                                <option value="274">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="178">American Samoa</option>
                                                <option value="4">Andorra</option>
                                                <option value="5">Angola</option>
                                                <option value="176">Anguilla</option>
                                                <option value="175">Antigua And Barbuda</option>
                                                <option value="6">Argentina</option>
                                                <option value="7">Armenia</option>
                                                <option value="179">Aruba</option>
                                                <option value="8">Australia</option>
                                                <option value="9">Austria</option>
                                                <option value="10">Azerbaijan</option>
                                                <option value="11">Bahamas</option>
                                                <option value="12">Bahrain</option>
                                                <option value="13">Bangladesh</option>
                                                <option value="14">Barbados</option>
                                                <option value="15">Belarus</option>
                                                <option value="16">Belgium</option>
                                                <option value="17">Belize</option>
                                                <option value="18">Benin</option>
                                                <option value="19">Bermuda</option>
                                                <option value="20">Bhutan</option>
                                                <option value="21">Bolivia</option>
                                                <option value="22">Bosnia and Herzegovina</option>
                                                <option value="23">Botswana</option>
                                                <option value="181">Bouvet Island</option>
                                                <option value="24">Brazil</option>
                                                <option value="180">Brunei Darussalam</option>
                                                <option value="25">Bulgaria</option>
                                                <option value="26">Burkina Faso</option>
                                                <option value="27">Burundi</option>
                                                <option value="28">Cambodia</option>
                                                <option value="29">Cameroon</option>
                                                <option value="30">Canada</option>
                                                <option value="31">Cape Verde</option>
                                                <option value="32">Cayman Islands</option>
                                                <option value="33">Central African Republic</option>
                                                <option value="34">Chad</option>
                                                <option value="35">Chile</option>
                                                <option value="36">China</option>
                                                <option value="185">Christmas Island</option>
                                                <option value="37">Colombia</option>
                                                <option value="204">Comoros</option>
                                                <option value="38">Congo</option>
                                                <option value="183">Cook Islands</option>
                                                <option value="268">Costa Rica</option>
                                                <option value="275">Cote D'Ivoire</option>
                                                <option value="40">Croatia</option>
                                                <option value="276">Cuba</option>
                                                <option value="298">Curacao</option>
                                                <option value="41">Cyprus</option>
                                                <option value="42">Czech Republic</option>
                                                <option value="318">Democratic Republic of the Congo</option>
                                                <option value="43">Denmark</option>
                                                <option value="44">Djibouti</option>
                                                <option value="186">Dominica</option>
                                                <option value="289">Dominica</option>
                                                <option value="187">Dominican Republic</option>
                                                <option value="45">Ecuador</option>
                                                <option value="46">Egypt</option>
                                                <option value="47">El Salvador</option>
                                                <option value="48">Equatorial Guinea</option>
                                                <option value="49">Eritrea</option>
                                                <option value="50">Estonia</option>
                                                <option value="51">Ethiopia</option>
                                                <option value="189">Falkland Islands</option>
                                                <option value="191">Faroe Islands</option>
                                                <option value="52">Fiji</option>
                                                <option value="53">Finland</option>
                                                <option value="54">France</option>
                                                <option value="193">French Guiana</option>
                                                <option value="277">French Polynesia</option>
                                                <option value="56">Gabon</option>
                                                <option value="57">Gambia</option>
                                                <option value="58">Georgia</option>
                                                <option value="59">Germany</option>
                                                <option value="60">Ghana</option>
                                                <option value="194">Gibraltar</option>
                                                <option value="61">Greece</option>
                                                <option value="195">Greenland</option>
                                                <option value="192">Grenada</option>
                                                <option value="196">Guadeloupe</option>
                                                <option value="62">Guam</option>
                                                <option value="198">Guatemala</option>
                                                <option value="270">Guernsey</option>
                                                <option value="63">Guinea</option>
                                                <option value="65">Guyana</option>
                                                <option value="200">Haiti</option>
                                                <option value="66">Honduras</option>
                                                <option value="67">Hong Kong</option>
                                                <option value="68">Hungary</option>
                                                <option value="69">Iceland</option>
                                                <option value="70" selected="selected">India</option>
                                                <option value="71">Indonesia</option>
                                                <option value="278">Iran</option>
                                                <option value="279">Iraq</option>
                                                <option value="74">Ireland</option>
                                                <option value="322">Isle of Man</option>
                                                <option value="75">Israel</option>
                                                <option value="76">Italy</option>
                                                <option value="202">Jamaica</option>
                                                <option value="78">Japan</option>
                                                <option value="288">Jersey  (Channel Islands)</option>
                                                <option value="79">Jordan</option>
                                                <option value="80">Kazakhstan</option>
                                                <option value="81">Kenya</option>
                                                <option value="203">Kiribati</option>
                                                <option value="82">Kuwait</option>
                                                <option value="83">Kyrgyzstan</option>
                                                <option value="84">Lao People's Democratic Republic</option>
                                                <option value="85">Latvia</option>
                                                <option value="86">Lebanon</option>
                                                <option value="87">Lesotho</option>
                                                <option value="88">Liberia</option>
                                                <option value="281">Libya</option>
                                                <option value="90">Liechtenstein</option>
                                                <option value="91">Lithuania</option>
                                                <option value="92">Luxembourg</option>
                                                <option value="208">Macau</option>
                                                <option value="93">Macedonia</option>
                                                <option value="94">Madagascar</option>
                                                <option value="95">Malawi</option>
                                                <option value="96">Malaysia</option>
                                                <option value="97">Maldives</option>
                                                <option value="98">Mali</option>
                                                <option value="99">Malta</option>
                                                <option value="207">Marshall Islands</option>
                                                <option value="210">Martinique</option>
                                                <option value="100">Mauritania</option>
                                                <option value="212">Mauritius</option>
                                                <option value="241">Mayotte</option>
                                                <option value="101">Mexico</option>
                                                <option value="102">Moldova, Republic of</option>
                                                <option value="103">Monaco</option>
                                                <option value="104">Mongolia</option>
                                                <option value="290">Montenegro</option>
                                                <option value="294">Montserrat</option>
                                                <option value="105">Morocco</option>
                                                <option value="106">Mozambique</option>
                                                <option value="242">Myanmar</option>
                                                <option value="107">Namibia</option>
                                                <option value="108">Nepal</option>
                                                <option value="109">Netherlands</option>
                                                <option value="110">Netherlands Antilles</option>
                                                <option value="213">New Caledonia</option>
                                                <option value="111">New Zealand</option>
                                                <option value="112">Nicaragua</option>
                                                <option value="113">Niger</option>
                                                <option value="114">Nigeria</option>
                                                <option value="217">Niue</option>
                                                <option value="214">Norfolk Island</option>
                                                <option value="272">North Korea</option>
                                                <option value="116">Norway</option>
                                                <option value="117">Oman</option>
                                                <option value="118">Pakistan</option>
                                                <option value="222">Palau</option>
                                                <option value="282">Palestine</option>
                                                <option value="119">Panama</option>
                                                <option value="219">Papua New Guinea</option>
                                                <option value="120">Paraguay</option>
                                                <option value="121">Peru</option>
                                                <option value="122">Philippines</option>
                                                <option value="221">Pitcairn</option>
                                                <option value="123">Poland</option>
                                                <option value="124">Portugal</option>
                                                <option value="253">Puerto Rico</option>
                                                <option value="126">Qatar</option>
                                                <option value="315">Republic of Kosovo</option>
                                                <option value="127">Reunion</option>
                                                <option value="128">Romania</option>
                                                <option value="129">Russia</option>
                                                <option value="130">Rwanda</option>
                                                <option value="205">Saint Kitts and Nevis</option>
                                                <option value="206">Saint Lucia</option>
                                                <option value="237">Saint Vincent and the Grenadines</option>
                                                <option value="132">Samoa (Independent)</option>
                                                <option value="227">San Marino</option>
                                                <option value="255">Sao Tome and Principe</option>
                                                <option value="133">Saudi Arabia</option>
                                                <option value="134">Senegal</option>
                                                <option value="266">Serbia</option>
                                                <option value="135">Seychelles</option>
                                                <option value="136">Sierra Leone</option>
                                                <option value="137">Singapore</option>
                                                <option value="302">Sint Maarten</option>
                                                <option value="138">Slovakia</option>
                                                <option value="139">Slovenia</option>
                                                <option value="223">Solomon Islands</option>
                                                <option value="140">Somalia</option>
                                                <option value="141">South Africa</option>
                                                <option value="257">South Georgia and the South Sandwich Islands</option>
                                                <option value="142">South Korea</option>
                                                <option value="311">South Sudan</option>
                                                <option value="143">Spain</option>
                                                <option value="144">Sri Lanka</option>
                                                <option value="293">Sudan</option>
                                                <option value="146">Suriname</option>
                                                <option value="225">Svalbard and Jan Mayen Islands</option>
                                                <option value="147">Swaziland</option>
                                                <option value="148">Sweden</option>
                                                <option value="149">Switzerland</option>
                                                <option value="285">Syria</option>
                                                <option value="152">Taiwan</option>
                                                <option value="260">Tajikistan</option>
                                                <option value="153">Tanzania</option>
                                                <option value="154">Thailand</option>
                                                <option value="233">Timor-Leste</option>
                                                <option value="155">Togo</option>
                                                <option value="232">Tonga</option>
                                                <option value="234">Trinidad and Tobago</option>
                                                <option value="156">Tunisia</option>
                                                <option value="157">Turkey</option>
                                                <option value="158">Turkmenistan</option>
                                                <option value="287">Turks &amp; Caicos Islands</option>
                                                <option value="159">Uganda</option>
                                                <option value="161">Ukraine</option>
                                                <option value="162">United Arab Emirates</option>
                                                <option value="262">United Kingdom</option>
                                                <option value="163">Uruguay</option>
                                                <option value="165">Uzbekistan</option>
                                                <option value="239">Vanuatu</option>
                                                <option value="166">Vatican City State (Holy See)</option>
                                                <option value="167">Venezuela</option>
                                                <option value="168">Vietnam</option>
                                                <option value="169">Virgin Islands (British)</option>
                                                <option value="238">Virgin Islands (U.S.)</option>
                                                <option value="188">Western Sahara</option>
                                                <option value="170">Yemen</option>
                                                <option value="173">Zambia</option>
                                                <option value="174">Zimbabwe</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="description" class="">Remind people how they signed up to your list</label> 
                                             <select class="" id="" name="reminderfrom">
                                                <option value="">Reuse a reminder from another list</option>

                                                <?php
                                                $json = file_get_contents('listdata.json');
                                                $obj = json_decode($json, true);
                                                $listdata = $obj['lists'];
                                                // print_r($listdata);
                                                foreach ($listdata as $value) {
                                                $listid = $value['info']['list_id'];
                                                ?>
                                                <option value="<?php echo $listid; ?>"><?php echo $value['info']['list_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                             </select>
                                          </div>
                                          <div class="">
                                             <div class="form-group">
                                                <textarea name="description" id="description" rows="4" name="info">Write a short reminder about how the recipient joined your list</textarea>
                                                <div class="field-help">Example: “You are receiving this email because you opted in at our website … ” or “We send special offers to customers who opted in at … ”</div>
                                             </div>
                                          </div>

                                       </div>
                                       <!-- <div class="col-md-6">
                                          
                                       </div> -->
                                       </div>
                                       <div class="clearfix topspace"></div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <h3>Notifications <span>sent to <input id="editnotifyinput" type="text" value="abc@gmail.com " name="notifyemail" class="notifyemail" disabled></ins><a href="javascript:void(0);" id="editnotifybtn">edit</a></span></h3>
                                          </div>

                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-4">
                                          <label class="form-group">
                                             <input type="checkbox" name="dailysummary" id="terms" checked>
                                             <label for="terms"><span></span></label>
                                             Daily summary<br>
                                          </label>
                                          <div class="notfinfo">Summary of subscribe/unsubscribe activity</div> 
                                       </div>
                                       <div class="col-md-4">
                                          <label class="form-group">
                                             <input type="checkbox" name="onebyone" id="terms2">
                                             <label for="terms2"><span></span></label>
                                             One-by-one<br>
                                          </label>
                                          <div class="notfinfo">Subscribe notifications as they happen</div> 
                                       </div>
                                       <div class="col-md-4">
                                          <label class="form-group">
                                             <input type="checkbox" name="unsubscribenotify" id="terms3">
                                             <label for="terms3"><span></span></label>
                                             One-by-one<br>
                                          </label>
                                          <div class="notfinfo">Unsubscribe notifications as they happen</div> 
                                       </div>
                                    </div>
                                    <div class="clearfix topspace"></div>
                                    <hr>
                                    <div class="clearfix topspace"></div>
                                    <input type="submit" class="btn btn-info greybtn" id="submit" value="Add List">
                                    <a href="lists.php" class="cancel">Cancel</a>
                                    <div class="clearfix topspace"></div>
                                 
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="col-md-5">
                        <div id="dropfile" class="col-md-12 dropfile">
                        <div class="container">
                        <div class="row">
                        <div class="form-group  pull-right">
                        <input type="file" name="importcsv" id="importcsv">
                        </div>
                        </div>


                        </div>
                        </div>
                     </div>
                    </form>
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
$(document).ready(function(){
$("form#addlist").submit(function(){

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
          $("#dropfile").after("<div id='error' class='error' style='text-align:center'>Invalid File; Please Select CSV File</div>");
           return false;
        }
     
    } else { // no file was selected
          $("#dropfile").after("<div id='error' class='error' style='text-align:center'>Please Select CSV File</div>");
           return false;
    }
    
});

});
   
   
</script>