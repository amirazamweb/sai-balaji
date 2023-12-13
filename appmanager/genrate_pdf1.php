<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "seskpimy_loveedu_user", "loveedu_user", "seskpimy_loveedu");
       //$conn = mysqli_connect("localhost", "mangalmayleads", "Man9070@@", "loveedu");
$id=$_REQUEST['id'];
$query = "SELECT * from SOPforms where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            
     $output .= ' <tr>

<td colspan="4" style="
    height: 12px;
    text-align: center;
    color: white;
    font-weight: 600;
    font-family: cambria;
    background-color:#901d78;
    
">Personal Details</td>
      </tr>

      <tr>
            <td> S.No*:</td>
            <td>'.$row["id"].'</td>
             <td>Candidate Name*</td>
            <td>'.$row["name"].'</td>
</tr>

          <tr>
            <td>Email*</td>
            <td>'.$row["email"].'</td>
             <td>Mobile *</td>
            <td>'.$row["mobile"].'</td>
            
          </tr>
           
           <tr>
            <td>Courses(MBA/PGDM):&nbsp; *</td>
            <td>'.$row["course"].'</td>
            <td>State *</td>
            <td>'.$row["state"].'</td>
              
          </tr>
           
         
        <tr>
<td colspan="4" style="
    height: 12px;
    text-align: center;
    color: white;
    font-weight: 600;
    font-family: cambria;
    background-color: #901d78;
    
">Statement of Purpose</td>
      </tr>
           <tr>
           <td>Q1.</td>
              <td>'.$row["Q1"].'</td>
               <td>ANS.</td>
               <td>'.$row["ans1"].'</td>
           
          </tr>
          
          <tr>
           <td>Q2.</td>
              <td>'.$row["Q2"].'</td>
               <td >ANS.</td>
              <td>'.$row["ans2"].'</td>
           
          </tr>
          
          <tr>
           <td>Q3.</td>
              <td>'.$row["Q3"].'</td>
               <td>ANS.</td>
              <td>'.$row["ans3"].'</td>
           
          </tr>
         
          <tr>
           <td>Q4.</td>
              <td>'.$row["Q4"].'</td>
               <td>ANS.</td>
              <td>'.$row["ans4"].'</td>
           
          </tr>
          
          
           <tr>
            <td colspan="4" style="
    height: 12px;
    text-align: center;
    color: white;
    font-weight: 600;
    font-family: cambria;
    background-color: #901d78;
    
">Date:'.$row["created"].'</td>
          </tr>
         
                          ';  
      }  
      return $output; 
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
     
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("IMS APLICATION FORM 2023-2025");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 10);  
      $obj_pdf->AddPage();  
     $content = '';  
      $content .= '  
  <img class="img-fluid" style="height:30rem;" src="https://kccmbanoida.com/images/logo-1-1.png"/>
      <h4 align="center">KCC Institute of Technology & Management Statement of Purpose FORM 2023-2025</h4><br /> 
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <table border="1" cellspacing="1" cellpadding="2" class="table table-bordered">
        
     

            ';  

      $content .= fetch_data();  
      $content .= '</table>';  
      
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('KCC_Statement_of_Purpose_FORM_2023_2025.pdf', 'I'); 

// output the HTML content
        $obj_pdf->writeHTML($html, true, 0, true, 0);

      //$obj_pdf->writeHTML($content);  
      $obj_pdf->Output('KCC_Statement_of_Purpose_FORM_2023_2025.pdf', 'I');  
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

  <title>KCC Institute of Technology & Management Statement of Purpose FORM 2023-2025</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  
<link rel="shortcut icon" href="https://kccmbanoida.com/images/logo-1-1.png">
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
 
       <h4 align="center">KCC Institute of Technology & Management Statement of Purpose FORM 2023-2025</h4><br /> 
            <div class="table-responsive">
            <table  border="1" cellspacing="1" cellpadding="3" id="dataTable" width="100%" cellspacing="0" style="font-size: 13px;border:1px solid #80808029;">
                
                 <?php  
                     echo fetch_data();  
                     ?>  

              </table>

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