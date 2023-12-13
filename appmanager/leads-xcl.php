<?php  
include('db.php');
 $sql = "SELECT `id`, `name`, `DOB`, `nationality`, `gender`, `category`, `language`, `course`, `email`, `mobile`, `fname`, `foccupation`,  `fmobile`, `femail`, `mname`, `moccupation`, `mmobile`, `memail`, `house_no`, `street`, `city`, `state`,  `phouse_no`, `pstreet`, `pcity`, `pstate`, `Highschools`,  `intermediate`, `Graduation`, `CAT`, `MAT`, ``XAT`, `otherexam`, `created` FROM `application`"; 
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "id" . "\t" . "name" . "\t" . "DOB" . "\t"."nationality" . "\t"."gender" ."\t"."category" ."\t"."language" ."\t"."course" . "\t"."email" . "\t" ."mobile" . "\t" . "fname" . "\t" . "foccupation" . "\t"."fmobile" ."\t"."femail" ."\t"."mname" ."\t"."moccupation" .  "\t" ."mmobile"."\t"."memail" . "\t" . "house_no" . "\t" . "street" . "\t"."city" . "\t"."state" . "\t"."phouse_no" . "\t" ."pstreet" . "\t" . "pcity" . "\t" . "pstate" ."\t"."Highschools"  . "\t"."intermediate"  . "\t". "Graduation" ."\t". "CAT" ."\t"."MAT" . "\t". "XAT" ."\t"."otherexam"  . "\t"."created" . "\t";  
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
header("Content-Disposition: attachment; filename=lead-pune-Application.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 