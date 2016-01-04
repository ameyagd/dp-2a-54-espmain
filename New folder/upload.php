<?php

if(isset($_FILES['importcsv']['tmp_name'])){
    $sourcePath = $_FILES['importcsv']['tmp_name'];
    $handle = fopen("csv/import/".$_FILES['importcsv']['name'], "r");

    while (($result = fgetcsv($handle)) !== false)
{
    $csv[] = $result;
}

    fclose($handle);

$json = json_encode($csv);

echo '<pre>';
print_r($json);
echo '</pre>';
}


?>