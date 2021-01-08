<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$id = $password = $confirm_password = $name = $surname = $email = "";
$id_err = $password_err = $confirm_password_err = $name_err = $surname_err = $email_err =  "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate id
    if(empty(trim($_POST["id"]))){
        $id_err = "Παρακαλώ εισάγετε το ΑΦΜ σας.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_id);
            
            // Set parameters
            $param_id = trim($_POST["id"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $id_err = "Υπάρχει ήδη λογαριασμός με αυτό το ΑΦΜ.";
                } else{
                    $id = trim($_POST["id"]);
                }
            } else{
                echo "Ουπς! Κάτι πήγε στραβά. Παρακαλώ δοκιμάστε αργότερα.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Παρακαλώ εισάγετε κωδικό πρόσβασης.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Ο κωδικός πρόσβασης πρέπει να έχει τουλάχιστον 6 χαρακτήρες.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Παρακαλώ επιβεβαιώστε τον κωδικό πρόσβασης.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Οι κωδικοί πρόσβασης δεν ταιριάζουν.";
        }
    }

    // Validate name
    if(empty(trim($_POST["name"]))){
        $name_err = "Παρακαλώ εισάγετε το όνομά σας.";     
    } else{
        $name = trim($_POST["name"]);
    }
    
    // Validate surname
    if(empty(trim($_POST["surname"]))){
        $surname_err = "Παρακαλώ εισάγετε το όνομά σας.";     
    } else{
        $surname = trim($_POST["surname"]);
    }   

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Παρακαλώ εισάγετε το όνομά σας.";     
    } else{
        $email = trim($_POST["email"]);
    }   
    
    // Check input errors before inserting in database
    if(empty($id_err) && empty($password_err) && empty($confirm_password_err) && empty($name_err)
        && empty($surname_err) && empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (id, name, surname, password, email) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_id, $param_name, $param_surname, $param_password, $param_email);
            
            // Set parameters
            $param_id = $id;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_name = $name;
            $param_surname = $surname;
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Κάτι πήγε στραβά. Παρακαλώ δοκιμάστε αργότερα.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
                <label>id</label>
                <input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
                <span class="help-block"><?php echo $id_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Όνομα</label>
                <input type="name" name="name" class="form-control" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($surname_err)) ? 'has-error' : ''; ?>">
                <label>Επώνυμο</label>
                <input type="password" name="surname" class="form-control" value="<?php echo $surname; ?>">
                <span class="help-block"><?php echo $surname; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="password" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>