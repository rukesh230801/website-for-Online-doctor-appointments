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
            <nav>
              <ul class="nav">
                  <li>
                  <form action="search.php" method="get" name="search_value" class="search">
                    <input type="text" class="search-box" placeholder="Search by Hospital, Doctor or Area Names" name= "search">
                    <input type="hidden" name="hosp" value="">
                    <button type="submit" name= "submit" class="search-icon"><i class="fas fa-search"></i></button>
                  
                  </li>
                  <li>
                    <div class="select">
                        <select name="city" id="dropdown">
                          <option value="Chennai" selected>Chennai</option>
                          <option value="Mumbai">Mumbai</option>
                          <option value="Kolkata">Kolkata</option>
                          <option value="Delhi">Delhi</option>
                        </select>
                    </div>
                  </form>
                </li>
                <li><a href="#aboutus">About</a></li>
                <li><a href="signin.php">Sign Up</a></li>
                <li><a href="login.php">Log in</a></li>
              </ul>
            </nav>
          </div>
        </header>
      </div>  