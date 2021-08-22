<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Care Easy: Based On Ratings</title>
  <link rel="stylesheet" href="css/final.css">
  <link rel="shortcut icon" href="img/twdots.jpg" type="image/jpg" sizes="16x16">
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

    <!-- Based on Hospitals AND Specialty -->
    <div class="wrapper">
      <h1>
        <?php
          if($_SERVER["REQUEST_METHOD"]=="GET"){
            
            echo "Showing Doctors In \"".$_GET["var"]."\"";

          }
          ?>
      </h1>

    </div>

    <!-- Content -->
    <section id="doctor">
      <div class="wrapper">
      <?php 
          if($_SERVER["REQUEST_METHOD"]=="GET"){
            
            $var = $_GET["var"];

            if(isset($_GET["hosp"])){

              $sql = "SELECT doctor.name AS doc_name, doctor.edu , hospital.name AS hosp_name, specialty.name AS spec_name
                      FROM doctor 
                      JOIN hospital ON doctor.hosp_id = hospital.hosp_id 
                      JOIN specialty ON doctor.sp_id = specialty.sp_id
                      WHERE hospital.name = \"".$var."\"
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
                        <form action=\"bpg.php\" method=\"get\">
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

              $sql = "SELECT doctor.name AS doc_name, doctor.edu , hospital.name AS hosp_name, specialty.name AS spec_name
                      FROM doctor 
                      JOIN hospital ON doctor.hosp_id = hospital.hosp_id 
                      JOIN specialty ON doctor.sp_id = specialty.sp_id
                      WHERE specialty.name = \"".$var."\"
                      ORDER BY hospital.name;";
              
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
                              <form action=\"bpg.php\" method=\"get\">
                              <input type=\"hidden\" name=\"var\" value=\"".$row["doc_name"]."\">
                              <button type=\"submit\">Book</button>
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
           }
                mysqli_close($conn);

          ?>
        
      </div>
    </section>

    <!-- Based on Hospitals AND Specialty -->

  </div>
</body>
</html>