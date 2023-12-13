<?php  

 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost","topbschoolsinind_alliance-univer","alliance@123","topbschoolsinind_alliance-university");
$id=$_REQUEST['id'];
$query = "SELECT * from application where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            
     $output .= '
     <table>
       <tr>
       <td style="width:80%; height:70px;">
       <img class="img-fluid" style="height:55rem;" src="../images/sai-logo3.png"/>
       </td>
       <td style="width:20%" rowspan="3">
       <img src="../ims_pic/'.$row['picture'].'" style="height: 70px;"/>
       </td>
       </tr>
       <tr>
       <td style="text-align:center; font-size:14px; font-weight:bold;height:22px">Application Form 2024-26 Batch</td>
       </tr>
       <tr>
       <td style="text-align:center; font-size:12px; font-weight:bold;height:20px">Application No: SBES/' .$row["course"].'/'.$row["id"].'</td>
       </tr>
     </table>
     <table border="0.5" cellspacing="0.5" cellpadding="3" class="table table-bordered; border-collapse:collapse" >

      <tr>
            <td colspan="3" style="
    height: 14px;
    text-align: left;
    color: #000;
    font-size:11px;
    font-weight: bold;
    font-family: cambria;
    background-color:#fff;
    
"> Personal Details</td>
           
</tr>
<tr>
            <td>Candidate Name*</td>
            <td colspan="2">'.$row["name"].'</td>
            
          </tr>
          <tr>
            <td>Date Of Birth*</td>
            <td colspan="2">'.$row["DOB"].'</td>
            
          </tr>
            <tr>
            <td>Nationality *</td>
            <td>'.$row["nationality"].'</td>
             <td>Gender:&nbsp;'.$row["gender"].'</td>
          </tr>
           <tr>
            <td>Email *</td>
            <td>'.$row["email"].'</td>
              <td>Category:&nbsp;'.$row["category"].'</td>
          </tr>
           <tr>
            <td>Mobile Number *</td>
            <td>'.$row["mobile"].'</td>
             <td>Courses:&nbsp;'.$row["course"].'</td>
          </tr>
         <tr>
         <td>Courses *</td>
          <td>'.$row["course"].'</td>
          <td>Language Known:&nbsp;'.$row["language"].'</td>
          
          </tr>
          </table>
          <br/><br/>
          <table border="0.5" cellspacing="0.5" cellpadding="3" class="table table-bordered; border-collapse:collapse" >
        <tr>
<td colspan="3" style="
    height: 14px;
    text-align: left;
    color: #000;
    font-size:11px;
    font-weight: bold;
    font-family: cambria;
    background-color:#fff;
    
">Parents Details</td>
      </tr>
           <tr>
           <td>Father Name:</td>
              <td>'.$row["fname"].'</td>
               <td>Father Mobile:&nbsp;'.$row["fmobile"].'</td>
           
          </tr>
          <tr>
         <td>Father Occupation:</td>
          <td>'.$row["foccupation"].'</td>
            <td>Father Email:&nbsp;'.$row["femail"].'</td>
          </tr> 
           <tr>
           <td>Mother Name:</td>
             <td>'.$row["mname"].'</td>
             <td>Mother Mobile:&nbsp;'.$row["mmobile"].'</td>
            
          
          </tr> 
           <tr>
        <td>Mother Occupation:</td>
          <td>'.$row["moccupation"].'</td>
            <td>Mother Email:&nbsp;'.$row["memail"].'</td>
           
          </tr> 
          </table>
      <br/><br/>
      <table border="0.5" cellspacing="0.5" cellpadding="3" class="table table-bordered; border-collapse:collapse" >
           <tr>
<td colspan="3" style="
    height: 14px;
    text-align: left;
    color: #000;
    font-size:11px;
    font-weight: bold;
    font-family: cambria;
    background-color:#fff;
    
">Address Information</td>
      </tr>
          <tr>
<td>House No:</td>
  <td>'.$row["house_no"].'</td>
   <td>City:&nbsp;'.$row["city"].'</td>

          </tr>
           <tr>
          <td>Street:</td>
            <td>'.$row["street"].'</td>
            <td>State :&nbsp;'.$row["state"].'</td>
          </tr> 
          </table>
          <br/><br/>
          <table border="0.5" cellspacing="0.5" cellpadding="3" class="table table-bordered; border-collapse:collapse" >
            <tr>
<td colspan="3" style="
    height: 14px;
    text-align: left;
    color: #000;
    font-size:11px;
    font-weight: bold;
    font-family: cambria;
    background-color:#fff;
    
">Parmanent Address Information</td>
      </tr>
          <tr>
<td>House No:</td>
          <td>'.$row["phouse_no"].'</td>
             <td>City :&nbsp;'.$row["pcity"].'</td>
            </tr>
          <tr>
          <td>Street :</td>
           <td>'.$row["pstreet"].'</td>
          <td>State :&nbsp;'.$row["pstate"].'</td>
            
          </tr>
          </table>
          <br/><br/>
          <table border="0.5" cellspacing="0.5" cellpadding="3" class="table table-bordered; border-collapse:collapse" >

            <tr>
<td colspan="3" style="
    height: 14px;
    text-align: left;
    color: #000;
    font-size:11px;
    font-weight: bold;
    font-family: cambria;
    background-color:#fff;
    
