<?php include('validation.php') ?>
<html>
<head><title>Sign in</title>
<link rel="stylesheet" href="css/project5.css">
</head> 
<body >
<!-- Navigation Bar -->
<div class="header">
    <header>
      <div class="wrapper">
        <div id="title">
          <div id="home">
            <a href="index.php">
              <img src="img/twdots.jpg" alt="no" title="Home"/>
            </a>
          </div>
          <div id="name">
            <a href="index.php">
              <h2 title="Home"><span class="label">C</span>are <span class="label">E</span>asy</h2>
            </a>
          </div>
        </div>
        </div>
    </header>
  </div> 
<div class="errorbox">
<?php include('errors.php'); ?>
</div> 	
<div class="bigbox">
	<div class="login" >
			<h1>Sign Up</h1>
	
<form name="form1" method="post" action="signin.php">
<div class="type">
<div class="doct"> 
  <input type="radio" id="doctorre" name="type" value="Doctor Representive">
  <label for="Doctor Representive">Doctor Representive</label>
  </div>
  <div class="pati">
  <input type="radio" id="Patient" name="type" value="patient">
  <label for="patient">Patient</label>
  </div>
  </div>
  <div class="username">
<input type="text" placeholder="USERNAME" name="username" id="u" required>
</div>
<div class="username">
<input type="password" placeholder="PASSWORD" name="password" id="ps"required>
</div>
<div class="username">
<input type="password" placeholder="CONFIRM PASSWORD" name="confirmpassword" id="cfs" required>
</div>
<div class="username">
<input type="email" placeholder="EMAIL" name="emailid" required>
</div>
<div class="username">
<input type="number" placeholder="PHONE NUMBER" name="number" required>
</div>
<p></p>
<br>
<button name="reg" class="btn" type="submit">REGISTER</button>
<p></p>
<br>
</form><a class="sub" href="signin.php"><button class="btn1">RESET</button></a>
</div>
<div class="rightbox">
	<span class="already">ALREADY PART OF OUR FAMILY!!!</span>
	
<a class="sub" href="login.php"><button class="btnn">LOGIN</button></a>
</div>
<div class="or">OR</div>

</div>

</body>
</html>




