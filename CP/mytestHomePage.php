<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>intelliMe</title>
    <link rel="stylesheet" href="mytestHomePage.css" />
    <link
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div id="bdy">
      <!-- Navigation -->
    <nav>
      <img src="pictures/logo1.png" />
    </nav>

    <!-- Home -->
    <section id="home">
      <h2>Enhance your future with intelliMe</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quidem animi
        minus sunt adipisci fuga nobis et quasi! Blanditiis est eos incidunt
        laboriosam ex dignissimos quod cumque obcaecati minima neque?
      </p>
      <br />
      <div class="btn" onclick="popup()">
        <a class="blue">Get Started</a>
      </div>
    </section>

    <!-- Features -->

    <section id="features">
      <h2>Awesome Features</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
      <div class="fea-base">
        <div class="fea-box">
          <i class="fas fa-graduation-cap"></i>
          <h3>Scholarship Facility</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sunt
            ipsam sap
          </p>
        </div>
        <div class="fea-box">
          <i class="fas fa-award"></i>
          <h3>Del Online Course</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sunt
            ipsam sap
          </p>
        </div>
        <div class="fea-box">
          <i class="fas fa-file-certificate"></i>
          <h3>Global Certification</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sunt
            ipsam sap
          </p>
        </div>
      </div>
    </section>

    <!--    Add Time -->
    <br />
    <section id="registration">
      <div class="reminder">
        <div class="time">
          <div class="date">
            18 <br />
            Days
          </div>
          <div class="date">
            23 <br />
            Hours
          </div>
          <div class="date">
            06 <br />
            Minutes
          </div>
          <div class="date">
            58 <br />
            Seconds
          </div>
        </div>
      </div>
      <div class="reg-button">
        <h3>Create Free Account NOW!</h3>
        <br />
        <br />
        <div class="btn">
          <a class="blue" href="#">Register Now</a>
        </div>
      </div>
    </section>

    <!-- Profile -->
    <section id="experts">
      <h1>Our Comunity Experts</h1>
      <p>Lorem ipsum dolor sit amet consectetur</p>
      <div class="expert-box">
        <div class="profile">
          <img src="pictures/expert1.jpg" />
          <h6>Jason</h6>
          <p>Python Algorithm Expert</p>
          <div class="pro-links">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
        </div>
        <div class="profile">
          <img src="pictures/expert2.jpg" />
          <h6>Ray</h6>
          <p>Python Algorithm Expert</p>
          <div class="pro-links">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
        </div>
        <div class="profile">
          <img src="pictures/expert3.jpg" />
          <h6>Erika</h6>
          <p>Python Algorithm Expert</p>
          <div class="pro-links">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
        </div>
        <div class="profile">
          <img src="pictures/expert4.jpg" />
          <h6>Susan</h6>
          <p>Python Algorithm Expert</p>
          <div class="pro-links">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
        <li>Power Tools</li>
        <li>Jobs</li>
        <li>Marketing Service</li>
      </div>
      <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
        <li>Power Tools</li>
        <li>Jobs</li>
        <li>Marketing Service</li>
      </div>
      <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
        <li>Power Tools</li>
        <li>Jobs</li>
        <li>Marketing Service</li>
      </div>
      <div class="footer-col">
        <h3>Newsletter</h3>
        <p>You can trust us.We only send promo offers</p>
        <div class="subscribe">
          <input type="text" placeholder="Your Email address" />
          <a href="#" class="yellow">SUBSCRIBE</a>
        </div>
      </div>

      <div class="copyright">
        <p>Copyright @2021 All rights reserved</p>
        <div class="pro-links">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin-in"></i>
        </div>
      </div>
    </footer>
    </div>
    <!-- popup window -->
    <div class="form-popup" id="popup">
        <button type="button" onclick="closeForm()">Close</button>
        <button type="button" onclick="admin()">ADMIN</button>
        <button type="button" onclick="student()">STUDENT</button>
    </div>
    <style>
      .form-popup {
        display: none;
        position: fixed;
        bottom: 50%;
        right: 42%;
        border: 3px solid #f1f1f1;
        z-index: 9;
        background-color: red;
      }
      .blur{
        filter: blur(8px);
        -webkit-filter: blur(8px);
      }
    </style>
  </body>
  <script>
    function popup(){
      document.getElementById("popup").style.display="block";
      document.getElementById("bdy").classList.add("blur");
    }
    function closeForm(){
      document.getElementById("popup").style.display="none";
      document.getElementById("bdy").classList.remove("blur");
    }
    function admin(){
      open("admin/adminLogINPage.php","_self");
    }
    function student(){
      open("student/signIn.php","_self");
    }
  </script>
</html>
