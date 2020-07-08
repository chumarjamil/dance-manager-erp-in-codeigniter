<?php include("inc-main.php"); ?>
<?php require_once('Connections/sys.php'); ?>
<?php include("inc-restrictaccess.php"); ?>
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

if($_SESSION['table']==""){
	header("Location: admin.php");
	exit;
}

if($_SESSION['columns']==""){
	header("Location: admin.php");
	exit;
}
if($_SESSION['style']==""){
	header("Location: admin.php");
	exit;
}
 
 
$coluMs = explode(",", $_SESSION['columnsHeaders']);
//print_r($coluMs);

if($_SESSION['groups']==""){
$group="";
}else{
$group=" GROUP BY ".$_SESSION['groups'];
}

$GroupComs = explode(",", $_SESSION['groupsTotal']);
$grounpedColums= $GroupComs[0];

$table=$_SESSION['table'];
$columns=$_SESSION['columns'];
 
mysqli_select_db($sys, $database_sys);
$query_pcbook = "SELECT $columns FROM $table $group";
$pcbook = mysqli_query($sys, $query_pcbook) or die(mysqli_error($sys));
$row_pcbook = mysqli_fetch_assoc($pcbook);
$totalRows_pcbook = mysqli_num_rows($pcbook);

mysqli_select_db($sys, $database_sys);
$query_pcbook1 = "SELECT $columns FROM $table $group";
$pcbook1 = mysqli_query($sys, $query_pcbook1) or die(mysqli_error($sys));
$row_pcbook1 = mysqli_fetch_assoc($pcbook1);
$totalRows_pcbook1 = mysqli_num_rows($pcbook1);

?>
<!DOCTYPE HTML>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>MYSQL Report Generator</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'area'
        },
        title: {
            text: '<?php echo ucwords(str_replace("_"," ",$_SESSION['table']." : ".$grounpedColums)); ?>'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
		</script>
	</head>
	<body>
<script src="chart/highcharts.js"></script>
<script src="chart/modules/data.js"></script>
<script src="chart/modules/exporting.js"></script>

<div id="container" style="min-width: 400px; height: 250px; margin: 0 auto"></div>

<table id="datatable" style="display:none">
	<thead>
		<tr>
			<th></th>
			<th>Total Records</th>
		</tr>
	</thead>
	<tbody>
<?php do { ?>    
		<tr>
		  <th><?php echo $row_pcbook1[$grounpedColums]; ?></th>
			<td><?php 
$ibalance= $row_pcbook1[$grounpedColums];

mysqli_select_db($sys, $database_sys);
$query_pcbook2 = "SELECT $columns FROM $table WHERE $table.$grounpedColums='$ibalance'";
$pcbook2 = mysqli_query($sys, $query_pcbook2) or die(mysqli_error($sys));
$row_pcbook2 = mysqli_fetch_assoc($pcbook2);
$totalRows_pcbook2 = mysqli_num_rows($pcbook2);

echo $totalRows_pcbook2;
 ?></td>
		</tr>
<?php } while ($row_pcbook1 = mysqli_fetch_assoc($pcbook1)); ?>
	</tbody>
</table>
	</body>
</html>
<?php
//mysqli_free_result($pcbook1);

//mysqli_free_result($pcbook2);
?>
