<!DOCTYPE html>
<html lang="el">
<head>
  <title>Ραντεβού</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div id="fixed">
	<div class="wrapper row0">
	  <div id="topbar" class="hoc clear" >
	    <div class="fl_right"> 
	      <ul class="nospace">
	        <li><a href="#" title="English"><i class="fas fa-globe"></i> English</a></li>
	        <li class = "active"><a href="epikinonia.php" title="Επικοινωνία">Επικοινωνια</a></li>
          <?php
            session_start();
            // Check if the user is logged in
            if(!isset($_SESSION["loggedin"])){
              echo '<li><a href="authentication/login.php" title="Σύνδεση">Σύνδεση</a></li>';
              echo '<li><a href="authentication/register.php" title="Εγγραφή">Εγγραφή</a></li>';      
            }
            elseif($_SESSION["role_id"] == 1){
              echo '<li><a href="#" class="btn btn-danger" title="Προφίλ εργαζόμενου">Η εργασία μου</a></li>';
              echo '<li><a href="authentication/logout.php" title = "Αποσύνδεση"><i class="fa fa-sign-out-alt"></i></a></li>';
            }
            else{
              echo '<li><a href="profile ergodoth/epixirisi.php" class="btn btn-danger" title="Προφίλ εργοδότη">Η επιχείρησή μου</a></li>';
              echo '<li><a href="authentication/logout.php" title = "Αποσύνδεση"><i class="fa fa-sign-out-alt"></i></a></li>';
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
  <!-- ################################################################################################ -->
	<div class="wrapper row1">
	  <header id="header" class="hoc clear">
	  	<div id="logo" class="fl_left"> 
      		<a href="index.php"><img src="images/logo.png" style="height: 65px;"></a>
    	</div>
	    <nav id="mainav" class="fl_right"> 
	      <ul class="clear">
	        <li><a class="nodrop" href="index.php" style="padding-top: 32px; padding-bottom: 30px;">Αρχικη</a></li>
	        <li ><a class="drop" href="ergazomenoi.html">&nbsp;Εργαζομενοι</a>
	          <ul>
	            <li><a href="covid.html">Μετρα λογω πανδημιας</a></li>
	            <li><a href="ergazomenoi/symvaseis.html">Συμβασεις</a></li>
	            <li><a href="ergazomenoi/adeies.html">Αδειες</a></li>
	            <li><a href="ergazomenoi/epidomata.html">Επιδοματα</a></li>
	            <li><a href="ergazomenoi/apoliseis.html">Απολυσεις</a></li>
	          </ul>
	        </li>
	        <li><a class="drop" href="ergodotes.php">&nbsp;Εργοδοτες</a>
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
	    </nav>
	  </header>
	</div>
</div>

<!-- ################################################################################################ -->
<div style="padding-bottom: 115px;"></div>
<!-- ################################################################################################ -->

<div class="wrapper bgded overlay gradient" style="z-index: 1; background-color:rgb(0, 0, 0);">
    <div id="breadcrumb" class="hoc clear"> 
      <ul>
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="epikinonia.php">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
        <li>ΚΑΤΟΧΥΡΩΣΗ ΡΑΝΤΕΒΟΥ</li>
      </ul>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <main class="hoc container clear"> 
  <!-- main body -->
  <div id="comments">
        <h2>Φόρμα καταχώρησης ραντεβού</h2>
        <p>Η εξυπηρέτηση των πολιτών γίνεται μόνο με καθορισμό ραντεβού. 
          Παρακαλώ συμπληρώστε την παρακάτω φόρμα.</p>
          <form action='insert_rantevou.php' method='post'>
          <?php
            // After submission, redirect to current page so set SESSION to current page
            $current_page = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $_SESSION['redirect_to'] = $current_page;
            // Check if the user is logged in
            if(!isset($_SESSION["loggedin"])){
              echo '<p>Αν έχετε λογαριασμό, μπορείτε να
                    <link><a href="authentication/login.php">συνδεδείτε</a></link>
                    για αυτόματη συμπλήρωση των πεδίων.</p>
                    <div class="one_third first">
                    <label for="name"><strong>Ονοματεπώνυμο/Επωνυμία επιχείρησης<span>*</span></label>
                    <input type="text" name="name" id="name" value="" size="22" required>
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
              // Include config file
              require_once "authentication/config.php";

              // Create connection
              mysqli_select_db($link, "users");
              $id = $_SESSION["id"];
              $sql = "SELECT name, email, phone FROM users where id = '$id'";
              $result = mysqli_query($link, $sql);

              if (mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  // output data of each row
                  echo " <div class='one_third first'>
                      <label for='name'><strong>Ονοματεπώνυμο/Επωνυμία επιχείρησης<span>*</span></label>
                      <input type='text' name='name' id='name' value=' ".$row["name"]."' size='22' required>
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
