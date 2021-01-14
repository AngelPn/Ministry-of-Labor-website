<!DOCTYPE html>
<html lang="el">
<head>
  <title>Στοιχεία επιχείρησης</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link rel="icon" href="../logo.ico">
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
            session_start();
            // Check if the user is logged in
            if(!isset($_SESSION["loggedin"])){
              echo '<li><a href="authentication/login.php" title="Σύνδεση">Σύνδεση</a></li>';
              echo '<li><a href="authentication/register.php" title="Εγγραφή">Εγγραφή</a></li>';      
            }
            elseif($_SESSION["role_id"] == 2){
              echo '<li><a href="epixirisi.php" class="btn btn-danger" title="Προφίλ εργοδότη">Η επιχείρησή μου</a></li>';
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
<div class="wrapper bgded overlay gradient" style="z-index: 1; background-color:rgb(0, 0, 0);">
    <div id="breadcrumb" class="hoc clear"> 
      <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="epixirisi.php">Η ΕΠΙΧΕΙΡΗΣΗ ΜΟΥ</a></li>
        <li>ΑΛΛΑΓΗ ΣΤΟΙΧΕΙΩΝ ΕΠΙΧΕΙΡΗΣΗΣ</li>
      </ul>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <main class="hoc container clear">
    <div class="content three_quarter"> 
        <h1>Στοιχεία επιχείρησης</h1>
        <?php        
            // Include config file
            require_once "../authentication/config.php";
            
            // Define variables and initialize with empty values
            $name = $year = $status = $office = $region = $end_mng = "";
            $id = $_SESSION["id"];

            // Create connection to get business data
            mysqli_select_db($link, "business_data");

            $sql = "SELECT business_name, year, status, office, region, end_mng FROM business_data where id = '$id'";
            $result = mysqli_query($link, $sql);

            if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $name = $row["business_name"];
            $year = $row["year"];
            $status = $row["status"];
            $office = $row["office"];
            $region = $row["region"];
            $end_mng = $row["end_mng"];
            }
            else {
                echo "0 results";
            }

            // Close connection
            mysqli_close($link);
        ?>
        <form action="update_business_data.php" method="post">
            <table>
                <tbody>
                <tr>
                    <td>Επωνυμία</td>
                    <td><input type = 'text' name='business_name' id='business_name' value='<?php echo "$name"; ?>'></td>           
                </tr>
                <tr>
                    <td>ΑΦΜ επιχείρησης</td>
                    <?php echo "<td>$id</td>"; ?>
                </tr>
                <tr>
                    <td>Έτος ίδρυσης</td>
                    <?php echo "<td>$year</td>"; ?>
                </tr>
                <tr>
                    <td>Κατάσταση επιχείρησης</td>
                    <td><input type = 'text' name='status' id='status' value='<?php echo "$status"; ?>'></td>   
                </tr>
                <tr>
                    <td>Έδρα επιχείρησης</td>
                    <td><input type = 'text' name='office' id='office' value='<?php echo "$office"; ?>'></td>
                </tr>
                <tr>
                    <td>Νομός - Περιφέρεια</td>
                    <td><input type = 'text' name='region' id='region' value='<?php echo "$region"; ?>'></td>
                </tr>
                <tr>
                    <td>Λήξη διαχειριστικής περιόδου</td>
                    <td><input type = 'date' name='end_mng' id='end_mng' value='<?php echo "$end_mng"; ?>'></td>
                </tr>
                </tbody>
            </table>
            <div id="comments">
                <div style='float: right;'>
                    <input type='reset' name='reset' value='Εκκαθάριση'>
                    &nbsp;
                    <input type='submit' name='submit' value='Υποβολή' style='background-color: #813DAA; color: #FFFFFF;'>
                </div>
            </div>
        </form>
    </div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc clear"> 
    <div class="content three_quarter first min_info">
      <div class="flex_row">
        <img class="single_logo" src="../images/logo_big.png">
        <p class="yp_name"> Υπουργείο Εργασίας και <br> Κοινωνικών Υποθέσεων</p>
        <ul>
          <li><a href="#"> Ρόλος του Υπουργείου </a></li>
          <li><a href="#"> Πολιτική Ηγεσία </a></li>
          <li><a href="#"> Οργανωτική Δομή </a></li>
        </ul>

        <ul>
          <li><a href="#"> Γενική Γραματεία Πρόνοιας </a></li>
          <li><a href="#"> Γενική Γραματεία Κοινωνικής Ασφάλισης </a></li>
          <li><a href="#"> Σώμα Επιθεώρησης Εργασίας </a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </main>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">https://www.ypakp.gr</a></p>
    <a href="#" ><p class="fl_right">Προσωπικά Δεδομένα και Ασφάλεια</p></a>
  </div>
</div>
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- ################################################################################################ -->

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>