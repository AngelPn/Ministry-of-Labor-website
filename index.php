<?php
session_start();
if(isset($_SESSION['status_success'])){
  unset($_SESSION['status_success']);
  echo "Η κατοχύρωση του ραντεβού ολοκληρώθηκε με επιτυχία";
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
<title>Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body id="top">


<!-- ################################################################################################ -->
<div id="fixed">
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear" >
      <div class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><a href="#" title="English"><i class="fas fa-globe"></i> English</a></li>
          <li><a href="epikinonia.php" title="Επικοινωνία">Επικοινωνια</a></li>
          <?php
          // Check if the user is logged in, if not then redirect him to login page
          if(!isset($_SESSION["loggedin"])){
            echo '<li><a href="authentication/login.php" title="Σύνδεση">Σύνδεση</a></li>';
            echo '<li><a href="authentication/register.php" title="Εγγραφή">Εγγραφή</a></li>';      
          }
          elseif($_SESSION["role_id"] == 1){
            echo '<li><a href="profile ergazomenou/ergasia.php" class="btn btn-danger" title="Προφίλ εργαζόμενου">Η εργασία μου</a></li>';
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
        <!-- ################################################################################################ -->
      </div>
    </div>
  </div>

  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
          <a href="#"><img src="images/logo.png" style="height: 65px;"></a>
      </div>

      <nav id="mainav" class="fl_right"> 

        <ul class="clear">

          <li class="active"><a class="nodrop" href="index.php" style="padding-top: 32px; padding-bottom: 30px;">Αρχικη</a></li>

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
        <!-- ################################################################################################ -->
      </nav>
    </header>
  </div>
</div>
<!-- ################################################################################################ -->
<div style="padding-bottom: 115px;"></div>
<!-- ################################################################################################ -->


<!-- ################################################################################################ -->
<div class="wrapper row2">
  <main class="hoc container clear"> 

    <div class="content three_fifth first">
      <ul class="main_list">
        <div class="flex_row">
          <li class="main_article one_half first">
            <a href="#">
              <img class="article_pic" src="images/spiti.jpg">
              <h3> Ότι χρειάζεται να ξέρετε για τον COVID-19 </h3></a>
          </li>

          <li class="main_article one_half">
            <a href="#">
            <img class="article_pic" src="images/espaeshop.jpg">
            <h3> Επιδότηση σε επιχειρήσεις για δημιουργία eshop </h3></a>
          </li>
        </div>

        <div class="flex_row">
          <li class="main_article one_half first">
            <a href="#">
            <img class="article_pic" src="images/img1.webp">
            <h3> Υπάρχει πιθανότητα να έχω έρθει σε επαφή με φορέα του COVID-19.
            Τι να προσέχω; </h3></a>
          </li>

          <li class="main_article one_half">
            <a href="#">
            <img class="article_pic" src="images/covid1.jpg">
            <h3> Οδηγείες και μέτρα πρόληψης </h3></a>
          </li>
        </div>
        
        <div class="flex_row">
          <li class="main_article one_half first">
            <a href="#">
            <img class="article_pic" src="images/notes.jpg">
            <h3> Πώς να υποβάλετε αίτηση για ασφάλιση ανέργου</h3></a>
          </li>

          <li class="main_article one_half">
            <a href="#">
            <img class="article_pic" src="images/hands.jpg">
            <h3> Mέτρα πρόληψης κατά του COVID σε εργασιακό περιβάλλον </h3></a>
          </li>
        </div>

        <div class="flex_row">
          <li class="main_article one_half first">
            <a href="#">
            <img class="article_pic" src="images/shop.jpg">
            <h3> Μέχρι 4 άτομα ανά 100 τετραγωνικά μέτρα σε καταστήματα</h3></a>
          </li>

          <li class="main_article one_half">
            <a href="#">
            <img class="article_pic" src="images/New_office.jpg">
            <h3> Τι να κάνετε σε περίπτωση κρούσματος στο περιβάλλον εργασίας σας </h3></a>
          </li>
        </div>
      </ul>
      <div class="more">
          <a href="#" style="all:initial; font-family:'Ubuntu'; font-size:18px; cursor:pointer;/*color: white;*/"><b>Φορτώστε περισσότερα άρθρα</b></a>
        </div>
    </div>

    <div class="sidebar two_fifth"> 
      <!-- ################################################################################################ -->
      <h6 style="padding-top: 10px;">Τελευταία Νέα</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#"> 10/01/21 - <b>Επέκταση του Lockdown στα καταστήματα και την εστίαση κατά 22 εβδομάδες</b></a></li>
          <li><a href="#"> 08/01/21 - <b>Ξεκίνησαν οι εγγραφές για τον 2ο κύκλο του Δωρεάν Webinar Διαδικτυακής επιχειρηματικότητας του ΥΠΑΚΠ</b></a></li>
          <li><a href="#"> 08/01/21 - <b>Ετήσιος Διαγωνισμός προσλήψεων του ΥΠΑΚΠ για το 2021</b> </a></li>
          <li><a href="#"> 07/01/21 - <b>Νέα προγράμματα χρηματοδότησης επιχειρήσεων μέσω του ΕΣΠΑ και της ΕΕ</b></a></li>
          <li><a href="#"> 05/01/21 - <b>Αναθεώρηση εργασιακών δικαιωμάτων εργαζομένων που τηλεργάζονται για καλύτερη προστασία των εργαζομένων</b></a></li>
          <li><a href="#"> 02/01/21 - <b>Νέο Δωρεάν Webinar από το ΥΠΑΚΠ με στόχο την καταπολέμηση του ηλεκτρονικού αναλφαβητισμού στην αγορά εργασίας</b></a></li>
          <li><a href="#"> 02/01/21 - <b>Αλλαγές στην Νομοθεσία με στόχο την ενίσχυση Ανέργων και Ηλικιωμένων</b></a></li>
          <li><a href="#"> 01/01/21 - <b>To Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων, μαζί με όλο του το προσωπικό σας εύχεται Καλή και Παραγωγική Χρονιά!</b></a></li>
          <li><a href="#"> 31/12/20 - <b>Ετήσιος Απολογισμός της πορείας και της δράσης του ΥΠΑΚΠ για το 2020</b></a></li>
        </ul>
        <div class="more">
          <a href="#" style="all:initial; font-family:'Ubuntu'; font-size:18px; cursor:pointer; /*color: white;*/"><b>Παλαιότερα Νέα</b></a>
        </div>
        
      </nav>
      

      <div class="sdb_holder" style="text-align: center;">
        <a href="#"> <img src="./images/menoume_asfaleis.png">
          <p style="font-size: 16.5px;">Μείνετε ενήμεροι για το πώς επηρεάζεται ο χώρος της Εργασίας στην Ελλάδα από τον COVID-19</p></a>
      </div>
    </div>

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
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">https://www.ypakp.gr</a></p>
    <p class="fl_right">Based on Trealop from OS Templates</a></p>
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