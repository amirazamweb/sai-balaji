<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$student_id=$_POST["student_id"];
$uploadtime = date("Y-m-d H:i:s");
$salt="";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) 
	   {
	       
	       $msg = "Invalid Transaction. Please try again";
	       
	       $sql="INSERT INTO `application`(`student_id`, `name`,  `course`, `email`, `mobile`, `college_name`, `amount`, `payment_status`, `txnid`, `created`)
            VALUES ('$student_id','$name','','$email','$phone','$productinfo','$amount','$status','$txnid','$uploadtime')";
            $result = mysqli_query($conn, $sql);
            
		   } else {
         $msg = "<h3>Your order status is ". $status ."<br/> <h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4></h3>";
		 
		 $sql1="INSERT INTO `application`(`student_id`, `name`,  `course`, `email`, `mobile`, `college_name`, `amount`, `payment_status`, `txnid`, `created`)
            VALUES ('$student_id','$name','','$email','$phone','$productinfo','$amount','$status','$txnid','$uploadtime')";
            $result = mysqli_query($conn, $sql1);
		       
		   } 
?>

<html>
<head>
<title>Payumoney payment Gateway Integration</title>
<?php require_once('../careermantra_v1/head.php'); ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../cimage25/109651text.css" rel="stylesheet" type="text/css">
<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0203103334_0) return;
        window.mm_menu_0203103334_0 = new Menu("root",91,19,"Century Gothic",13,"#FFFFFF","#000000","#660000","#FF9900","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0203103334_0.addMenuItem("History","window.open('109651history.html', '_self');");
  mm_menu_0203103334_0.addMenuItem("Objectives","window.open('109651objective.html', '_self');");
   mm_menu_0203103334_0.hideOnMouseOut=true;
   mm_menu_0203103334_0.bgColor='#555555';
   mm_menu_0203103334_0.menuBorder=1;
   mm_menu_0203103334_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0203103334_0.menuBorderBgColor='#FEFFF9';
    window.mm_menu_0203103632_0 = new Menu("root",170,19,"Century Gothic",13,"#FFFFFF","#000000","#660000","#FF9900","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0203103632_0.addMenuItem("Admission","window.open('109651admission.html', '_self');");
  mm_menu_0203103632_0.addMenuItem("School Timing","window.open('109651schooltiming.html', '_self');");
  mm_menu_0203103632_0.addMenuItem("Evaluation Procedure","window.open('109651evaluation.html', '_self');");
  mm_menu_0203103632_0.addMenuItem("Co-Curricular Activities","window.open('109651cocurricular.html', '_self');");
   mm_menu_0203103632_0.hideOnMouseOut=true;
   mm_menu_0203103632_0.bgColor='#555555';
   mm_menu_0203103632_0.menuBorder=1;
   mm_menu_0203103632_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0203103632_0.menuBorderBgColor='#FEFFF9';

mm_menu_0203103632_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<script language="JavaScript" src="../cimage25/109651mm_menu.js"></script>
<script type="text/javascript" src="../cimage25/109651sliderman.1.3.7.js"></script>
<link rel="stylesheet" type="text/css" href="../cimage25/109651sliderman.css" />
<style type="text/css">
<!--
.style1 {
	font-size: 16;
	font-weight: bold;
	color: #009933;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="submitPayuForm()">
    <?php require_once'../careermantra_v1/header.php'; ?>
      <?php include('../careermantra_v1/menubar-header.php');?>
<!--<script language="JavaScript1.2">mmLoadMenus();</script>-->
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#DFFFFF" class="bg">
  <tr>
    <td align="center" valign="middle"><table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
    <td height="3" align="center" valign="middle"><?php echo $msg; ?></td>
	</tr>
	<tr> <td></td></tr>
	 <tr>
	    
    <td height="3" align="center" valign="middle"><a href="https://careermantra.net/cap/college-admission-form"><h3>Back</h3</a></td>
	</tr> 
    </table></td>
  </tr>
  
 
  <tr>
    <td height="3" align="center" valign="middle" class="dot"></td>
  </tr>
  
  
</table>
        <?php require_once'../careermantra_v1/footer_1.php'; ?>
</body>
</html>