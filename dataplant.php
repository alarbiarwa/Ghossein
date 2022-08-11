<html>

<head>
</head>

<body>

<?php require 'contact.php';

ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

 $plantName = $_POST['plantName'];
 $plantType =$_POST['plantType'];
 $plantCare = $_POST['plantCare'];
 $plantImage =$_POST['plantImage'];

 if(@mysqli_query($dbc,'CREATE DATABASE nbatati')){
   print 'data base has been created';
 }
 else{
   die('could not create database because:' . mysqli_error($dbc));
 }


 $query = 'CREATE TABLE  IF NOT EXISTS ADDPLANT( 
   num INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
   plantName VARCHAR(45) NOT NULL,
   plantType  VARCHAR(45) NOT NULL,
   plantCare      VARCHAR(1500) NOT NULL,
   plantImage longblob NOT NULL
 
 )';
 $query = 'CREATE TABLE  IF NOT EXISTS add_place( 
   placename VARCHAR(45) NOT NULL PRIMARY KEY ,
   area  VARCHAR(45) NOT NULL,
   city  VARCHAR(45) NOT NULL,
   description  VARCHAR(45) NOT NULL,
   map   VARCHAR(45) NOT NULL,
   plantImage longblob NOT NULL
  
 )';

 $query = 'CREATE TABLE  IF NOT EXISTS user( 
   email VARCHAR(45) NOT NULL PRIMARY KEY UNIQUE,
   pass  VARCHAR(45) NOT NULL
   reloginDigest  VARCHAR(200)
 )';

$query = 'CREATE TABLE  IF NOT EXISTS nbatati.addplant (
  num INT GENERATED ALWAYS AS () STORED PRIMARY KEY,
  plantName VARCHAR(45) NOT NULL,
  plantType VARCHAR(45) NOT NULL,
  plantCare VARCHAR(1500) NOT NULL,
  plantImage LONGBLOB NOT NULL,
   )';
  
if(@mysqli_query($dbc,$query)){
  print'The table has been created';
}
else{
  die ('<p>Could not create the table because: <b>' . mysqli_error($dbc) . '</b>.</p> <p>The query being run was: ' . $query . '</p>');}

  // if (isset ($_POST['submit'])) { 
  //   $querydata = "INSERT INTO ADDPLANT VALUES('{$_POST['EMPLOYEE_ID']}','{$_POST['FIRST_NAME']}','{$_POST['LAST_NAME']}','{$_POST['EMAIL']}','{$_POST['PHONE_NUMBER']}',
  //   '{$_POST['HIRE_DATE']}','{$_POST['JOB_ID']}','{$_POST['SALARY']}','{$_POST['COMMISSION_PCT']}','{$_POST['MANAGER_ID']}','{$_POST['DEPARTMENT_ID']}')";
    
  //   if (@mysqli_query ($dbc, $querydata)) {
  //     print '<p>The employee has been added.</p>';
  //     }
  //     else {
  //     print "<p>Could not add the entry because: <b>" . mysqli_error($dbc) . "</b>. The query was $querydata.</p>";
  //       }
  //     }

?>



</body>

</html>