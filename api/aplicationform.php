<?php
include 'conn.php';
//Select data from database

$getData = "select * from application";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){

$msg[] = array("userid" => $r['id'],
    "name" => $r['name'], "DOB" => $r['DOB'],
"nationality" => $r['nationality'],
"gender" => $r['gender'],
"picture" => 'http://mangalmay.topbschoolsinindia.in/ims_pic/'.$r['picture'].'',
"category" => $r['category'],
"language" => $r['language'],
"course" => $r['course'],
"email" => $r['email'],
"mobile" => $r['mobile'],
"fname" => $r['fname'],
"foccupation" => $r['foccupation'],
"fmobile" => $r['fmobile'],
"femail" => $r['femail'],
"mname" => $r['mname'],
"moccupation" => $r['moccupation'],
"mmobile" => $r['mmobile'],
"memail" => $r['memail'],
"house_no" => $r['house_no'],
"street" => $r['street'],
"city" => $r['city'],
"state" => $r['state'],
"phouse_no" => $r['phouse_no'],
"pstreet" => $r['pstreet'],
"pcity" => $r['pcity'],
"pstate" => $r['pstate'],"Highschools" => $r['Highschools'],
"intermediate" => $r['intermediate'],
"Graduation" => $r['Graduation'],
"CAT" => $r['CAT'],
"MAT" => $r['MAT'],"XAT" => $r['XAT'],
"otherexam" => $r['otherexam'],
"date time" => $r['created']);
}
$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>