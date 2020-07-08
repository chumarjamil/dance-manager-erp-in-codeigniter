<?php require_once('Connections/saha.php'); ?>
<?php include("inc-main.php"); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  //$theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string(@$saha, $theValue) : mysqli_escape_string(@$saha, $theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = "admin.php";
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "type";
  $MM_redirectLoginSuccess = "admin.php";
  $MM_redirectLoginFailed = "index.php?login=failed";
  $MM_redirecttoReferrer = true;
  mysqli_select_db($saha, $database_saha);

  $LoginRS__query=sprintf("SELECT un, pw, type FROM `admin` WHERE un=%s AND pw=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text"));

  $LoginRS = mysqli_query($saha, $LoginRS__query) or die(mysqli_error($saha));
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {

    //$loginStrGroup  = mysql_result($LoginRS,0,'type');

	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;



    header("Location: admin.php");
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>

<html lang="en">
<head>
<meta charset="utf-8">
<title>MYSQL Report Generator</title>
<link rel="shortcut icon" href="icon.png" type="image/png" />
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
   <?php echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />"; ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <table class="table table-striped table-bordered table-hover">
  <tr>
    <td align="center" style="padding:150px 0 180px 0;">
<form id="formElem" name="formElem" action="<?php echo $loginFormAction; ?>" method="POST" onSubmit="document.getElementById('registerButton').value='Please Wait...'; document.getElementById('registerButton').disabled=true;">

    <table class="table table-striped table-bordered table-hover" style="max-width:500px;">
  <tr>
    <td colspan="2" align="left" valign="top" style="border-bottom:2px solid #D5E7FE; padding:10px;"><img src="img/MySQLReports.jpg"  ></td>
    </tr>
<?php if(@$_GET['login']=="failed"){?>
  <tr>
    <td colspan="2" style=" padding:10px;">
    <span style="color:#F00">Login Failed !</span>
</td>
  </tr>
<?php }else if(@$_GET['login']=="out"){?>
  <tr>
    <td colspan="2" style=" padding:10px;">
    <span style="color:#063">Successfully Logged out !</span>
</td>
  </tr>

<?php }?>
  <tr>

    <td bgcolor="#EDF5FE" style=" padding:10px;"><strong>Username</strong></td>
    <td width="261" align="left" bgcolor="#EDF5FE" style=" padding:10px;"><input name="username" id="username" placeholder="User Name" autocomplete="off" value="administrator" class="form-control" /></td>
  </tr>
  <tr>
    <td bgcolor="#EDF5FE" style=" padding:10px;"><strong>Password</strong></td>
    <td align="left" bgcolor="#EDF5FE" style=" padding:10px;"><input name="password" type="password" id="password" placeholder="Password"  value="admin" class="form-control" /></td>
  </tr>
  <tr>
    <td bgcolor="#EDF5FE">&nbsp;</td>
    <td align="right" bgcolor="#EDF5FE" style=" padding:10px;"><input type="submit" name="registerButton" id="registerButton" value="Log In"  class="form-control" /></td>
  </tr>
</table>

</form>
    </td>
  </tr>

<p style="padding: 25px 5px 5px 5px; text-align: center; color: #999;">
				Click here to return to
				<a href="http://www.ccschools.info" target="_blank">tables</a>
                                </p>



</table>

</body>
</html>
<?php
//mysqli_free_result($owner);

//mysqli_free_result($users);

//mysqli_free_result($user);

//mysqli_free_result($userlogs);

//mysqli_free_result($customers);

//mysqli_free_result($vehicles);

//mysqli_free_result($jobs);

//mysqli_free_result($stockoutitems);

//mysqli_free_result($settings);

//mysqli_free_result($jobst);
?>
