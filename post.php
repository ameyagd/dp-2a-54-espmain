<?php
echo "<pre>";
print_r($_POST);
?>
<?php
 print_r($_FILES['importcsv']['tmp_name']);
 if(isset($_FILES['importcsv']['tmp_name'])){
 $sourcePath = $_FILES['importcsv']['tmp_name'];
 $targetPath = "csv/import/".$_FILES['importcsv']['name'];

 move_uploaded_file($sourcePath,$targetPath);

 $csv= file_get_contents($targetPath);
 $array = array_map("str_getcsv", explode("\n", $csv));
 $json = json_encode($array);
 print_r($json);
 echo "<br>This data added to database after that <br>We will Fetch JSON file & refresh subscriber data";
 }

 ?>