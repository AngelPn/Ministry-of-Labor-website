<?php
// Initialize the session
session_start();
 
// Include config file
require_once "authentication/config.php";
 
// Define variables and initialize with empty values
$datetime = $text = $name = $surname = $phone = $mail = "";
$datetime_err = $text_err = $name_err = $surname_err = $phone_err = $mail = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if datetime is empty
    if(empty(trim($_POST["datetime"]))){
        $datetime_err = "Παρακαλώ επιλέξτε ημερομηνία.";
    } else{
        $datetime = trim($_POST["datetime"]);
    }

    // Check if name is empty
    if(empty(trim($_POST["name"]))){
        $name_err = "Παρακαλώ εισάγετε το όνομά σας.";
    } else{
        $name = trim($_POST["name"]);
    }

    // Check if surname is empty
    if(empty(trim($_POST["surname"]))){
      $surname_err = "Παρακαλώ εισάγετε το ονοματεπώνυμό σας.";
    } else{
      $surname = trim($_POST["surname"]);
    }

    // Check if text is empty
    if(empty(trim($_POST["text"]))){
      $text_err = "Παρακαλώ εισάγετε τον λόγο που κλείνετε ραντεβού.";
    } else{
      $text = trim($_POST["text"]);
    }

    // Check if phone is empty
    if(empty(trim($_POST["phone"]))){
        $phone_err = "Παρακαλώ εισάγετε το τηλέφωνό σας.";
    } else{
        $phone = trim($_POST["phone"]);
    }

    // Check if mail is empty
    if(empty(trim($_POST["mail"]))){
        $mail_err = "Παρακαλώ εισάγετε το email σας.";
    } else{
        $mail = trim($_POST["mail"]);
    }

    mysqli_select_db($link, "rantevou");
    if(empty($datetime_err) && empty($text_err) && empty($name_err) && empty($surname_err) && empty($phone_err) && empty($mail_err)){
        // Perform query
        $sql = "INSERT INTO rantevou VALUES ('$datetime', '$text', '$name', '$surname', '$phone', '$mail')";
        if (mysqli_query($link, $sql)) {                           
          echo "Η καταχώρυση του ραντεβού ολοκληρώθηκε με επιτυχία";
          // Redirect user to welcome page
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


<!DOCTYPE html>
<!--
Template Name: Trealop
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="el">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Ραντεβού</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
		<!-- jsCalendar -->
		<link rel="stylesheet" type="text/css" href="calendar/jsCalendar.css">
		<link rel="stylesheet" type="text/css" href="calendar/jsCalendar.micro.css">
		<script type="text/javascript" src="calendar/jsCalendar.js"></script>
		<script type="text/javascript" src="calendar/jsCalendar.datepicker.js"></script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fa fa-globe"></i><a href="#" title="English"> English</a></li>
        <li class="active"><a href="epikinonia.php" title="Επικοινωνία">Επικοινωνία</a></li>
        <?php
        // Check if the user is logged in, if not then redirect him to login page
        if(!isset($_SESSION["loggedin"])){
          echo '<li><a href="authentication/login.php" title="Σύνδεση">Σύνδεση</a></li>';
          echo '<li><a href="authentication/register.php" title="Εγγραφή">Εγγραφή</a></li>';      
        }
        elseif($_SESSION["role_id"] == 1){
          echo '<li><a href="#" class="btn btn-danger" title="Προφίλ εργαζόμενου">Η εργασία μου</a></li>';
          echo '<li><a href="authentication/logout.php"><i class="fa fa-sign-out-alt"></i></a></li>';
        }
        else{
          echo '<li><a href="profile ergodoth/epixirisi.php" class="btn btn-danger" title="Προφίλ εργοδότη">Η επιχείρησή μου</a></li>';
          echo '<li><a href="authentication/logout.php"><i class="fa fa-sign-out-alt"></i></a></li>';
        }
        ?>
        <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Αναζήτηση&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <a href="index.php"><img src="logo.png" alt="logo" style="height:75px;" ></a>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="index.php">Αρχική</a></li>
        <li><a class="drop" href="ergazomenoi.html">Εργαζόμενοι</a>
          <ul>
            <li><a href="covid.html">Μέτρα λόγω πανδημίας</a></li>
            <li><a href="ergazomenoi/symvaseis.html">Συμβάσεις</a></li>
            <li><a href="ergazomenoi/adeies.html">Άδειες</a></li>
            <li><a href="ergazomenoi/epidomata.html">Επιδόματα</a></li>
            <li><a href="ergazomenoi/apoliseis.html">Απολύσεις</a></li>
          </ul>
        </li>
        <li><a class="drop" href="ergodotes.html">Εργοδότες</a>
          <ul>
            <li><a href="covid.html">Μέτρα λόγω πανδημίας</a></li>
            <li><a href="#">Ασφαλιστικός οδηγός</a></li>
            <li><a href="#">Ρύθμιση οφειλών</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Άνεργοι</a>
          <ul>
            <li><a href="#">Δικαιώματα</a></li>
            <li><a href="#">Προϋποθέσεις</a></li>
            <li><a href="#">Δικαιολογητικά</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Συνταξιούχοι</a>
          <ul>
            <li><a href="#">Κριτήρια</a></li>
            <li><a href="#">Δικαιολογητικά</a></li>
          </ul>
        </li>     
        <li><a class="drop" href="#">Νομοθεσία</a>
        <ul>
          <li><a href="#">Νέα και αλλαγές</a></li>
          <li><a href="#">Εργαζόμενοι</a></li>
          <li><a href="#">Εργοδότες</a></li>
          <li><a href="#">Άνεργοι</a></li>
          <li><a href="#">Συνταξιούχοι</a></li>
        </ul>
        </li>             
        <li><a href="#">Βοήθεια</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <main class="hoc container clear"> 
  <!-- main body -->
  <div id="comments">
        <h2>Φόρμα καταχώρησης ραντεβού</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <?php
          // Check if the user is logged in, if not then redirect him to login page
          if(!isset($_SESSION["loggedin"])){
            echo '<div class="one_third first">
                  <label for="name"><strong>Όνομα <span>*</span></label>
                  <input type="text" name="name" id="name" value="" size="22" required>
                </div>
                <div class="one_third">
                  <label for="surname">Επώνυμο<span>*</span></label>
                  <input type="text" name="surname" id="surname" value="" size="22" required>
                </div>
                <div class="one_third">
                  <label for="phone">Τηλέφωνο<span>*</span></label>
                  <input type="phone" name="phone" id="phone" value="" size="22">
                </div>
                <div class="one_third first">
                  <label for="date"><strong>Ημερομηνία και ώρα<span>*</span></label>
                  <input type="datetime-local" name="datetime" id="datetime" value="" size="22" required>
                </div>
                <div class="one_third">
                  <label for="mail"><strong>Ηλεκτρονικό ταχυδρομείο</label>
                  <input type="mail" name="mail" id="mail" value="" size="22" required>
                </div>
                <div class="block clear">
                  <label for="text">Λόγοι κλεισίματος ραντεβού</label>
                  <textarea name="text" id="text" cols="25" rows="10"></textarea>
                </div>
                <div style="float: right;">
                  <input type="reset" name="reset" value="Εκκαθάριση">
                  &nbsp;
                  <input type="submit" name="submit" value="Υποβολή" style="background-color: #53D3DE; color: #FFFFFF;">
                </div>';    
          }
          else{
            $name = $surname = $email = $phone = "";

            // Create connection
            mysqli_select_db($link, "users");
            $id = $_SESSION["id"];
            $sql = "SELECT name, surname, email, phone FROM users where id = '$id'";
            $result = mysqli_query($link, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // output data of each row
                echo " <div class='one_third first'>
                <label for='name'><strong>Όνομα <span>*</span></label>
                <input type='text' name='name' id='name' value=' ".$row["name"]."' size='22' required>
              </div>
              <div class='one_third'>
                <label for='surname'>Επώνυμο<span>*</span></label>
                <input type='text' name='surname' id='surname' value='".$row["surname"]."' size='22' required>
              </div>
              <div class='one_third'>
                <label for='phone'>Τηλέφωνο<span>*</span></label>";
                if ($row["phone"] != NULL){
                  $phone = $row["phone"];
                }
                else{
                  $phone = '';
                }
                echo "<input type='phone' name='phone' id='phone' value='".$phone."' size='22'>
              </div>
              <div class='one_third first'>
                <label for='date'><strong>Ημερομηνία και ώρα<span>*</span></label>
                <input type='datetime-local' name='datetime' id='datetime' value='' size='22' required>
              </div>
              <div class='one_third'>
                <label for='mail'><strong>Ηλεκτρονικό ταχυδρομείο</label>
                <input type='mail' name='mail' id='mail' value='".$row["email"]."' size='22' required>
              </div>
              <div class='block clear'>
                <label for='text'>Λόγοι κλεισίματος ραντεβού</label>
                <textarea name='text' id='text' cols='25' rows='10'></textarea>
              </div>
              <div style='float: right;'>
                <input type='reset' name='reset' value='Εκκαθάριση'>
                &nbsp;
                <input type='submit' name='submit' value='Υποβολή' style='background-color: #53D3DE; color: #FFFFFF;'>
              </div>";
            } else {
                echo "0 results";
            }
            mysqli_close($link);
          }
          ?>        
        </form>
      </div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
      <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="../layout/scripts/jquery.min.js"></script>
  <script src="../layout/scripts/jquery.backtotop.js"></script>
  <script src="../layout/scripts/jquery.mobilemenu.js"></script>
  </body>
  </html>
