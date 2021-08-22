<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Care Easy: Search Results</title>
  <link rel="shortcut icon" href="img/twdots.jpg" type="image/jpg" sizes="16x16">
  <link rel="stylesheet" href="css/final.css">
  <script
  src="https://kit.fontawesome.com/54f3e04ad7.js"
  crossorigin="anonymous"
  ></script>
</head>
<body>
  <div class="main-container">
    <!-- Header -->
    <?php include "header.php"; ?>
    <!-- Header -->
    <!-- Mysql setting -->
    <?php
      $servername = "localhost";
      $username = "santhosh";
      $password = "Idocare";
      $dbname = "test_purpose";
      
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      } 
      
    ?>

    <!-- Search Results -->
    <div class="wrapper">
      <h1>
        <?php
            if(isset($_GET["submit"])){ 
              $_SESSION["place"] = $_GET["city"];
              $_SESSION["search"] = $_GET["search"];
              echo "Showing Results For \"".$_SESSION["search"]."\", ".$_SESSION["place"];
            } 
            else{
              echo "Showing Results For \"".$_SESSION["search"]."\", ".$_SESSION["place"];
            }
          ?>
      </h1>
    </div>
    <!-- Search Tabs -->
    <div class="wrapper">
      <h3>Search In</h3>
      <div id="tabs">    
        <div class="element">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
            <input type="hidden" name="hosp" value="">
            <button type="submit" class="<?php if(isset($_GET["hosp"])) echo "active"; ?>">Hospitals</button>
          </form>
        </div>
        <div class="element">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
            <input type="hidden" name="spec" value="">
            <button type="submit" class="<?php if(isset($_GET["spec"])) echo "active"; ?>">Specialty</button>
          </form>
        </div>
        <div class="element">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
            <input type="hidden" name="doctor" value="">
            <button type="submit"class="<?php if(isset($_GET["doctor"])) echo "active";?>">Doctors</button>
          </form>
        </div>
        <div class="element">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
            <input type="hidden" name="address" value="">
            <button type="submit" class="<?php if(isset($_GET["address"])) echo "active";?>">Address</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Content -->
    <section id="hospital">
      <div class="wrapper">
      <?php 
          if($_SERVER["REQUEST_METHOD"]=="GET"){

            if(isset($_GET["hosp"])){

              $sql = "SELECT hospital.name, hospital.rating, hospital.address, hospital.phone_no FROM hospital WHERE hospital.name LIKE '%".$_SESSION["search"]."%' ORDER BY hospital.rating DESC;";
              $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  $i=1;
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class=\"row\">";
                    echo "<div class=\"no\"><h2>".$i.".</h2></div>";
                    echo "<div class=\"name\">";      
                    echo "<h2>".$row["name"]."</h2>";
                    echo "</div>";
                    echo "<div class=\"detail\">";
                    echo "<h3>Ratings : ".$row["rating"]." / 5.0</h3>";
                    echo "<h3>Address : ".$row["address"]."</h3>";
                    echo "<h3>Phone Number : ".$row["phone_no"]."</h3>";
                    echo 
                        "
                        <form action=\"seedoc.php\" method=\"get\">
                        <input type=\"hidden\" name=\"var\" value=\"".$row["name"]."\">
                        <input type=\"hidden\" name=\"hosp\" value=\"hospital\">
                        <button type=\"submit\">See Doctors</button>
                        </form>
                        </div>
                        </div>
                        ";
                    $i++; 
                  }
                } else {
                  echo "<h2>No results. Try Again</h2>";
                }
            }
            
            elseif(isset($_GET["spec"])){

              $sql = "SELECT specialty.name, specialty.detail FROM specialty WHERE specialty.name LIKE '%".$_SESSION["search"]."%'  ORDER BY specialty.name;";
              $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  $i=1;
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class=\"row\">";
                    echo "<div class=\"no\"><h2>".$i.".</h2></div>";
                    echo "<div class=\"name\">";      
                    echo "<h2>".$row["name"]."</h2>";
                    echo "</div>";
                    echo "<div class=\"detail\">";
                    echo "<p>".$row["detail"]."</p>";
                    echo 
                        "
                        <form action=\"seedoc.php\" method=\"get\">
                        <input type=\"hidden\" name=\"var\" value=\"".$row["name"]."\">
                        <input type=\"hidden\" name=\"spec\" value=\"specialty\">
                        <button type=\"submit\">See Doctors</button>
                        </form>
                        </div>
                        </div>
                        ";
                    $i++;
                   }
                 } else {
                  echo "<h2>No results. Try Again.</h2>";
                 }
            }

            elseif(isset($_GET["doctor"])){

              $sql = "SELECT doctor.name AS doc_name, doctor.edu , hospital.name AS hosp_name, specialty.name AS spec_name
                      FROM doctor 
                      JOIN hospital ON doctor.hosp_id = hospital.hosp_id 
                      JOIN specialty ON doctor.sp_id = specialty.sp_id
                      WHERE doctor.name LIKE '%".$_SESSION["search"]."%'
                      ORDER BY specialty.name;";
              $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  $i=1;
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class=\"row\">";
                    echo "<div class=\"no\"><h2>".$i.".</h2></div>";
                    echo "<div class=\"name\">";      
                    echo "<h2>".$row["doc_name"]."</h2>";
                    echo "</div>";
                    echo "<div class=\"detail\">";
                    echo "<h3>Qualification : ".$row["edu"]."</h3>";
                    echo "<h3>Specialty : ".$row["spec_name"]."</h3>";
                    echo "<h3>Hospital : ".$row["hosp_name"]."</h3>";
                    echo 
                        "
                        <form action=\"appointment.php\" method=\"get\">
                        <input type=\"hidden\" name=\"var\" value=\"".$row["doc_name"]."\">
                        <button type=\"submit\">Book</button>
                        </form>
                        </div>
                        </div>
                        ";
                    $i++; 
                  }
                } else {
                  echo "<h2>No results. Try Again</h2>";
                }
            }
            
            else{

              $sql = "SELECT hospital.name, hospital.rating, hospital.address, hospital.phone_no FROM hospital WHERE hospital.address LIKE '%".$_SESSION["search"]."%' ORDER BY hospital.rating DESC;";
              $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  $i=1;
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class=\"row\">";
                    echo "<div class=\"no\"><h2>".$i.".</h2></div>";
                    echo "<div class=\"name\">";      
                    echo "<h2>".$row["name"]."</h2>";
                    echo "</div>";
                    echo "<div class=\"detail\">";
                    echo "<h3>Ratings : ".$row["rating"]." / 5.0</h3>";
                    echo "<h3>Address : ".$row["address"]."</h3>";
                    echo "<h3>Phone Number : ".$row["phone_no"]."</h3>";
                    echo 
                        "
                        <form action=\"seedoc.php\" method=\"get\">
                        <input type=\"hidden\" name=\"var\" value=\"".$row["name"]."\">
                        <input type=\"hidden\" name=\"hosp\" value=\"hospital\">
                        <button type=\"submit\">See Doctors</button>
                        </form>
                        </div>
                        </div>
                        ";
                    $i++; 
                  }
                } else {
                  echo "<h2>No results. Try Again</h2>";
                }

            }
           }
                mysqli_close($conn);

          ?>
        
      </div>
    </section>
    <!-- Search-Results -->

  </div>
  <!-- JavaScript -->
  <script src="js/test.js"></script>
</body>
</html>