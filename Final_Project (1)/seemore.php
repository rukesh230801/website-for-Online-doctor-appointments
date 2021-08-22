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
      $password = "Idocare;
      $dbname = "test_purpose";
      
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      } 
      
    ?>
    <!-- Based on ratings -->
    <div class="wrapper">
      <h1>
        <?php
          if($_SERVER["REQUEST_METHOD"]=="GET"){

            if(isset($_GET["var1"])){
              echo $_GET["var1"];
            }
            else {
              echo $_GET["var2"];
            }
          }
          ?>
      </h1>  
    </div>

    <!-- Content -->
    <section id="hospital">
      <div class="wrapper">
        <?php 
          if($_SERVER["REQUEST_METHOD"]=="GET"){

            if(isset($_GET["var1"])){

              $sql = "SELECT hospital.name, hospital.rating, hospital.address, hospital.phone_no FROM hospital ORDER BY hospital.rating DESC";
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
            else{
              $sql = "SELECT specialty.name, specialty.detail FROM specialty ORDER BY specialty.name";
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
           }
                mysqli_close($conn);

          ?>
        
      </div>
    </section>
    <!-- Based on ratings -->

  </div>
</body>
</html>