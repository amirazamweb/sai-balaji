<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "seskpimy_kccuser", "kccuser@123", "seskpimy_kcc"); 
$id=$_REQUEST['id'];
$query = "SELECT * from application where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            
      $output .= '<tr>

<td colspan="3" style="
    height: 12px;
    text-align: center;
    color: white;
    font-weight: 600;
    font-family: cambria;
    background-color:#5f0c4e;
    
">Personal Details</td>
      </tr>

      <tr>
            <td> S.No*:</td>
            <td>'.$row["id"].'</td>
<td rowspan="3"  style="width: 170px;"><img src="ims_pic/'.$row['picture'].'" style="height: 80px;width: 120px;"/></td>
</tr>
<tr>
            <td>Candidate Name*</td>
            <td>'.$row["name"].'</td>
            
          </tr>
          <tr>
            <td>Date Of Birth*</td>
            <td>'.$row["DOB"].'</td>
            
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
             <td>Courses(MBA/PGDM):&nbsp;'.$row["course"].'</td>
          </tr>
         <tr>
         <td>Courses(MBA/PGDM) *</td>
          <td>'.$row["course"].'</td>
          <td>Language Known:&nbsp;'.$row["language"].'</td>
          
          </tr>
        <tr>
<td colspan="3" style="
    height: 12px;
    text-align: center;
    color: white;
    font-weight: 600;
    font-family: cambria;
    background-color: #5f0c4e;
    
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
           <tr>
<td colspan="3" style="
    height: 12px;
    text-align: center;
    color: white;
    font-weight: 600;
    font-family: cambria;
    background-color: #5f0c4e;
    
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
            <tr>
<td colspan="3" style="
    height: 12px;
    text-align: center;
    color: white;
    font-weight: 600;
    font-family: cambria;
    background-color: #5f0c4e;
    
">Parmanet Address Information</td>
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

            <tr>
<td colspan="3" style="
    height: 12px;
    text-align: center;
    color: white;
    font-weight: 600;
    font-family: cambria;
    background-color: #5f0c4e;
    
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
            <tr>
<td colspan="3" style="
    height: 12px;
   
    color: white;
    font-weight: 600;
    font-family: cambria;
    background-color: #5f0c4e;
    
">Declaration</td>

      </tr>
      <tr>
<td colspan="3">
'.$row["Declaration"].'</td>
      </tr>
           <tr>
            <td colspan="3" style="
    height: 12px;
   
    color: white;
    font-weight: 600;
    font-family: cambria;
    background-color: #5f0c4e;
    
">'.$row["created"].'</td>
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
      $obj_pdf->SetTitle("SAIBALAJI GROUP OF INSTITUTES 2024-2026 APLICATION FORM");  
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
      <img src="images/hedder.png"/>
      <h4 align="center">SAIBALAJI GROUP OF INSTITUTES 2024-2026 APLICATION FORM</h4><br /> 
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <table border="1" cellspacing="1" cellpadding="3" class="table table-bordered">
        
     

            ';  

      $content .= fetch_data();  
      $content .= '</table>';  
      
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('Saibalaji_Application_Form.pdf', 'I'); 

// output the HTML content
        $obj_pdf->writeHTML($html, true, 0, true, 0);

      //$obj_pdf->writeHTML($content);  
      $obj_pdf->Output('Saibalaji_Application_Form.pdf', 'I');  
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

  <title>SAIBALAJI GROUP OF INSTITUTES 2024-2026 APLICATION FORM</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="ims_pic/favicon.ico" type="image/x-icon" rel="icon"/>

  <!-- Page level plugin CSS-->
  

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>


 <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

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
                          <input type="submit" name="generate_pdf" class="btn btn-primary" value="Download PDF" />  
                     </form>  
                     </div>
 
       <h4 align="center">SAIBALAJI GROUP OF INSTITUTES 2024-2026 APLICATION FORM</h4><br /> 
            <div class="table-responsive">
            <table  border="1" cellspacing="1" cellpadding="10" id="dataTable" width="100%" cellspacing="0"style="font-size: 13px;border:1px solid #80808029;">
                
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  
 

  <!-- Custom scripts for all pages-->
  
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  

</body>

</html>