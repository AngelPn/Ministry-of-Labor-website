<!DOCTYPE html>
<html lang="el">
<head>
<title>Άδειες</title>
	<style>.not-allowed {cursor: not-allowed;}</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../layout/styles/collapsible.css">
	<link rel="icon" href="../logo.ico">
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
		  <li><a href="../epikinonia.php" title="Επικοινωνία">Επικοινωνια</a></li>
		  <?php
			session_start();
			// Check if the user is logged in, if not then redirect him to login page
			if(!isset($_SESSION["loggedin"])){
				echo '<li><a href="../authentication/login.php" title="Σύνδεση">Σύνδεση</a></li>';
				echo '<li><a href="../authentication/register.php" title="Εγγραφή">Εγγραφή</a></li>';      
			}
			elseif($_SESSION["role_id"] == 1){
				echo '<li><a href="../profile ergazomenou/ergasia.php" class="btn btn-danger" title="Προφίλ εργαζόμενου">Η εργασία μου</a></li>';
				echo '<li><a href="../authentication/logout.php" title = "Αποσύνδεση"><i class="fa fa-sign-out-alt"></i></a></li>';
			}
			else{
				echo '<li><a href="../profile ergodoth/epixirisi.php" class="btn btn-danger" title="Προφίλ εργοδότη">Η επιχείρησή μου</a></li>';
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

          <li class="active"><a class="drop" href="../ergazomenoi.php">&nbsp;Εργαζομενοι</a>
            <ul>
              <li><a href="../covid.php">Μετρα λογω πανδημιας</a></li>
              <li><a href="#">Συμβασεις</a></li>
              <li><a href="aithsh_adeias.php">Αδειες</a></li>
              <li><a href="#">Επιδοματα</a></li>
              <li><a href="#">Απολυσεις</a></li>
            </ul>
          </li>
          <li><a class="drop" href="../ergodotes.php">&nbsp;Εργοδοτες</a>
            <ul>
              <li><a href="../covid.php">Μέτρα λόγω πανδημίας</a></li>
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
<?php
// Set the correct padding-offset for the breadcrumb if you are connected
if(isset($_SESSION["loggedin"])){
  echo '<div style="padding-bottom: 133px;"></div>';
}
else{
  echo '<div style="padding-bottom: 113px;"></div>';
}
?>
<!-- ################################################################################################ -->

<div class="wrapper bgded overlay gradient" style="background-color: black; ">
  <div id="breadcrumb" class="clear" style="margin-left: 160px; "> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../index.php"><i class="fa fa-home"></i></a></li>
      <li><a href="../ergazomenoi.php">ΕΡΓΑΖΟΜΕΝΟΙ</a></li>
      <li><a href="aithsh_adeias.php">ΑΔΕΙΕΣ</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>

<div style="width: 80%; margin: auto;">
	<p style="font-size: 19px; padding-top: 35px; text-align: center;">  Από την σελίδα αυτή, μπορείτε να συμπληρώσετε και να υποβάλετε ηλεκτρονικά την αίτηση για οποιαδήποτε από τις διαθέσιμες άδειες έχετε ανάγκη </p>
	<div style="padding: 20px; border-top: 2px solid black;"></div>
</div>

<div class="stack_container">
	<div class="left_stack" style="margin-left: 8%;">
		<div style="padding-left: 40px; font-family: Arial; width: 60%;">	
			

			<h3 style="font-family: Arial;"> <b> Ποιά είδη αδειών υπάρχουν διαθέσιμα; </b> </h3>
		</div>

		<ul id="collapse_list">
			<li> 
				<button type="button" class="collapsible"><h4> &nbsp;Άδεια Λόγω Ασθένειας</h4></button>
				
				<div class="content_col">
					<p> Για να μπορέσει ένας εργαζόμενος να υπόκειται στις διατάξεις περί ασθενείας, θα πρέπει οπωσδήποτε να έχει εξεταστεί και να του έχει χορηγηθεί αποδεικτικό ασθενείας από γιατρό του αρμόδιου ασφαλιστικού φορέα.</p> 
					<h6> Απαραίτητα δικαιλογητικά </h6>
					<ol>
						<li>
							<p> Προς απόδειξη της ασθένειάς, αρκεί η βεβαίωση από ιδιώτη γιατρό</p>
						</li>
					</ol>
				</div>	
			</li>

			<li> 
				<button type="button" class="collapsible"><h4>&nbsp;Ετήσια άδεια</h4></button>
				<div class="content_col">
					<p> Ολοι οι εργαζόμενοι οι οποίοι συνδέονται με σύμβαση ή σχέση εργασίας ορισμένου ή αορίστου χρόνου, 
					δικαιούνται να λάβουν ετήσια άδεια με αποδοχές απο την έναρξη της απασχόλησής τους σε συγκεκριμένη υπόχρεη 
					επιχείρηση. Η άδεια αυτή χορηγείται από τον εργοδότη αναλογικώς(ποσοστό) με βάση το χρονικό 
					διάστημα που ασχολήθηκε ο εργαζόμενος στον εργοδότη αυτό.Η αναλογία της χορηγούμενης άδειας υπολογίζεται 
					βάσει ετήσιας άδειας 20 εργασίμων ημερών επί πενθημέρου εβδομαδιαίας εργασίας και 24 εργασίμων ημερών  
					επί εξαημέρου η οποία αντιστοιχεί σε 12μήνες συνεχούς απασχόλησης.
					</p> 
					<h6> Απαραίτητα δικαιλογητικά </h6>
					<p> Για τους Εργαζόμενους: </p>
					<ol>
						<li>
							<p> Ατομικό Λογαριασμό Ασφάλισης, τον οποίο μπορεί να εκδώσει από το www.efka.gov.gr (στο menu ΑΣΦΑΛΙΣΜΕΝΟΙ, sub-menu ΜΙΣΘΩΤΟΙ – ενέργεια Ατομικός Λογαριασμός Ασφάλισης και επιλέγοντας Είσοδος στην υπηρεσία είτε Σύνδεση με κωδικούς TAXISNET ή Σύνδεση με κωδικούς Ε.Φ.Κ.Α./Κ.Ε.Α.Ο. με τους κωδικούς TAXISNET και ΑΦΜ & ΑΜΚΑ) συνοδευόμενο από Υπεύθυνη Δήλωση στην οποία να αναφέρει ότι ο Υποψήφιος/-α εξακολουθεί να είναι Εργαζόμενος/-η για τους μήνες που δεν εμφανίζονται στον Ατομικό Λογαριασμό του έως και την Ημέρα Υποβολής της Αίτησης, και η Εταιρεία στην οποία εργάζεται ανήκει στον Ιδιωτικό Τομέα</p>
						</li>
						<li>
							<p> Τελευταία Κατάσταση Μισθοδοσίας, συνοδευόμενη από Υπεύθυνη Δήλωση στην οποία να αναφέρει ότι ο Υποψήφιος/-α εξακολουθεί να είναι Εργαζόμενος/-η έως και την Ημέρα Υποβολής της Αίτησης και η Εταιρεία στην οποία εργάζεται ανήκει στον Ιδιωτικό Τομέα.</p>
						</li>
					</ol>
					<p> Για τους Εποχικά Εργαζόμενους: </p>
					<ol>
						<li>
							<p>Αντίγραφο της Κάρτας Ανεργίας σε ισχύ</p>
						</li>
						<li>
							<p>Έντυπο Καταγγελίας Σύμβασης Εργασίας (Ε6) υπογεγραμμένο από τον Άνεργο και τον Εργοδότη</p>
						</li>
						<li>
							<p>Βεβαίωση Λήξης Σύμβασης Ορισμένου Χρόνου (Ε7) υπογεγραμμένη από τον Εργοδότη</p>
						</li>
					</ol>
				</div>
				
			</li>

			<li>
				<button type="button" class="collapsible"><h4>&nbsp;Άδειες Γάμου και Γέννησης παιδιού</h4></button>

				<div class="content_col"><p> Ολοι οι εργαζόμενοι, οποιασδήποτε ειδικότητας και κλάδου δικαιούνται: (ΕΓΣΣΕ 1993– ΕΓΣΣΕ 2000)
					<ul>
						<li><p> Άδεια γάμου έξι (6) εργασίμων ημερών αν εργάζονται εξαήμερο και πέντε (5) εργασίμων ημερών αν εργάζονται πενθήμερο.</p></li>
						<li><p> Αδεια δύο (2) ημερών στον πατέρα για γέννηση  παιδιού.</p></li>
					</ul>
					Την άδεια γάμου δικαιούνται όλοι οι μισθωτοί, άνδρες και γυναίκες, ανεξαρτήτως του χρόνου υπηρεσίας τους στον εργοδότη χωρίς καμία άλλη προϋπόθεση εκτός από τη σύναψη του γάμου. Την άδεια γάμου δικαιούται ο μισθωτός κάθε φορά που θα συνάψει νόμιμο γάμο (θρησκευτικό ή πολιτικό). Παρόμοια ισχύουν και για την άδεια γέννησης παιδιού, δηλαδή δεν απαιτείται καμία άλλη προϋπόθεση για τη χορήγησή της (προϋπηρεσία στον ίδιο εργοδότη κ.λπ.) παρά είναι αρκετό το γεγονός γέννησης του παιδιού. Οι άδειες αυτές είναι με αποδοχές και  χορηγούνται κατά το χρόνο που συντελούνται τα γεγονότα αυτά (γάμος ή γέννηση παιδιού αντίστοιχα), μετά από αίτηση του εργαζόμενου. Αν δεν ζητηθεί κατά την τέλεση του γεγονότος ο μισθωτός δεν έχει δικαίωμα αξίωσης χορήγησής της σε άλλο χρόνο ή αποζημίωσής της σε χρήμα ενώ δεν συμψηφίζεται με την ετήσια κανονική άδεια.
				</p> 
				<h6> Απαραίτητα δικαιλογητικά </h6>
				<p> Για Άδειες Γάμου: </p>
				<ol>
					<li>
						<p>Ατομικό Λογαριασμό Ασφάλισης, τον οποίο μπορεί να εκδώσει από το www.efka.gov.gr (στο menu ΑΣΦΑΛΙΣΜΕΝΟΙ, sub-menu ΜΙΣΘΩΤΟΙ – ενέργεια Ατομικός Λογαριασμός Ασφάλισης και επιλέγοντας Είσοδος στην υπηρεσία είτε Σύνδεση με κωδικούς TAXISNET ή Σύνδεση με κωδικούς Ε.Φ.Κ.Α./Κ.Ε.Α.Ο. με τους κωδικούς TAXISNET και ΑΦΜ & ΑΜΚΑ) συνοδευόμενο από Υπεύθυνη Δήλωση στην οποία να αναφέρει ότι ο Υποψήφιος/-α εξακολουθεί να είναι Εργαζόμενος/-η για τους μήνες που δεν εμφανίζονται στον Ατομικό Λογαριασμό του έως και την Ημέρα Υποβολής της Αίτησης, και η Εταιρεία στην οποία εργάζεται ανήκει στον Ιδιωτικό Τομέα</p>
					</li>
					<li>
						<p>Υπεύθυνη δήλωση υπογεγραμμένη από τον ενδιαφερόμενο που να επιβεβαιώνει την αυθεντικότητα του γάμου καθώς και την ημερομηνία διεξαγωγής του</p>
					</li>
				</ol>
				
				<p> Για Άδειες Γέννησης παιδιού: </p>
				<ol>
					<li>
						<p>Ατομικό Λογαριασμό Ασφάλισης, τον οποίο μπορεί να εκδώσει από το www.efka.gov.gr (στο menu ΑΣΦΑΛΙΣΜΕΝΟΙ, sub-menu ΜΙΣΘΩΤΟΙ – ενέργεια Ατομικός Λογαριασμός Ασφάλισης και επιλέγοντας Είσοδος στην υπηρεσία είτε Σύνδεση με κωδικούς TAXISNET ή Σύνδεση με κωδικούς Ε.Φ.Κ.Α./Κ.Ε.Α.Ο. με τους κωδικούς TAXISNET και ΑΦΜ & ΑΜΚΑ) συνοδευόμενο από Υπεύθυνη Δήλωση στην οποία να αναφέρει ότι ο Υποψήφιος/-α εξακολουθεί να είναι Εργαζόμενος/-η για τους μήνες που δεν εμφανίζονται στον Ατομικό Λογαριασμό του έως και την Ημέρα Υποβολής της Αίτησης, και η Εταιρεία στην οποία εργάζεται ανήκει στον Ιδιωτικό Τομέα</p>
					</li>
					<li>
						<p>Πιστοποιητικό οικογενειακής κατάστασης που μπορεί να βρεθεί σε οποιοδήποτε ΚΕΠ</p>
					</li>
					<li>
						<p>Ιατρική γνωμάτευση με σφραγίδα γυναικολόγου που να επιβεβαιώνει την εγκυμωσύνη της συζήγου</p>
					</li>
				</ol></div>
				
			</li>

			<li> 
				<button type="button" class="collapsible"><h4>&nbsp;Άδεια Μητρότητας</h4></button>
				<div class="content_col"><p> Οι εργαζόμενες μητέρες δικαιούνται άδεια μητρότητας συνολικής διάρκειας 17 εβδομάδων. Οι 8 εβδομάδες χορηγούνται υποχρεωτικά πριν την πιθανή ημερομηνία τοκετού, και οι υπόλοιπες 9 μετά τον τοκετό. Σε περίπτωση που ο τοκετός πραγματοποιηθεί σε προγενέστερη από την πιθανή ημερομηνία, το υπόλοιπο της άδειας χορηγείται μετά τον τοκετό, ώστε να συμπληρωθούν οι 17 εβδομάδες (Ε.Γ.Σ.Σ.Ε.2000-2001 άρθρο 7).
				</p> 
				<h6> Απαραίτητα δικαιλογητικά </h6>
				<ol>
					<li>
						<p> Πιστοποιητικό γέννησης του βρέφους που μπορεί να βρεθεί σε οποιοδήποτε ΚΕΠ</p>
					</li>
				</ol></div>
			</li>

			<li> 
				<button type="button" class="collapsible"><h4>&nbsp;Άδεια άνευ αποδοχών</h4></button>
				<div class="content_col"><p> Για την άδεια άνευ αποδοχών, δεν υπάρχει διάταξη που να προβλέπει τη χορηγησή της ή να ρυθμίζει γενικά το θέμα αυτό. Στην περίπτωση που ο εργαζόμενος ζητήσει άδεια άνευ
				αποδοχών, προκειμένου να τη λάβει, θα πρέπει να υπάρξει σύμφωνη γνώμη του εργοδότη, ο οποίος στα πλαίσια των αρχών της καλής πίστης και εκτιμώντας τις οικογενειακές, κοινωνικές ανάγκες και υποχρεώσεις του εργαζόμενου μπορεί να χορηγεί άδεια άνευ αποδοχών.
				Κατά το διάστημα χορήγησης άδειας άνευ αποδοχών, η σύμβαση εργασίας δε λύεται, απλώς αναστέλλεται η ισχύς της. Ο εργοδότης υποχρεούται να αποδεχθεί τις υπηρεσίες του εργαζόμενου μετά τη λήξη της άδεις άνευ αποδοχών.
				Tο ΝΣΚ (Γνωμοδ. 557/63) δέχεται ότι: η χορήγησή της δεν αποστερεί τον εργαζόμενο από το δικαίωμα να ζητήσει (βάσει του ΑΝ 539/45), την ετήσια με αποδοχές άδεια του, προκειμένου σύμφωνα με το σκοπό του νόμου, να παρασχεθεί σ’ αυτόν η δυνατότητα να αναπαυθεί με αυξημένα οικονομικά μέσα προς αναπλήρωση των αναλωθεισών στην εργασία του σωματικών ή πνευματικών του δυνάμεων.
				</p> 
				<h6> Απαραίτητα δικαιλογητικά </h6>
				<ol>
					<li>
						<p> Υπεύθυνη δήλωση υπογεγραμμένη εργοδότη που να συμφωνεί με την λήψη άδειας του εργαζόμενου</p>
					</li>
				</ol></div>
				
			</li>
		</ul>
	</div>
	<!-- ################################################################################################ -->
	<div class="right_stack" style="margin-left: 5%;">
	  <main class="clear file_form"> 
	    <!-- main body -->
	    <!-- ################################################################################################ -->
	    <div class="content"> 
	      <!-- ################################################################################################ -->
	      
	      <div id="comments" >
	        
			<h2>Φόρμα ηλεκτρονικής αίτησης άδειας</h2>
			<form action="insert_adeies.php" method="post">
				<?php
				// Check if the user is logged in
				if(!isset($_SESSION["loggedin"]) || (isset($_SESSION["loggedin"]) && $_SESSION["role_id"]==2)){
					// After login, redirect to current page so set SESSION to current page
					$current_page = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
					$_SESSION['redirect_to'] = $current_page;
					echo '<p>Για να συμπληρώσετε τη φόρμα, χρειάζεται να 
							<link><a href="../authentication/login.php">συνδεθείτε</a></link>
							 ως εργαζόμενος.</p>
							<div class="one_half first">
							<label for="name">Ονοματεπώνυμο Εργαζόμενου</label>
							<input readonly class="not-allowed" type="text" name="name" id="name" value="" size="22" required>
						</div>
			
						<div class="one_half">
							<label for="url">ΑΦΜ Εργαζόμενου<span>*</span></label>
							<input readonly class="not-allowed" type="url" name="url" id="url" value="" size="22">
						</div>
						<div class="one_half first">
							<label for="url">Επιχείρηση<span>*</span></label>
							<input readonly class="not-allowed" type="url" name="url" id="url" value="" size="22">
						</div>
						<div class="first">
							<label for="url">Χρονικό διάστημα άδειας<span>*</span></label>
							<label for="date">Από<span>*</span></label>
							<input readonly class = "not-allowed" type="date" name="date" id="date" value="" size="22">
							<label for="date">Μέχρι<span>*</span></label>
							<input readonly class = "not-allowed" type="date" name="date" id="date" value="" size="22">
						</div>
			
						<div class="first">
							<label for="custom-select">Επιλέξτε τύπο άδειας<span>*</span></label>
								<select type="custom-select"  class="not-allowed" name="custom-select" id="custom-select" value="" style="width: 100%; height: 40px;">
									<option value="0">Τύπος άδειας:</option>
									<option value="7">Άδεια λόγω ασθένειας</option>
									<option value="1">Άδεια μητρότητας</option>
									<option value="2">Άδεια στράτευσης</option>
									<option value="3">Άδεια γάμου</option>
									<option value="4">Άδεια γέννησης τέκνου</option>
									<option value="5">Άδεια γονικής φροντίδας</option>
									<option value="6">Άδεια λόγω θανάτου συγγενούς</option>
									<!-- Μπορούμε να έχουμε 2 πεδια επιλογής αδειων, ένα με τις γενικές κατηγορίες άδειας και ένα άλλο με τις πιο συγκεκριμένες? ) -->
								</select>
						</div>
			
						<div class="first">
							<label for="file">Ανεβάστε τα απαραίτητα δικαιολογητικά<span>*</span>&nbsp;
							<input readonly type="file" class="not-allowed" name="file" id="file" value="" size="22" multiple>
						</div>';    
				}
				else{
					// Include config file
					require_once "../authentication/config.php";

					$id = $_SESSION["id"];
					$sql = "SELECT name FROM users WHERE id = '$id'";
					$result = mysqli_query($link, $sql);

					if (mysqli_num_rows($result) > 0) {
						$row = mysqli_fetch_assoc($result);
						// output data of each row
						echo ' <div class="one_half first">
								<label for="name">Ονοματεπώνυμο Εργαζόμενου</label>
								<input readonly type="text" name="name_employee" id="name_employee" value="'.$row["name"].'" size="22" required>
							</div>
				
							<div class="one_half">
								<label for="url">ΑΦΜ Εργαζόμενου<span>*</span></label>
								<input readonly type="text" name="employee_id" id="employee_id" value="'.$id.'" size="22">
							</div>';

						// Create connection to get the name of the businness as select option
						$sql = "SELECT business_name FROM business_employees WHERE employee_id = '$id'";
						$result2 = mysqli_query($link, $sql);

						echo '
							<div class="one_half first">
								<label for="url">Επιχείρηση<span>*</span></label>
								<select type="custom-select" name="business_name" id="business_name" value="" style="width: 100%; height: 40px;">
						';

						while($row2 = mysqli_fetch_assoc($result2)){
							echo '
								<option value="'.$row2["business_name"].'">'.$row2["business_name"].'</option>
							';
						}

						echo '
						</select>
						</div>
						<div class="first">
							<label for="url">Χρονικό διάστημα άδειας<span>*</span></label>
							<label for="date">Από<span>*</span></label>
							<input type="date" name="start_date" id="start_date" value="" size="22">
							<label for="date">Μέχρι<span>*</span></label>
							<input type="date" name="end_date" id="end_date" value="" size="22">
						</div>
			
						<div class="first">
							<label for="custom-select">Επιλέξτε τύπο άδειας<span>*</span></label>
								<select type="custom-select" name="type" id="type" value="" style="width: 100%; height: 40px;">
									<option value="0">Τύπος άδειας:</option>
									<option value="Άδεια λόγω ασθένειας">Άδεια λόγω ασθένειας</option>
									<option value="Άδεια μητρότητας">Άδεια μητρότητας</option>
									<option value="Άδεια στράτευσης">Άδεια στράτευσης</option>
									<option value="Άδεια γάμου">Άδεια γάμου</option>
									<option value="Άδεια γέννησης τέκνου">Άδεια γέννησης τέκνου</option>
									<option value="Άδεια γονικής φροντίδας">Άδεια γονικής φροντίδας</option>
									<option value="Άδεια λόγω θανάτου συγγενούς">Άδεια λόγω θανάτου συγγενούς</option>
									<!-- Μπορούμε να έχουμε 2 πεδια επιλογής αδειών, ένα με τις γενικές κατηγορίες άδειας και ένα άλλο με τις πιο συγκεκριμένες? ) -->
								</select>
						</div>
			
						<div style="float: right;">
							<input type="reset" name="reset" value="Εκκαθάριση">
							&nbsp;
							<input type="submit" name="submit" value="Υποβολή" style="background-color: #53D3DE; color: #FFFFFF;">
						</div>
						';
					} 
					else {
						echo "0 results";
					}
					mysqli_close($link);
				}
				?> 
	        </form>
	      </div>
	      <!-- ################################################################################################ -->
	    </div>
	    <!-- ################################################################################################ -->
	    <div class="clear"></div>
	  </main>
	</div>
</div>

<div class="wrapper row2">
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
    <p class="fl_left unbold" >Copyright &copy; 2020 - All Rights Reserved - <a href="#">https://www.ypakp.gr</a></p>
    <a href="#" ><p class="fl_right unbold">Προσωπικά Δεδομένα και Ασφάλεια</p></a>
  </div>
</div>
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="../layout/scripts/collapse.js"></script>
</body>
</html>