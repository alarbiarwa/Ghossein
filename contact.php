<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

</head>
<body>
    
<?php 

ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
 if ($dbc = @mysqli_connect('localhost','root','Sahar1144233')){
   print '';
   if (!@mysqli_select_db ($dbc, 'nbatati')) {
    die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>'); }
 }
 else {
   die ('could not connect because:' . mysqli_error($dbc));
 }




?>
</body>
</html>