<!DOCTYPE html>
<html lang="el">
<head>
  <title>Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</title>
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
	        <li ><a class="drop" href="ergazomenoi.php>&nbsp;Εργαζομενοι</a>
	          <ul>
	            <li><a href="covid.html">Μετρα λογω πανδημιας</a></li>
	            <li><a href="#">Συμβασεις</a></li>
	            <li><a href="../ergazomenoi/aithsh_adeias.php">Αδειες</a></li>
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
<main class="hoc clear">
    <!-- <img src="images/checkmark2.png" alt ="checkmark" style="width:350px;height:200px;"> -->
            
        <?php
            // if(isset($_SESSION['status_rantevou'])){
            //     if($_SESSION['status_rantevou'] == true){
            //         echo "<p style='font-size:130px; text-align:center;'>&#128512;</p>";
            //         echo "<p style= 'text-align:center;'>Η κατοχύρωση του ραντεβού ολοκληρώθηκε με επιτυχία</p>";
            //         $index='index.php';
            //         echo '<button onclick="document.location='.$index.'" style="background-color: #813DAA; color: #FFFFFF;">Επιστροφή στην αρχική σελίδα</button>';
            //     } 
            //     else{
            //         echo "<p style='font-size:130px; text-align:center;'>&#128533;</p>";
            //         echo "<p style= 'text-align:center;'>Κάτι πήγε στραβά! Δοκιμάστε ξανά αργότερα</p>";
            //         $index='index.php';
            //         echo '<div class="container_success">
            //         <div class="center">
            //         <button onclick="document.location='.$index.'" style="background-color: #813DAA; color: #FFFFFF;;">Επιστροφή στην αρχική σελίδα</button>
            //         </div>
            //       </div>
            //         ';   
            //     }
            //     unset($_SESSION['status_rantevou']);    
            // }
            if(isset($_SESSION['status_adeies'])){
              if($_SESSION['status_adeies'] == true){
                  echo "<p style='font-size:130px; text-align:center;'>&#128512;</p>";
                  echo "<p style= 'text-align:center;'>Η αίτηση άδειας ολοκληρώθηκε με επιτυχία</p>";
                  $index='index.php';
                  echo '<button onclick="document.location='.$index.'" style="background-color: #813DAA; color: #FFFFFF;">Επιστροφή στην αρχική σελίδα</button>';
              } 
              else{
                  echo "<p style='font-size:130px; text-align:center;'>&#128533;</p>";
                  echo "<p style= 'text-align:center;'>Κάτι πήγε στραβά! Δοκιμάστε ξανά αργότερα</p>";
                  $index='index.php';
                  echo '<button onclick="document.location='.$index.'" style="background-color: #813DAA; color: #FFFFFF;">Επιστροφή στην αρχική σελίδα</button>';;   
              }
              unset($_SESSION['status_adeies']);    
          }
          else{
            echo "<p style='font-size:130px; text-align:center;'>&#128533;</p>";
          }
        ?>
</main>

</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc clear"> 

    <div class="content three_quarter first min_info">
      <div class="flex_row">
        <img class="single_logo" src="./images/logo_big.png">
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