">Education Details</td>
      </tr>
      
          <tr>
           <td>10th %:&nbsp;'.$row["Highschools"].'</td>
            <td>12th %:&nbsp;'.$row["intermediate"].'</td>
             <td>Graduation %:&nbsp;'.$row["Graduation"].'</td>
          </tr> 
          <tr>
           <td>CAT Score %:&nbsp;'.$row["CAT"].'</td>
             <td>MAT Score:&nbsp;'.$row["XAT"].'</td>
              <td>XAT Score %:&nbsp;'.$row["MAT"].'</td>
           </tr> 
           </table>
      <br/><br/>
      <table border="0.5" cellspacing="0.5" cellpadding="3" class="table table-bordered; border-collapse:collapse" >
            <tr>
<td colspan="3" style="
    height: 14px;
    text-align: left;
    color: #000;
    font-size:11px;
    font-weight: bold;
    font-family: cambria;
    background-color:#fff;
    
">Declaration</td>

      </tr>
      <tr>
<td colspan="3">
'.$row["Declaration"].'</td>
      </tr>
     </table>
      <br/><br/><br/><br/><br/><br/><br/>
      <table border="0.5" cellspacing="0.5" cellpadding="3" class="table table-bordered; border-collapse:collapse" > 
      <tr style="
    height: 14px;
    text-align: left;
    color: #000;
    font-size:11px;
    font-weight: bold;
    font-family: cambria;
    background-color:#dff9fb;
   ">
  <td style="width:12%">S.NO</td>
  <td style="width:48%">Documents</td>
  <td style="width:40%">status</td>
    </tr>
    
   <tr>
   <td style="width:12%">1</td>
   <td style="width:48%">10th Marksheet</td>
   <td style="width:40%">'.($row["10th_marksheet"]?"Uploaded":"Not Uploaded").'</td>
   </tr>
   <tr>
   <td style="width:12%">2</td>
   <td style="width:48%">12th Marksheet</td>
   <td style="width:40%">'.($row["12th_marksheet"]?"Uploaded":"Not Uploaded").'</td>
   </tr>
   <tr>
   <td style="width:12%">3</td>
   <td style="width:48%">Graduation Marksheet</td>
   <td style="width:40%">'.($row["grad_marksheet"]?"Uploaded":"Not Uploaded").'</td>
   </tr>
   <tr>
   <td style="width:12%">4</td>
   <td style="width:48%">Entrance Exam Marksheet</td>
   <td style="width:40%">'.($row["entrance_marksheet"]?"Uploaded":"Not Uploaded").'</td>
   </tr>
   <tr>
   <td style="width:12%">5</td>
   <td style="width:48%">Experience Letter</td>
   <td style="width:40%">'.($row["experience_letter"]?"Uploaded":"Not Uploaded").'</td>
   </tr>
   <tr>
   <td style="width:12%">6</td>
   <td style="width:48%">Aadhar Card</td>
   <td style="width:40%">'.($row["aadhar_card"]?"Uploaded":"Not Uploaded").'</td>
   </tr>
   <tr>
   <td style="width:12%">7</td>
   <td style="width:48%">Caste Certificate</td>
   <td style="width:40%">'.($row["caste_certificate"]?"Uploaded":"Not Uploaded").'</td>
   </tr>
    
        <tr style="font-size:9px">
        
           <td style="width:12%; vertical-align:center">Checkbook</td>
           <td style="width:15%">I AGREE</td>
           <td style="width:15%">Applicant Name</td>
           <td style="width:22%">'.$row["name"].'</td>
           <td style="width:15%">Parent Name</td>
           <td >'.$row["fname"].'</td>
        </tr>   
       
         
        <tr style="font-size:9px">
        <td style="width:12%">Date</td>
        <td>'.$row["created"].'</td>
        </tr> 
        </table>';  
      }  
      return $output; 
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
     
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Sai Balaji Group of Institutions 2024-26 Application Form
");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('times', '', 10);  
      $obj_pdf->AddPage();  
     $content = '';  
      $content .= fetch_data();  
      
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('saibalaji_Application_Form.pdf', 'I'); 

// output the HTML content
        $obj_pdf->writeHTML($html, true, 0, true, 0);

      //$obj_pdf->writeHTML($content);  
      $obj_pdf->Output('saibalaji_Application_Form.pdf', 'I');  
 }  
 ?>  

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sai Balaji Group of Institutions 2024-26 Application Form</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  
 <link rel="icon" type="image/png" href="https://kccmbanoida.com/images/logo-1-1.png">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>




</head>

<body id="page-top">
<?php include 'header.php'?>

  <div id="wrapper">

    <!-- Sidebar -->
      <?php include 'sidevar.php'?>
    <!-- Sidebar -->
    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li> 
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Application Form </div>
          <div class="card-body">
        <div class="col-md-12" align="right">
                     <form method="post">  
                          <input type="submit" name="generate_pdf" class="btn btn-info" value="Generate PDF" />  
                     </form>  
        </div>
        
            <div class="table-responsive">
                
                 <?php  
                     echo fetch_data();  
                     ?>  

            </div>
          </div>
</div>
  
    </div>


  </div>
  
 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  
 

  <!-- Custom scripts for all pages-->
  
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  

</body>

</html>