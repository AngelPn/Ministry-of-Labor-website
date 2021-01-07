<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: ../index.php");
  exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$afm = $password = "";
$afm_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if afm is empty
    if(empty(trim($_POST["afm"]))){
        $afm_err = "Παρακαλώ εισάγετε το ΑΦΜ σας.";
    } else{
        $afm = trim($_POST["afm"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Παρακαλώ εισάγετε τον κωδικό σας.";
    } else{
        $password = trim($_POST["password"]);
    }

    // to prevent mysql injection
    $afm = stripcslashes($afm);
    $password = stripcslashes($password);
    $afm = mysqli_real_escape_string($link, $afm);
    $password = mysqli_real_escape_string($link, $password);

    mysqli_select_db($link, "users");
    if(empty($afm_err) && empty($password_err)){
        // Perform query
        if ($result = mysqli_query($link, "SELECT * FROM users WHERE afm = '$afm' and password = '$password'")) {

            $row = mysqli_fetch_array($result);
            if (mysqli_num_rows($result)== 1 && $row['afm']==$afm && $row['password']==$password){
                // Password is correct, so start a new session
                session_start();

                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["afm"] = $afm;                            
                
                // Redirect user to welcome page
                header("location: ../index.php");
            }
            else{
                // Display an error message if password is not valid
                $password_err = "To ΑΦΜ ή ο κωδικός που πληκτρολογήσατε δεν είναι έγκυρα.";
            }
            // Free result set
            mysqli_free_result($result);
        }        
    }

    // // Validate credentials
    // if(empty($afm_err) && empty($password_err)){
    //     // Prepare a select statement
    //     $sql = "SELECT afm, password FROM users WHERE afm = ?";
        
    //     if($stmt = mysqli_prepare($link, $sql)){
    //         // Bind variables to the prepared statement as parameters
    //         mysqli_stmt_bind_param($stmt, "s", $param_afm);
            
    //         // Set parameters
    //         $param_afm = $afm;
            
    //         // Attempt to execute the prepared statement
    //         if(mysqli_stmt_execute($stmt)){
    //             // Store result
    //             mysqli_stmt_store_result($stmt);
                
    //             // Check if afm exists, if yes then verify password
    //             if(mysqli_stmt_num_rows($stmt) == 1){     
    //                 print("here");
    //                 echo "on the command line";
    //                 // Set parameters
    //                 $hashed_password = $password;               
    //                 // Bind result variables
    //                 mysqli_stmt_bind_result($stmt, $afm, $hashed_password);
    //                 print("out ofpass");
    //                 if(mysqli_stmt_fetch($stmt)){
    //                     print("fetch");
    //                     $hashed_password = $password; 
    //                     if(password_verify($password, $hashed_password)){
    //                         // Password is correct, so start a new session
    //                         session_start();
    //                         print("pass");
    //                         // Store data in session variables
    //                         $_SESSION["loggedin"] = true;
    //                         $_SESSION["afm"] = $afm;                            
                            
    //                         // Redirect user to welcome page
    //                         header("location: index.php");
    //                     }
    //                     else{
    //                         // Display an error message if password is not valid
    //                         $password_err = "Ο κωδικός που πληκτρολογήσατε δεν είναι έγκυρος.";
    //                     }
    //                 }
    //             } 
    //             else{
    //                 // Display an error message if afm doesn't exist
    //                 $afm_err = "Δεν βρέθηκε χρήστης με αυτό το ΑΦΜ.";
    //             }
    //         } else{
    //             echo "Oops! Something went wrong. Please try again later.";
    //         }

    //         // Close statement
    //         mysqli_stmt_close($stmt);
    //     }
    // }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Σύνδεση</title>
    <link href="../layout/styles/login.css" rel="stylesheet" type="text/css" media="all">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="imgcontainer">
        <img src="../images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <div class="form-group <?php echo (!empty($afm_err)) ? 'has-error' : ''; ?>">
                <label>ΑΦΜ</label>
                <input type="text" name="afm" class="form-control" value="<?php echo $afm; ?>">
                <span class="help-block"><?php echo $afm_err; ?></span>
        </div> 
        <!-- <label for="uname"><b>ΑΦΜ</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required> -->
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Κωδικός πρόσβασης</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
        </div>
        <!-- <label for="psw"><b>Κωδικός πρόσβασης</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required> -->
            
        <button type="submit">Σύνδεση</button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Απομνημόνευση
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Ακύρωση</button>
        <span class="psw"><a href="#">Ξέχασες τον κωδικό;</a></span>
    </div>
    </form>  
</body>
</html>