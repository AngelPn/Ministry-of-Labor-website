<?php
// Initialize the session
session_start();
if(isset($_SESSION['status_arxeio_erg'])){
  unset($_SESSION['status_arxeio_erg']);
  echo "Οι τροποποιήσεις στους εργαζομένους έγιναν με επιτυχία.";
}
else{
  echo "not";
}
 
// Include config file
require_once "../authentication/config.php";
 
// Define variables and initialize with empty values
$status = $period = "";
$status_err = $period_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  require_once "../authentication/config.php";
    // Check if status is empty
    if(empty(trim($_POST["status"]))){
        $status_err = "Παρακαλώ επιλέξτε ημερομηνία.";
    } else{
        $status = trim($_POST["status"]);
    }

    // Check if period is empty
    if(empty(trim($_POST["period"]))){
        $period_err = "Παρακαλώ εισάγετε το όνομά σας.";
    } else{
        $period = trim($_POST["period"]);
    }

    /* check if server is alive */
    if (mysqli_ping($link)) {
      printf ("Our connection is ok!\n");
    } else {
      printf ("Error: %s\n", mysqli_error($link));
    }
    mysqli_select_db($link, "business_employees");
    if(empty($status_err) && empty($period_err)){
        // Perform query
        $sql = "INSERT INTO business_employees VALUES ('$status', '$period')";
        if (mysqli_query($link, $sql)) {                           
          // Redirect user here
          $_SESSION['status_arxeio_erg'] = "success";
          header("location: ../index.php");
        }
        else{
          echo "Κάτι πήγε στραβά! Προσπαθήστε ξανά αργότερα";
        }
    }        
    // Close connection
    mysqli_close($link);
}
?>