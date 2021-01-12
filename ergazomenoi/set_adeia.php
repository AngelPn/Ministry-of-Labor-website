<?php
// Initialize the session
session_start();
 
// Include config file
require_once "../authentication/config.php";
 
// Define variables and initialize with empty values
$employee_id = $business_name = $name_employee = $start_date = $end_date = $type = $file = "";
$employee_id_err = $business_name_err = $name_employee_err = $start_date_err = $end_date_err = $type_err = $file_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

	// Check if name_employee is empty
    if(empty(trim($_POST["name_employee"]))){
      $name_employee_err = "Παρακαλώ εισάγετε το ονοματεπώνυμό σας.";
    } else{
      $name_employee = trim($_POST["name_employee"]);
    }
 
    // Check if employee_id is empty
    if(empty(trim($_POST["employee_id"]))){
        $employee_id_err = "Παρακαλώ το ΑΦΜ σας.";
    } else{
        $employee_id = trim($_POST["employee_id"]);
    }

    // Check if business_id is empty
    if(empty(trim($_POST["business_name"]))){
        $business_name_err = "Παρακαλώ εισάγετε το όνομα της επιχείρησης.";
    } else{
        $business_name = trim($_POST["business_name"]);
    }

    // Check if start date is empty
    if(empty(trim($_POST["start_date"]))){
        $start_date_err = "Παρακαλώ επιλέξτε μέχρι πότε θα ισχύει η άδεια.";
    } else{
        $start_date = trim($_POST["period"]);
	}
	
	// Check if end date is empty
	if(empty(trim($_POST["end_date"]))){
		$end_date_err = "Παρακαλώ επιλέξτε μέχρι πότε θα ισχύει η άδεια.";
	} else{
		$end_date = trim($_POST["period"]);
	}

    // Check if type is empty
    if(empty(trim($_POST["type"]))){
        $type_err = "Παρακαλώ επιλέξτε τον τύπο της άδειας.";
    } else{
        $type = trim($_POST["type"]);
	}
	
	// // Check if file is empty
    // if(empty(trim($_POST["file"]))){
    //     $file_err = "Παρακαλώ φορτώστε τα δικαιολογητικά.";
    // } else{
    //     $file = trim($_POST["file"]);
    //}

    mysqli_select_db($link, "adeies");
    if(empty($employee_id_err) && empty($name_employee_err) && empty($business_name_err) && empty($end_date_err) && empty($start_date_err) && empty($type_err)){
        // Perform query
        $sql = "INSERT INTO adeies VALUES ('$employee_id', '$name_employee', '$business_name', '$start_date', '$end_date', '$type')";
        if (mysqli_query($link, $sql)) {                           
          // Redirect user to welcome page
          $_SESSION['status_adeies'] = "success";
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