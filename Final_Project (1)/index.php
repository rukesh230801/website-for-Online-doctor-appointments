<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="booking appointments, online hospital appointment booking, doctor appointment booking">
    <meta name="description" content="Online Hospital Information and Appointment Booking Environment">
    <title>Care Easy : Hospital and Doctor Appointment Booking Portal</title>
    <link rel="stylesheet" href="css/final.css">
    <link rel="shortcut icon" href="img/twdots.jpg" type="image/jpg" sizes="16x16">
    <script
    src="https://kit.fontawesome.com/54f3e04ad7.js"
    crossorigin="anonymous"
  ></script>
  </head>
  <body>
    <div class="main-container">

     <?php include "header.php"; ?>

      <!-- Intro Image Slider -->
      <section id="intro">
        <div class="slider">
          <div class="slide current">
            <div class="content">
              <p>
                Easy to use online booking system for Hospitals and Doctors around
                you
              </p>
            </div>
          </div>
          <div class="slide">
            <div class="content">
              <p>
                We can use it anytime from anywhere as long as we have internet
              </p>
            </div>
          </div>
          <div class="slide">
            <div class="content">
              <p style="color: #333;">
                Choose the best Hospitals and Doctors based on the information and
                ratings provided
              </p>
            </div>
          </div>
          <div class="slide">
            <div class="content">
              <p>
                Best Articles about different topics of Medical to maintain our
                Health
              </p>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div class="icons">
            <button class="prev"><i class="fas fa-chevron-left fa-lg"></i></button>
            <button class="next"><i class="fas fa-chevron-right fa-lg"></i></button>
          </div>
        </div>
      </section>

      <!-- The Book Button
      <div class="fixed">
        <button onclick="setFocus()" class="fix-me">Book</button>
      </div> -->

      <!-- Rating slider -->
      <section id="rating">
        <div class="wrapper">
          <div class="division1">
            <h1>Based on Ratings</h1>
            <p>Choose the best hospitals based on the user provided ratings</p>
          </div>
          <div class="boxes">
            <div class="box box1">
              <div class="front">
                <h3>Apollo Hospitals</h3>
              </div>
              <div class="back">
                <div class="info">
                  <h3>Address : 21 Greams Lane, Off Greams Road</h3>
                  <h3>Phone No : +91-44-2829 6569/2829 3333</h3>
                  <h3>Email : apollohospitals.india@apollohospitals.com</h3>
                </div>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="Apollo Hospitals">
                  <input type="hidden" name="hosp" value="">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            <div class="box box2">
              <div class="front">
                <h3>Dr. Kamakshi Memorial Hospital</h3>
              </div>
              <div class="back">
                <div class="info" style="margin-bottom: 50px;">
                  <h3>Address : 1,Radial Road, Pallikaranai</h3>
                  <h3>Phone No : +91-44-66300300 / 8056300300</h3>
                  <h3>Email : info@drkmh.com</h3>
                </div>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="Dr. Kamakshi Memorial Hospital">
                  <input type="hidden" name="hosp" value="">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            <div class="box box3">
              <div class="front">
                <h3>Dr. Mehta's Hospital</h3>
              </div>
              <div class="back">
                <div class="info">
                  <h3>Address : No. 2, McNichols Rd, 3rd Lane, Chetpet</h3>
                  <h3>Phone No : +91-9840185644</h3>
                  <h3>Email : info@mehtahospital.com</h3>
                </div>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="Dr. Mehta's Hospital">
                  <input type="hidden" name="hosp" value="">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            <div class="box">
              <div class="front">
                <h3>Fortis Malar Hospital</h3>
              </div>
              <div class="back">
                <div class="info">
                  <h3>Address : No. 52, 1st Main Road,Gandhi Nagar, Adyar</h3>
                  <h3>Phone No : +91-8939831205/8939831211</h3>
                  <h3>Email : Sneha.s@fortishealthcare.com</h3>
                </div>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="Fortis Malar Hospital">
                  <input type="hidden" name="hosp" value="">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            <div class="box">
              <div class="front">
                <h3>Frontier Lifeline Hospital</h3>
              </div>
              <div class="back">
                <div class="info">
                  <h3>Address : R-30C Ambattur Industrial Estate Road</h3>
                  <h3>Phone No : +91-44-42017575</h3>
                  <h3>Email : drkmc@frontierlifeline.com</h3>
                </div>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="Frontier Lifeline Hospital">
                  <input type="hidden" name="hosp" value="">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            <div class="box">
              <div class="front">
                <h3>HCG Cancer Centre</h3>
              </div>
              <div class="back">
                <div class="info">
                  <h3>
                    Address : #199/90, MBC Tower, Luz Church Road, Alwarpet
                    junction, Mylapore
                  </h3>
                  <h3>Phone No : +91-44-43419999</h3>
                  <h3>Email : imchennai@hcgoncology.com</h3>
                </div>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="HCG Cancer Centre">
                  <input type="hidden" name="hosp" value="">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
          </div>

          <!-- Seemore Btn -->
          <form action="seemore.php" method="get" name="seemore">
            <div class="link">
              <input type="hidden" value="Based On Ratings" name="var1"/>
              <button class="based" type="submit">See more</button>
            </div>
          </form>
          <!-- Seemore Btn -->

          <div class="button">
            <button class="left">
              <i class="fas fa-chevron-circle-left fa-3x"></i>
            </button>
            <button class="right">
              <i class="fas fa-chevron-circle-right fa-3x"></i>
            </button>
          </div>
        </div>
      </section>

      <!-- Specialty slider -->
      <section id="special">
        <div class="wrapper">
          <div class="division1">
            <h1>Based on Doctors' Specialty</h1>
            <p>
              Choose the best and the most experienced doctors of the medical
              profession based on their specialization
            </p>
          </div>
          <div class="boxes">
            <div class="char box1">
              <div class="front">
                <h3>General Medicine Physician</h3>
              </div>
              <div class="back">
                <p>
                  Highly trained specialists who provide a range of non-surgical
                  health care to adult patients. They care for difficult, serious
                  or unusual medical problems.
                </p>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="General Medicine Physician">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            <div class="char box2">
              <div class="front">
                <h3>Pediatrician</h3>
              </div>
              <div class="back">
                <p>
                  Pediatricians provide primary health care to children, including
                  immunizations, school physicals, and treatment
                  of flu, among many other things.
                </p>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="Pediatrician">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            <div class="char box3">
              <div class="front">
                <h3>Otolaryngologist</h3>
              </div>
              <div class="back">
                <p>
                  Otolaryngologists or ENTs, which stands for "ear, nose, and
                  throat".They treat diseases in the ears, nose, throat, sinuses,
                  head, neck, and respiratory system.
                </p>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="Otolaryngologist">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            <div class="char">
              <div class="front">
                <h3>Dentist</h3>
              </div>
              <div class="back">
                <p>
                  Doctor of oral health. Oral health includes teeth, tongue and
                  gums. A dentist is known to diagnose and treat issues of these
                  three areas.
                </p>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="Dentist">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            <div class="char">
              <div class="front">
                <h3>Ophthalmologist</h3>
              </div>
              <div class="back">
                <p>
                  Ophthalmologists are medical doctors who treat diseases or
                  disorders of the eyes, such as cataracts and glaucoma. They
                  perform eye surgery when necessary.
                </p>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="Ophthalmologist">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            <div class="char">
              <div class="front">
                <h3>Cardiologist</h3>
              </div>
              <div class="back">
                <p>
                  Cardiologists focus on the heart and blood vessels. They treat
                  many cardiovascular conditions like high blood pressure, high
                  cholesterol and heart attack.
                </p>
                <form action="seedoc.php" method="get">
                  <input type="hidden" name="var" value="Cardiologist">
                  <button type="submit">See Doctors</button>
                </form>
              </div>
            </div>
            
          </div>

          <!-- Seemore Btn -->
          <form action="seemore.php" method="get" name="seemore">
            <div class="link">
              <input type="hidden" value="Based On Doctor's Specialty" name="var2"/>
              <button class="based" type="submit">See more</button>
            </div>
          </form>
          <!-- Seemore Btn -->

          <div class="button">
            <button class="left">
              <i class="fas fa-chevron-circle-left fa-3x"></i>
            </button>
            <button class="right">
              <i class="fas fa-chevron-circle-right fa-3x"></i>
            </button>
          </div>
        </div>
      </section>

      
      <footer>
        <div class="wrapper">
          <div id="group">
            <div id="aboutus">
              <h1>About Us</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In rem
                eius natus minus quo magni incidunt cumque blanditiis ipsum?
                Consequatur molestias saepe tenetur, deserunt illo vero id eum
                delectus repellat nostrum sit ut rerum, impedit fugit ratione
                maxime corporis dolor?
              </p>
            </div>
            <div id="contact">
              <h1>Contact Us</h1>
              <ul>
                <li>A</li>
                <li>R</li>
                <li>S</li>
              </ul>
            </div>
          </div>
          <div class="copy">
            <div class="text">
              <p>Care Easy, Copyright &copy;2020</p>
            </div>
            <a href="#" title="Go top"><i class="fas fa-chevron-up fa-2x"></i></a>
          </div>
        </div>
      </footer>

    
    </div>
    <!-- JavaScript -->
    <script src="js/main.js"></script>
  </body>
</html>
