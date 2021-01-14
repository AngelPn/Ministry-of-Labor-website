<?php

// Initialize the session
session_start();

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$id = $password = $confirm_password = $name = $email = "";
$id_err = $password_err = $confirm_password_err = $name_err = $email_err =  "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    mysqli_select_db($link, "users");

    // Validate id
    if(empty(trim($_POST["id"]))){
        $id_err = "Παρακαλώ εισάγετε το ΑΦΜ σας.";
    } else{
        $id = trim($_POST["id"]);

        if ($result = mysqli_query($link, "SELECT * FROM users WHERE id = '$id'")){
            $row = mysqli_fetch_array($result);
            if(mysqli_num_rows($result) == 1){
                $id_err = "Υπάρχει ήδη λογαριασμός με αυτό το ΑΦΜ.";
            } else{
                $id = trim($_POST["id"]);
            }
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
        $name_err = "Παρακαλώ εισάγετε το ονοματεπώνυμό σας.";     
    } else{
        $name = trim($_POST["name"]);
    }

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Παρακαλώ εισάγετε το όνομά σας.";     
    } else{
        $email = trim($_POST["email"]);
    }   
    
    mysqli_select_db($link, "users");
    // Check input errors before inserting in database
    if(empty($id_err) && empty($password_err) && empty($confirm_password_err) && empty($name_err) && empty($email_err)){
        /* check if server is alive */
        if (mysqli_ping($link)) {
            printf ("Our connection is ok!\n");
        } else {
            printf ("Error: %s\n", mysqli_error($link));
        }
        // Prepare an insert statement
        $sql = "INSERT INTO users (id, role_id, name, password, email, phone) VALUES ('$id', '2', $name', '$password', '$email', '21032')";
        $_SESSION["id"] = $id;
        $_SESSION["name"] = $name;
        $_SESSION["password"] = $password;
        $_SESSION["email"] = $email;
        // Redirect user to login page
        if (mysqli_query($link, $sql)) {                           
            $_SESSION['status_login'] = true;
            header("location: login.php");
        }
        else{
            $_SESSION['status_login'] = false;
            header("location: login.php");
        }
        
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Εγγραφή</title>
    <link href="../layout/styles/login.css" rel="stylesheet" type="text/css" media="all">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <link rel="icon" href="../logo.ico">
</head>
<body>
    <div class="wrapper">
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container">
            <h2>Εγγραφή</h2>
            <p>Παρακαλώ συμπληρώστε την παρακάτω φόρμα για να δημιουργήσετε λογαριασμό.</p>
            <hr>

            <label><strong>Ονοματεπώνυμο</strong></label>
            <input type="text" placeholder="Το ονοματεπώνυμό σας" name="name" class="form-control" value="<?php echo $name; ?>" required>
            <span class="help-block"><?php echo $name_err; ?></span>

            <label><strong>ΑΦΜ</strong></label>
            <input type="text" placeholder="Το ΑΦΜ σας" name="id" class="form-control" value="<?php echo $id; ?>" required>
            <span class="help-block"><?php echo $id_err; ?></span>

            <label><strong>Ηλεκτρονικό Ταχυδρομείο</strong></label>
            <input type="text" placeholder="Το email σας"  name="email" class="form-control" value="<?php echo $email; ?>" required>
            <span class="help-block"><?php echo $email_err; ?></span>

            <label><strong>Κωδικός Πρόσβασης</strong></label>
            <input type="password" placeholder="Έγκυρος κωδικός πρόσβασης πάνω από 6 χαρακτήρες" name="password" class="form-control" value="<?php echo $password; ?>"required>
            <span class="help-block"><?php echo $password_err; ?></span>

            <label><strong>Επιβεβαίωση κωδικού πρόσβασης</strong></label>
            <input type="password" placeholder="επιβεβαίωση κωδικού" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>"required>
            <span class="help-block"><?php echo $confirm_password_err; ?></span>

            <hr>
            <p>Με τη δημιουργία λογαρισμού, αποδέχεστε τους <a href="#">Όρους & Προϋποθέσεις</a>.</p>

            <button type="submit" class="registerbtn">Δημιουργία λογαριασμού</button>

            <p>Έχετε ήδη λογαριασμό; <a href="login.php">Συνδεθείτε εδώ</a>.</p>
        </div>
        </form>
    </div>    
</body>
</html>