<?php 
    $pagename="Import Subscribers";
    $pagetitle="Import Subscribers";
    include('includes/header.php'); 
    include('db.php'); 


?>
<div class="content">
<div class="container listboxcontainer">


<?php


if(isset($_FILES['importcsv']['tmp_name'])){
    $sourcePath = $_FILES['importcsv']['tmp_name'];
    $targetPath = "csv/import/".$_FILES['importcsv']['name'];

    if($_FILES['importcsv']['name']){
        move_uploaded_file($sourcePath,$targetPath);
        echo "File Uploaded!!";


    $handle = fopen("csv/import/".$_FILES['importcsv']['name'], "r");

while (($result = fgetcsv($handle)) !== false)
{
    $csv[] = $result;
}

    fclose($handle);

echo '<pre>';
print_r($csv);
echo '</pre>';




    }else{
        //echo "<br>Same File Uploaded Recently Check File Name";
    }


}

?>
</div>
</div>
<?php include('includes/footer.php'); ?>



