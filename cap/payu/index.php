<?php session_start();
require_once('../../db_connection.php');
//print_r($_SESSION);
$name=$_GET['name'];
$email=$_GET['email'];
$mobileno=$_GET['mobile'];
$amount=$_GET['amount'];

if($amount=='0'){
	 $url="https://sam-global-university.topbschoolsinindia.in/";
					 echo "<script>
						  alert('Application submitted Successfully');
						  window.location.href='$url';
					  </script>";
			}
$college=$_GET['college'];

$MERCHANT_KEY = "tHMJix";
$SALT = "PI3nqI61";

// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
   // print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} 
elseif(!empty($posted['hash'])) 
{
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}

?>

<html>
<head>
<title>Payumoney Payment Gateway Integration</title>
      <meta name="google" content="notranslate">
     <meta name="facebook-domain-verification" content="g476tjddot7fswvvdwiwcug8vppu2b">
     <link rel="icon" type="image/x-icon" href="https://careermantra.net/images/cm-logo.png">
     <link href="https://careermantra.net/careermantra_v1/assets/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://careermantra.net/careermantra_v1/assets/css/jquery.dataTables.min.css" rel="stylesheet">
	 <link href="https://careermantra.net/careermantra_v1/css/style.css" rel="stylesheet">
	 <!--<link rel="stylesheet" href="https://careermantra.net/careermantra_v1/assets/font/font-awesome.min.css">-->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://careermantra.net/careermantra_v1/css/mediaquery.css">
	 <!--script-->
	 <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-WV06Y2Y35G&amp;l=dataLayer&amp;cx=c"></script><script src="https://connect.facebook.net/signals/config/459753916340681?v=2.9.104&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script src="https://careermantra.net/careermantra_v1/js/jquery.min.js"></script>
     <script src="https://careermantra.net/careermantra_v1/js/bootstrap.min.js"></script>
   <!-- Google tag (gtag.js) -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-250198056-1"></script>
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

<style type="text/css">
<!--
.style1 {
	font-size: 16;
	font-weight: bold;
	color: #009933;
}
-->
</style>
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
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="submitPayuForm()">
    <?php //require_once'../../careermantra_v1/header.php'; ?>
      <?php //include('../../careermantra_v1/menubar-header.php');?>
<script language="JavaScript1.2">mmLoadMenus();</script>
    <section class="mt-5">
        <div class="container text-center">
            <div class="col">
            <table class="table shadow">
              <tr>
                <td align="center" valign="middle"><table width="" border="0" align="center" cellpadding="0" cellspacing="0">
                  
            	<tr>
            		<td><h2>Checkout</h2>
            		<?php if($formError) { ?>
            		<tr><td><span style="color:red">Please fill all mandatory fields.</span></td></tr>
            		<br/>
            		<br/>
            		<?php } ?>
            		<form action="<?php echo $action; ?>" method="post" name="payuForm">
            		<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
            		<input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
            		<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
            		<table>
                    <tr>
                      <td class="mb-4"><b>Mandatory Parameters</b><br/></td>
                    </tr>
                    <tr>
                      <td>First Name: </td>
                      <td><input class="form-control" readonly="readonly" name="firstname"  id="firstname" value="<?php echo $name; ?>" /></td>
                    </tr>
            		
            		<tr>
                      <td>Email: </td>
                      <td><input class="form-control" readonly="readonly" name="email"  id="email" value="<?php  echo $email; ?>" /></td>
                    </tr>
                    
                    
                    <tr>
                      <td>Phone: </td>
                      <td><input class="form-control"  readonly="readonly" name="phone"  value="<?php echo $mobileno; ?>" /></td>
                    </tr>
                    
            		<tr>
                      <td>Amount: </td>
                      <td><input class="form-control" name="amount" readonly="readonly" value="<?php echo $amount; ?>" /></td><br/>
                    </tr>
            		
            		<input type="hidden" name="serial" value="serial_no"/>
            		
                    <input type="hidden" name="productinfo" value="<?php echo $college; ?>"/>
                    
            		<input type="hidden" name="surl" value="https://sam-global-university.topbschoolsinindia.in/cap/payu/Success.php" size="64" />
                    
            		<input type="hidden" name="furl" value="https://sam-global-university.topbschoolsinindia.in/cap/payu/Failure.php" size="64" />
            
                    <tr>
                      <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
                    </tr>
                    <tr class="text-center">
                      <?php if(!$hash)
            		   { ?>
                        <td colspan="4"><input type="submit" value="Pay Now" class="btn btn-danger"/></td>
                      <?php } ?>
                    </tr>
                  </table>
            		</td>
            	</tr>
            	  
                </table></td>
              </tr>
              
            	
              
              <tr>
                <td height="3" align="center" valign="middle" class="dot"></td>
              </tr>
              
                </table>
                </div>
            </div>
    </section>
     <?php // include('../../careermantra_v1/footer_1.php');?>
       <script src="https://careermantra.net/careermantra_v1/js/bootstrap.bundle.min.js"></script>
 </body>
</html>