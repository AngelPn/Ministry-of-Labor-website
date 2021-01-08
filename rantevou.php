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
<div class="wrapper-row2">
  <section id="cta" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-calendar"></i></a> <span><strong>Επιλέξτε ημερομηνία:</strong><input type="text" name="test-1" data-datepicker/></span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong>Επιλέξτε ώρα:</strong>
          <select class="form-control" id="sel1">
            <option>7:00</option>
            <option>8:00</option>
            <option>9:00</option>
            <option>10:00</option>
            <option>11:00</option>
            <option>12:00</option>
            <option>13:00</option>
            <option>17:00</option>
            <option>18:00</option>
          </select></span>
        </div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fa fa-align-left"></i></a> <span><strong>Κείμενο:</strong>
          <form>
              <textarea class="form-control" rows="4" cols="50" id="comment"></textarea>
          </form>
        </div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>

  <section id="cta" class="hoc container clear">
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-user"></i></a> <span><strong>Ονοματεπώνυμο:</strong><input type="text" class="form-control" id="usr"></span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Τηλέφωνο:</strong><input type="text" class="form-control" id="usr"></span></div>
      </li>
      <li class="one_third last">
        <div id="comments">
          <input type="submit" name="submit" value="Υποβολή">
        </div>
      </li>
    </ul>
  </section>


  <!-- Επιλέξτε ημερομηνία<br> -->
  
  <!-- <input type="text"
       name="test-1"
       data-datepicker/>
  <br>
  
  Example 2 :
  <input type="text"
       name="test-2"
       value="05/01/2019"
       data-datepicker
       data-class="classic-theme meterial-theme"/>
  <br>

  Example 3 :
  <input type="text"
       name="test-3"
       data-datepicker
       data-min="01/01/2019"
       data-max="31/01/2019"
       data-date="05/01/2019"
       data-navigation="no"
       data-class="classic-theme micro-theme"/>
  <br> -->

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
