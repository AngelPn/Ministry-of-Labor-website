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
<title>Επικοινωνία</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
        <li class="active"><a href="epikinonia.html" title="Επικοινωνία">Επικοινωνία</a></li>
        <?php
        session_start();
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
      <a href="index.html"><img src="logo.png" alt="logo" style="height:75px;" ></a>
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
    <section id="cta" class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <ul class="nospace clear">
        <li class="one_quarter first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Τηλεφωνήστε μας:</strong> +30 123 456 7890</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Στείλτε μας mail:</strong>support@domain.com</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong>Δευτέρα - Σάββατο:</strong> 08.00πμ - 18.00μμ</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Επισκεφθείτε μας:</strong>Λόγω covid-19 θα χρειαστεί να <a href="rantevou.php">κλείσετε ραντεβού</a></span></div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <main class="hoc container clear"> 
        <div class="content three_quarter"> 
            <div id="comments">
                <h2>Ηλεκτρονική επικοινωνία</h2>
                <form action="#" method="post">
                <div class="one_third first">
                    <label for="name">Ονοματεπώνυμο <span>*</span></label>
                    <input type="text" name="name" id="name" value="" size="22" required>
                </div>
                <div class="one_third">
                    <label for="email">Mail <span>*</span></label>
                    <input type="email" name="email" id="email" value="" size="22" required>
                </div>
                <div class="one_third">
                    <label for="url">Τηλέφωνο</label>
                    <input type="url" name="url" id="url" value="" size="22">
                </div>
                <div class="block clear">
                    <label for="comment">Κείμενο</label>
                    <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                </div>
                <div>
                    <input type="reset" name="reset" value="Εκκαθάριση">
                    &nbsp;
                    <input type="submit" name="submit" value="Αποστολή">
                </div>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </main>
</div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
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