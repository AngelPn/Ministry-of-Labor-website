<!DOCTYPE html>
<html lang="el">
<head>
  <title>Η Επιχείρησή μου</title>
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
<div class="wrapper bgded overlay gradient" style="z-index: 1; background-color:rgb(0, 0, 0);">
    <div id="breadcrumb" class="hoc clear"> 
      <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i></a></li>
        <li>Η ΕΠΙΧΕΙΡΗΣΗ ΜΟΥ</li>
      </ul>
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <main class="hoc container clear"> 
    <div class="sidebar one_quarter first"> 
      <h6>Η επιχείρησή μου</h6>
      <nav class="sdb_holder">
      <ul>
        <li class="active"><a href="epixirisi.php">Στοιχεία επιχείρησης</a></li>
        <li><a href="arxeio_ergazomenwn.php">Εργαζόμενοι</a></li>
        <li><a href="#">Ηλεκτρονικές υπηρεσίες</a></li>
        <li><a href="#">Οικονομική διαχείρηση</a>
        <ul>
          <li><a href="#">Φορολογικές υποχρεώσεις</a></li>
          <li><a href="#">Μηνιαία έσοδα κι έξοδα</a></li>
        </ul>
        </li> 
      </ul>
      </nav>
    </div>
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <h1>Στοιχεία επιχείρησης</h1>
      <?php        
        // Include config file
        require_once "../authentication/config.php";
        
        // Define variables and initialize with empty values
        $name = $year = $status = $office = $region = $end_mng = "";
        $id = $_SESSION["id"];


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
      ?>
      <div class="scrollable">
        <table>
          <tbody>
            <tr>
                <td>Επωνυμία</td>
                <?php echo "<td>$name</td>"; ?>
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
                <?php echo "<td>$status</td>"; ?>
            </tr>
            <tr>
                <td>Έδρα επιχείρησης</td>
                <?php echo "<td>$office</td>"; ?>
            </tr>
            <tr>
                <td>Νομός - Περιφέρεια</td>
                <?php echo "<td>$region</td>"; ?>
            </tr>
            <tr>
                <td>Λήξη διαχειριστικής περιόδου</td>
                <?php echo "<td>$end_mng</td>"; ?>
            </tr>
          </tbody>
        </table>
        <div id="comments">
          <div style='float: right;'>
            <form action="business_data.php">
              <input type='submit' name='submit' value='Τροποποίηση στοιχείων' style='background-color: #813DAA; color: #FFFFFF;'>
            </form>
          </div>
        </div>
      </div>
      <!-- ################################################################################################ -->
      <h1><br><br><br>Εργαζόμενοι</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Ονοματεπώνυμο</th>
              <th>ΑΦΜ</th>
              <th>Αρχείο Σύμβασης Εργασίας</th>
              <th>Κατάσταση</th>
              <th>Ισχύ μέχρι</th>
            </tr>
          </thead>
          <tbody>
          <?php
            // Define variables and initialize with empty values
            $employee_id = $status = $period = "";
            $id = $_SESSION["id"];

            $sql = "SELECT employee_id, status, period FROM business_employees where business_id = '$id'";
            $result = mysqli_query($link, $sql);

            // Create connection to get name of employees
            mysqli_select_db($link, "users");

            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)){
                $sql = "SELECT name FROM users where id = ".$row["employee_id"]."";
                $result2 = mysqli_query($link, $sql);
                $row2 = mysqli_fetch_assoc($result2);
                echo "<tr id = '".$row["employee_id"]."'>
                      <td>".$row2["name"]."</td>
                      <td>".$row["employee_id"]."</td>
                      <td><a href='#'>Σύμβαση εργασίας</a></td>
                      <td>".$row["status"]."</td>
                      <td>".$row["period"]."</td>
                      <td>
                        <div id='comments'>
                          <form action='business_employees.php'>
                            <input type='submit' name='submit' value='Τροποποίηση' style='background-color: #813DAA; color: #FFFFFF;'>
                          </form>
                        </div>
                      </td>
                      <td><button onclick='submitRowAsForm(".$row["employee_id"].")'>SUBMIT ROW1</button></td>
                      </tr>";
              }
            }
            else {
              echo "0 results";
            }
            mysqli_close($link);
          ?>
<script>
function submitRowAsForm(idRow) {
  form = document.createElement("form"); // CREATE A NEW FORM TO DUMP ELEMENTS INTO FOR SUBMISSION
  form.method = "post"; // CHOOSE FORM SUBMISSION METHOD, "GET" OR "POST"
  form.action = "business_employees.php"; // TELL THE FORM WHAT PAGE TO SUBMIT TO
  $("#"+idRow+" td").children().each(function() { // GRAB ALL CHILD ELEMENTS OF <TD>'S IN THE ROW IDENTIFIED BY idRow, CLONE THEM, AND DUMP THEM IN OUR FORM
        if(this.type.substring(0,6) == "select") { // JQUERY DOESN'T CLONE <SELECT> ELEMENTS PROPERLY, SO HANDLE THAT
            input = document.createElement("input"); // CREATE AN ELEMENT TO COPY VALUES TO
            input.type = "hidden";
            input.name = this.name; // GIVE ELEMENT SAME NAME AS THE <SELECT>
            input.value = this.value; // ASSIGN THE VALUE FROM THE <SELECT>
            form.appendChild(input);
        } else { // IF IT'S NOT A SELECT ELEMENT, JUST CLONE IT.
            $(this).clone().appendTo(form);
        }

    });
  form.submit(); // NOW SUBMIT THE FORM THAT WE'VE JUST CREATED AND POPULATED
}
</script>
          </tbody>
        </table>         
      </div>
      <div class="scrollable">
        <h1><br><br><br>Ηλεκτρονικές υπηρεσίες</h1>
        <ul class="clear">
          <li><a href="#">Πιστοποίηση εργοδοτών</a></li>
          <li><a href="#">Ηλεκτρονική υποβολή ΑΠΔ</a></li>
          <li><a href="#">Ασφαλιστική ενημερότητα</a></li>
          <li><a href="#">Ρύθμιση οφειλών</a></li>
				  <li><a href="#">Υπολογισμός έκπτωσης ασφαλιστικών εισφορών</a></li>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
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