<?php
include 'conn.php';
//Select data from database

$getData = "select * from users";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){

$msg[] = array("user_id" => $r['user_id'],
"username" => $r['username'], 
"user_email" => $r['user_email'],
"mobile" => $r['mobile'],
"AlNo" => $r['AlNo'],
"state" => $r['state'],
"city" => $r['city'],"course" => $r['course'],
"status" => $r['status']);
}
$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>