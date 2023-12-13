<?php
include_once("db.php");
$query = "SELECT * FROM  application ORDER BY created DESC";
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
	SELECT * FROM  application 
	WHERE created >= '".$_POST["fromDate"]."' AND created <= '".$_POST["toDate"]."' ORDER BY created DESC";
  $orderResult = mysqli_query($conn, $orderQuery) or die("database error:". mysqli_error($conn));
  $filterOrders = array();
  while( $order = mysqli_fetch_assoc($orderResult) ) {
	$filterOrders[] = $order;
  }
  if(count($filterOrders)) {
	  $fileName = "Date_Wise_leadsPune-application_Leads_".date('Y-m-d') . ".csv";
	  header("Content-Description: File Transfer");
	  header("Content-Disposition: attachment; filename=$fileName");
	  header("Content-Type: application/csv;");
	  $file = fopen('php://output', 'w');
	  $header = array("Id", "Candidate Name ","Date Of Birth", "Nationality", "Gender","Category","Language","Courses " ,"Email ", "Mobile Number  ","Father'sName", "Occupation", 
	  "Mobile","Email Id","Mother's Name", "Occupation", 
	  "Mobile","Email Id","House No" ,"Street", "City ","State", "House No","Street",
	  "City","State","10th","12th", "gradution","CAT", "MAT","XAT", "OTHER EXAM","Date");
	  fputcsv($file, $header);   
	  foreach($filterOrders as $order) {
	   $orderData = array();
       $orderData[] = $order["id"];
	   $orderData[] = $order["name"];
	   $orderData[] = $order["DOB"];
	   $orderData[] = $order["nationality"];
	   $orderData[] = $order["gender"];
	   $orderData[] = $order["category"];
	   $orderData[] = $order["language"];
	   $orderData[] = $order["course"];
	   $orderData[] = $order["email"];
	   $orderData[] = $order["mobile"];
	   $orderData[] = $order["fname"];
	   $orderData[] = $order["foccupation"];
	   $orderData[] = $order["fmobile"];
	   $orderData[] = $order["femail"];
	    $orderData[] = $order["mname"];
	   $orderData[] = $order["moccupation"];
	   $orderData[] = $order["mmobile"];
	   $orderData[] = $order["memail"];
	    $orderData[] = $order["house_no"];
	   $orderData[] = $order["street"];
	   $orderData[] = $order["city"];
	   $orderData[] = $order["state"];
      $orderData[] = $order["phouse_no"];
	   $orderData[] = $order["pstreet"];
	   $orderData[] = $order["pcity"];
	   $orderData[] = $order["pstate"];
	   $orderData[] = $order["Highschools"];
	   $orderData[] = $order["intermediate"];
	   $orderData[] = $order["Graduation"];
	        $orderData[] = $order["CAT"];
          $orderData[] = $order["MAT"];
          $orderData[] = $order["XAT"];
        $orderData[] = $order["otherexam"];
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