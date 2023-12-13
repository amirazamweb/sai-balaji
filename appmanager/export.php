<?php
include_once("db.php");
$query = "SELECT * FROM user WHERE sourse= 'sai-balaji-group' ORDER BY created DESC";
$results = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
$allOrders = array();
while( $order = mysqli_fetch_assoc($results) ) {
	$allOrders[] = $order;
}
$startDateMessage = '';
$endDate = '';
$noResult ='';
if(isset($_POST["export"])){
 if(empty($_POST["fromDate"])){
  $startDateMessage = '<label class="text-danger">Select start date.</label>';
 }else if(empty($_POST["toDate"])){
  $endDate = '<label class="text-danger">Select end date.</label>';
 } else {  
  $orderQuery = "
	SELECT * FROM user 
	WHERE created >= '".$_POST["fromDate"]."' AND created <= '".$_POST["toDate"]."' ORDER BY created DESC";
  $orderResult = mysqli_query($conn, $orderQuery) or die("database error:". mysqli_error($conn));
  $filterOrders = array();
  while( $order = mysqli_fetch_assoc($orderResult) ) {
	$filterOrders[] = $order;
  }
  if(count($filterOrders)) {
	  $fileName = "mangalmay_export_".date('Ymd') . ".csv";
	  header("Content-Description: File Transfer");
	  header("Content-Disposition: attachment; filename=$fileName");
	  header("Content-Type: application/csv;");
	  $file = fopen('php://output', 'w');
	  $header = array("Id", "Name", "Email", "Mobile","State","City","Course", "Date");
	  fputcsv($file, $header);  
	  foreach($filterOrders as $order) {
	   $orderData = array();
	   $orderData[] = $order["userid"];
	   $orderData[] = $order["name"];
	   $orderData[] = $order["email"];
	   $orderData[] = $order["mobile"];
	   $orderData[] = $order["state"];
	   $orderData[] = $order["city"];
	   $orderData[] = $order["course"];
	   $orderData[] = $order["created"];
	   fputcsv($file, $orderData);
	  }
	  fclose($file);
	  exit;
  } else {
	 $noResult = '<label class="text-danger">There are no record exist with this date range to export. Please choose different date range.</label>';  
  }
 }
}
?>