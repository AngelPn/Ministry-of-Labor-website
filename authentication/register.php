<?php

// Initialize the session
session_start();

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$id = $password = $confirm_password = $name = $email = $phone = "";
$id_err = $password_err = $confirm_password_err = $name_err = $email_err = $phone_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Receice all input values from the form
    $id = mysqli_real_escape_string($link, trim($_POST["id"]));
    $password = mysqli_real_escape_string($link, trim($_POST["password"]));
    $name = mysqli_real_escape_string($link, trim($_POST["name"]));
    $email = mysqli_real_escape_string($link, trim($_POST["email"]));
    $phone = mysqli_real_escape_string($link, trim($_POST["phone"]));
 
    mysqli_select_db($link, "users");

    // Validate id
    if(empty($id)){
        $id_err = "<b style='color:red;'>Παρακαλώ εισάγετε το ΑΦΜ σας.</b>";
    } else{

        if ($result = mysqli_query($link, "SELECT * FROM users WHERE id = '$id'")){
            $row = mysqli_fetch_array($result);
            if(mysqli_num_rows($result) == 1){
                $id_err = "<b style='color:red;'>Υπάρχει ήδη λογαριασμός με αυτό το ΑΦΜ.</b>";
            }
        }
    }
        
    // Validate password
    if(empty($password)){
        $password_err = "<b style='color:red;'>Παρακαλώ εισάγετε κωδικό πρόσβασης.</b>";     
    } elseif(strlen($password) < 6){
        $password_err = "<b style='color:red;'>Ο κωδικός πρόσβασης πρέπει να έχει τουλάχιστον 6 χαρακτήρες.</b>";
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<b style='color:red;'>Παρακαλώ επιβεβαιώστε τον κωδικό πρόσβασης.</b>";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "<b style='color:red;'>Οι κωδικοί πρόσβασης δεν ταιριάζουν.</b>";
        }
    }

    // Validate name
    if(empty($name)){
        $name_err = "<b style='color:red;'>Παρακαλώ εισάγετε το ονοματεπώνυμό σας.</b>";     
    }

    // Validate email
    if(empty($email)){
        $email_err = "<b style='color:red;'>Παρακαλώ εισάγετε το όνομά σας.</b>";     
    }
    
    // Check input errors before inserting in database
    if(empty($id_err) && empty($password_err) && empty($confirm_password_err) && empty($name_err) && empty($email_err)){
        /* check if server is alive */
        if (mysqli_ping($link)) {
            printf ("Our connection is ok!\n");
        } else {
            printf ("Error: %s\n", mysqli_error($link));
        }
        // Prepare an insert statement
        $sql = "INSERT INTO users (id, name, password, email, phone) VALUES ('$id', '$name', '$password', '$email', '$phone')";
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
            <p>Τα πεδία με <span style='color:red;'>*</span> είναι υποχρεωτικά.</p>
            <hr>

            <label><strong>Ονοματεπώνυμο<span style='color:red;'>*</span></strong></label>
            <input type="text" placeholder="Το ονοματεπώνυμό σας" name="name" class="form-control" value="<?php echo $name; ?>" required>
            <span class="help-block"><?php echo $name_err; ?></span>

            <label><strong>ΑΦΜ<span style='color:red;'>*</span></strong></label>
            <input type="text" placeholder="Το ΑΦΜ σας" name="id" class="form-control" value="<?php echo $id; ?>" required>
            <span class="help-block"><?php echo $id_err; ?></span>

            <label><strong>Ηλεκτρονικό Ταχυδρομείο<span style='color:red;'>*</span></strong></label>
            <input type="text" placeholder="Το email σας"  name="email" class="form-control" value="<?php echo $email; ?>" required>
            <span class="help-block"><?php echo $email_err; ?></span>

            <label><strong>Τηλέφωνο</strong></label>
            <input type="text" placeholder="Το τηλέφωνό σας"  name="phone" class="form-control" value="<?php echo $phone; ?>">
            <span class="help-block"><?php echo $phone_err; ?></span>

            <label><strong>Κωδικός Πρόσβασης<span style='color:red;'>*</span></strong></label>
            <input type="password" placeholder="Έγκυρος κωδικός πρόσβασης πάνω από 6 χαρακτήρες" name="password" class="form-control" value="<?php echo $password; ?>"required>
            <span class="help-block"><?php echo $password_err; ?></span>

            <label><strong>Επιβεβαίωση κωδικού πρόσβασης<span style='color:red;'>*</span></strong></label>
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