<?php
// Initialize the session
session_start();
 
// Include config file
require_once "../authentication/config.php";
 
// Define variables and initialize with empty values
$name = $email = $phone = "";
$id = $_SESSION["id"];

// Create connection to get the name
mysqli_select_db($link, "users");
$sql = "SELECT name, email, phone FROM users where id = '$id'";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $name = $row["name"];
  $email = $row["email"];
  $phone = $row["phone"];
}
else {
  echo "0 results";
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
<title>Η εργασία μου</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div id="fixed">
	<div class="wrapper row0">
	  <div id="topbar" class="hoc clear" >
	    <div class="fl_right"> 
	      <!-- ################################################################################################ -->
	      <ul class="nospace">
	        <li><a href="#" title="English"><i class="fas fa-globe"></i> English</a></li>
	        <li><a href="../epikinonia.php" title="Επικοινωνία">Επικοινωνια</a></li>
          <?php
          // Check if the user is logged in
          if(!isset($_SESSION["loggedin"])){
            echo '<li><a href="../authentication/login.php" title="Σύνδεση">Σύνδεση</a></li>';
            echo '<li><a href="../authentication/register.php" title="Εγγραφή">Εγγραφή</a></li>';      
          }
          elseif($_SESSION["role_id"] == 1){
            echo '<li><a href="ergasia.php" class="btn btn-danger" title="Προφίλ εργοδότη">Η εργασία μου</a></li>';
            echo '<li><a href="../authentication/logout.php" title = "Αποσύνδεση"><i class="fa fa-sign-out-alt"></i></a></li>';
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

	<div class="wrapper row1">
	  <header id="header" class="hoc clear">
	  	<div id="logo" class="fl_left"> 
      		<a href="../index.php"><img src="../images/logo.png" style="height: 65px;"></a>
    	</div>

	    <nav id="mainav" class="fl_right"> 

	      <ul class="clear">

	        <li><a class="nodrop" href="../index.php" style="padding-top: 32px; padding-bottom: 30px;">Αρχικη</a></li>

	        <li ><a class="drop" href="ergazomenoi.html">&nbsp;Εργαζομενοι</a>
	          <ul>
	            <li><a href="covid.html">Μετρα λογω πανδημιας</a></li>
	            <li><a href="ergazomenoi/symvaseis.html">Συμβασεις</a></li>
	            <li><a href="ergazomenoi/adeies.html">Αδειες</a></li>
	            <li><a href="ergazomenoi/epidomata.html">Επιδοματα</a></li>
	            <li><a href="ergazomenoi/apoliseis.html">Απολυσεις</a></li>
	          </ul>
	        </li>
	        <li><a class="drop" href="../ergodotes.php">&nbsp;Εργοδοτες</a>
	          <ul>
	            <li><a href="covid.html">Μέτρα λόγω πανδημίας</a></li>
	            <li><a href="#">Ασφαλιστικός οδηγός</a></li>
	            <li><a href="#">Ρύθμιση οφειλών</a></li>
	          </ul>
	        </li>
	        <li><a class="drop" href="#" style="width: 145px;">&nbsp;Ανεργοι</a>
	          <ul>
	            <li><a href="#">Δικαιώματα</a></li>
	            <li><a href="#">Προϋποθέσεις</a></li>
	            <li><a href="#">Δικαιολογητικά</a></li>
	          </ul>
	        </li>
	        <li><a class="drop" href="#">&nbsp;Συνταξιουχοι</a>
	          <ul>
	            <li><a href="#">Κριτήρια</a></li>
	            <li><a href="#">Δικαιολογητικά</a></li>
	          </ul>
	        </li>     
	        <li><a class="drop" href="#">&nbsp;Νομοθεσια</a>
	        <ul>
	          <li><a href="#">Νέα και αλλαγές</a></li>
	          <li><a href="#">Εργαζόμενοι</a></li>
	          <li><a href="#">Εργοδότες</a></li>
	          <li><a href="#">Άνεργοι</a></li>
	          <li><a href="#">Συνταξιούχοι</a></li>
	        </ul>
	        </li>             
	        <li><a class="nodrop" href="#">Βοηθεια</a></li>
	      </ul>
	      <!-- ################################################################################################ -->
	    </nav>
	  </header>
	</div>
</div>

<!-- ################################################################################################ -->
<div style="padding-bottom: 130px;"></div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay gradient" style="z-index: 1; background-color:rgb(0, 0, 0);">
    <div id="breadcrumb" class="hoc clear"> 
      <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i></a></li>
        <li class="active">ΕΡΓΑΣΙΑΚΗ ΚΑΤΑΣΤΑΣΗ</li>
      </ul>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <h6>Η εργασία μου</h6>
      <nav class="sdb_holder">
      <ul>
          <li class="active"><a href="ergasia.php">Εργασιακή κατάσταση</a></li>
          <li><a href="#">Τα στοιχεία μου</a></li>
          <li><a href="#">Ηλεκτρονικές υπηρεσίες</a></li>
          <li><a href="#">Άδειες</a>
          <ul>
              <li><a href="#">που έχω λάβει</a></li>
              <li><a href="#">που δικαιούμαι</a></li>
          </ul>
          </li>
          <li><a href="#">Ιστορικό αιτήσεων</a></li>  
      </ul>
      </nav>
    </div>
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <h1>Εργασιακή κατάσταση</h1>
      <div class="scrollable">
          <table>
              <thead>
                  <tr>
                      <th>Επιχείρηση</th>
                      <th>Αρχείο Σύμβασης Εργασίας</th>
                      <th>Κατάσταση</th>
                      <th>Ισχύ μέχρι</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                
                // Define variables and initialize with empty values
                $business_id = $status = $period = "";
                $employee_id = $_SESSION["id"];

                // Include config file
              //   require_once "../authentication/config.php";

                // Create connection to get business employees
                mysqli_select_db($link, "business_employees");

                $sql = "SELECT business_id, status, period FROM business_employees where employee_id = '$employee_id'";
                $result = mysqli_query($link, $sql);

                // Create connection to get name of business
                mysqli_select_db($link, "users");

                if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)){
                    $sql = "SELECT name FROM users where id = ".$row["business_id"]."";
                    $result2 = mysqli_query($link, $sql);
                    $row2 = mysqli_fetch_assoc($result2);
                    echo "<tr>
                              <td>".$row2["name"]."</td>
                              <td><a href='#'>Σύμβαση εργασίας</a></td>
                              <td>".$row["status"]."</td>
                              <td>".$row["period"]."</td>
                          </tr>";
                  }
                }
                else {
                  echo "0 results";
                }
                mysqli_close($link);
                ?>
              </tbody>
          </table>    
      </div>
    </div>
    <!-- ################################################################################################ -->
    <div class="content three_quarter">
      <h1>Τα στοιχεία μου</h1>
      <div class="scrollable">
        <table>
          <tbody>
            <tr>
                <td>Ονοματεπώνυμο</td>
                <?php
                echo "<td>$name</td>";
                ?>
            </tr>
            <tr>
                <td>ΑΦΜ</td>
                <?php
                echo "<td>$id</td>";
                ?>
            </tr>
            <tr>
                <td>Email</td>
                <?php
                echo "<td>$email</td>";
                ?>
            </tr>
            <tr>
                <td>Τηλέφωνο</td>
                <?php
                echo "<td>$phone</td>";
                ?>
            </tr>
          </tbody>
        </table>
        <div style='float: right;'>
            <a href="#">Τροποποίηση στοιχείων</a>
        </div>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <div class="content three_quarter">
      <h1>Ηλεκτρονικές υπηρεσίες</h1>
      <ul class="clear">
        <li><a href="../ergazomenoi/aithsh_adeias.html">Αίτηση άδειας</a></li>
        <li><a href="#">Αίτηση για επίδομα</a></li>
        <li><a href="#">Αίτηση για ένταξη στο ταμείο ανεργίας</a></li>
        <li><a href="#">Υποβολή οικειοθελούς αποχώρησης από την εργασία μου</a></li>
        <li><a href="#">Αίτηση για σύνταξη</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
    <div class="content three_quarter">
      <h1>Άδειες που έχω λάβει</h1>
      <ul class="clear">
        <li><a href="../ergazomenoi/aithsh_adeias.html">Αίτηση άδειας</a></li>
        <li><a href="#">Αίτηση για επίδομα</a></li>
        <li><a href="#">Αίτηση για ένταξη στο ταμείο ανεργίας</a></li>
        <li><a href="#">Υποβολή οικειοθελούς αποχώρησης από την εργασία μου</a></li>
        <li><a href="#">Αίτηση για σύνταξη</a></li>
      </ul>
    </div>
    <div class="clear"></div>
    <!-- / main body -->
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
  <script src="layout/scripts/jquery.min.js"></script>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>
  </body>
  </html>