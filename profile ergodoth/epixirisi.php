<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
        <li><a href="epikinonia.html" title="Επικοινωνία">Επικοινωνία</a></li>
        <li class="active"><a href="epixirisi.html" title="Η επιχείρησή μου">Η επιχείρησή μου</a></li>
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
      <a href="index.html"><img src="../logo.png" alt="logo" style="height:75px;" ></a>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="index.html">Αρχική</a></li>
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
<div class="wrapper bgded overlay gradient" style="background-color:rgb(0, 0, 0);">
    <div id="breadcrumb" class="hoc clear"> 
      <ul>
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li>Η επιχείρησή μου</li>
      </ul>
      <!-- ################################################################################################ -->
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
            <h6>Η επιχείρησή μου</h6>
            <nav class="sdb_holder">
            <ul>
                <li class="active"><a href="epixirisi.html">Στοιχεία επιχείρησης</a></li>
                <li><a href="arxeio_ergazomenwn.html">Εργαζόμενοι</a></li>
                <li><a href="#">Οικονομική διαχείρηση</a>
                <ul>
                    <li><a href="#">Φορολογικές υποχρεώσεις</a></li>
                    <li><a href="#">Μηνιαία έσοδα κι έξοδα</a></li>
                </ul>
                </li>
                <li><a href="#">Ηλεκτρονικές υπηρεσίες</a></li>
            </ul>
            </nav>
        </div>
        <!-- ################################################################################################ -->
        <div class="content three_quarter"> 
            <h1>Στοιχεία επιχείρησης</h1>
            <div class="scrollable">
                <table>
                  <tbody>
                    <tr>
                        <td>Επωνυμία/ΑΦΜ</td>
                        <td>Value 1</td>
                    </tr>
                    <tr>
                        <td>Έτος ίδρυσης</td>
                        <td>Value 1</td>
                    </tr>
                    <tr>
                        <td>Κατάσταση επιχείρησης</td>
                        <td>Value 2</td>
                    </tr>
                    <tr>
                        <td>Έδρα επιχείρησης</td>
                        <td>Value 3</td>
                    </tr>
                    <tr>
                        <td>Νομός - Περιφέρεια</td>
                        <td>Value 3</td>
                    </tr>
                    <tr>
                        <td>Κωδικός Δραστηριότητας (ΚΑΔ)</td>
                        <td>Value 3</td>
                    </tr>
                    <tr>
                        <td>Κατηγορία βιβλίων</td>
                        <td>Value 4</td>
                    </tr>
                    <tr>
                        <td>Λήξη διαχειριστικής περιόδου</td>
                        <td>Value 5</td>
                    </tr>
                    <tr>
                        <td>Υπαγωγή ΦΠΑ</td>
                        <td>Value 7</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    <!-- / main body -->
        <div class="clear"></div>
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