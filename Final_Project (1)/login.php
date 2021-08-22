<?php include('validation.php') ?>
<html>
<head><title>Login</title>
<link rel="stylesheet" href="css/project5.css">
</head>
<body>
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
<div class="errorbox1">
<?php include('errors.php'); ?>
</div>
<div class="bigbox">
<div class="login">
<br>
<br>
<h1>Log In</h1>
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
<form method="post" action="login.php">
<br>
<input type="text"placeholder="USERNAME" name="username" >
</div>
<br>
<div class="username">
<input type="password" placeholder="PASSWORD" name="password" >
</div>  
<br>
<br>
<br>     
<button  name="log" class="btn" type="submit">LOGIN</button>
</form>
</div>
<div class="rightbox">
	<span class="already"> JOIN CARE EASY TO MAKE LIFE EASY!!!</span>
	
<a class="sub" href="signin.php"><button class="btnn"> SIGN UP</button></a>
</div>
<div class="or">OR</div>
</div>

</body>
</html>