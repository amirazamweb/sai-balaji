<?php  
include('db.php');
 $sql = "SELECT `userid`,`name`,`email`,`mobile`,`state`,`city`,`course`,`status`  FROM `user`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "id" . "\t" . "name" . "\t" . "email". "\t"."mobile" ."\t"."state"."\t"."city"."\t"."course" ."\t"."status"  . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Mangalmay_leads.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 