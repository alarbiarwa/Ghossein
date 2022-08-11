<?php
require 'contact.php';
  session_start();
  session_destroy();
  if(isset($_COOKIE["type"])){
    setcookie( 'type', $id_user, time()-3600);

}
    $querydata = "DELETE FROM user WHERE email = '{$_SESSION["loggedUser"]}' ";

    if (@mysqli_query ($dbc, $querydata)) {
        echo ("<script>
        window.alert('Succesfully Deleted');
        window.location='index.php';
        </script>");
        
      }
      else {
      print "<p>Cلم ينجح بسبب  <b>" . mysqli_error($dbc) . "</b>. The query was $querydata.</p>";
        }
        
?>