<?php 
    $pagename="Import Subscribers";
    $pagetitle="Import Subscribers";
    include('includes/header.php'); 
    include('db.php'); 


?>
<div class="content">
<div class="container listboxcontainer">

<!-- <div id="CSVSource" class="source">
</div> -->

<div class="row fileuploaddivshow" style="display:none">
<div class="col-md-12 ">
    <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close">×</button>
        <span>File Successfully Uploaded</span>
    </div>
</div>
</div>


<?php 
// to get prev uploaded file name
$dontuploadsamefile= "0";
$dir = "csv/import/";
$prevfileinfolder = scandir($dir, 1);
$prevfilename = $prevfileinfolder[0];
echo $prevfilename;
if(($prevfilename !="..")){
	if($prevfilename == $_FILES['importcsv']['name']){
    	$dontuploadsamefile = "1";
    	echo " Same name file uploaded recently!!"; 
    }else{
    	$unlinkfilename ="csv/import/".$prevfilename;
    	unlink($unlinkfilename);
    }
}else{
    //echo "No CSV file Uploaded Yet";

}

?>
<!-- set that filename value in js varibale to used below -->
<script>
    var filewhichisinfolder = '<?php echo $prevfilename; ?>';
    console.log(filewhichisinfolder);
</script>
<!-- end set that filename value in js varibale to used below -->

<?php
if(!empty($_POST['importsdata'])){
	echo '<h4 class="listtitle">Manual Entry Added in Database!!</h4>';
	echo '<div class="importdata">'.tabs_to_table($_POST['importsdata']).'</div>';
}else{

if(isset($_FILES['importcsv']['tmp_name'])){
	$sourcePath = $_FILES['importcsv']['tmp_name'];
	$targetPath = "csv/import/".$_FILES['importcsv']['name'];

	if( ($prevfilename !=$_FILES['importcsv']['name']) && ($dontuploadsamefile=="0")){
		move_uploaded_file($sourcePath,$targetPath);
		echo "File Uploaded!!";


    $handle = fopen("csv/import/".$_FILES['importcsv']['name'], "r");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        echo $import="INSERT into csv(item1,item2,item3) values('$data[0]','$data[1]','$data[2]')";
        mysql_query($import) or die(mysql_error());

    }

    fclose($handle);


	}else{
		//echo "<br>Same File Uploaded Recently Check File Name";
	}

?>

<div class="fileuploaddivshow" style="display:none">
<input type="hidden" id="csvname" value="<?php echo $targetPath ?>">
<h4 class="listtitle">CSV Data Imported in Database</h4>
<br>

<div class="row">
<div class="col-md-12">
<div id="CSVTableimport" class="importdata"></div>
</div>
</div>
</div>
<?php
 //Import uploaded file to Database

?>

</div>
</div>
<?php include('includes/footer.php'); ?>
<script src="assets/js/jquery.csvToTable.js"></script>
<script>
    $(function() {
    	var filename = $("#csvname").val();
    	if(filename!="csv/import/"){
    		$.get(filename, function(data) {
            $('#CSVSource').html('<pre>' + data + '</pre>');
        });

 		var prevfilefullpath = "csv/import/"+filewhichisinfolder;
    	if(prevfilefullpath ==filename){
    		alert("Same file recently uploaded please check file name!!");
    	}else{
    		$(".fileuploaddivshow").css("display","block");
    		$('#CSVTableimport').CSVToTable(filename, { startLine: 0 }); 	
    	}	
       
    	}

		
       
    });
</script>
<?php
}//end if file check

}
?>

<?php
/**
* convert tab delimited file to html table
* @input string tab-delimited text
* found at http://james.revillini.com
* note: you are not required to keep the above copyright notice in this code.
*/
function tabs_to_table($input) {
//define replacement constants
define('TAB_REPLACEMENT', '</td><td> ');
define('NEWLINE_REPLACEMENT', '</td></tr><tr%s><td> ');
define('TABLE_BEGIN', '<table class="table table-bordred table-striped "><tr><td> ');
define('TABLE_END', '</td><tr></table>');

//replace all tabs with end-cell, begin-cell
$input = preg_replace  ('/\t/'  , TAB_REPLACEMENT  , $input);

//split the list on linebreaks
$rows = preg_split  ('/\r\n/'  , $input);

//replace all linebreaks with end-row, begin-row (with or without altRow class)
$output ="" ;
foreach ($rows as $index => $row) {
$output .= $row . sprintf(NEWLINE_REPLACEMENT, ($index%2?"":' class="alt"'));
}

//build table
$input = TABLE_BEGIN . $output . TABLE_END;
return ($input);
}
?>


