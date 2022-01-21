<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Medicare</title>

  <link rel="stylesheet" href="../CSS/maicons.css">

  <link rel="stylesheet" href="../CSS/bootstrap.css">

  <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../vendor/animate/medi-animate.css">

  <link rel="stylesheet" href="../CSS/medicare.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="300">
      <div class="container">
        <a href="http://localhost/khanhlinh.com/index.php" class="navbar-brand">
          <svg id="logoicon" width="24" height="24" viewbox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
            <path d="M11.954 11c3.33 0 7.057 6.123 7.632 8.716.575 2.594-.996 4.729-3.484 4.112-1.092-.271-3.252-1.307-4.102-1.291-.925.016-2.379.836-3.587 1.252-2.657.916-4.717-1.283-4.01-4.073.774-3.051 4.48-8.716 7.551-8.716zm10.793-4.39c1.188.539 1.629 2.82.894 5.27-.704 2.341-2.33 3.806-4.556 2.796-1.931-.877-2.158-3.178-.894-5.27 1.274-2.107 3.367-3.336 4.556-2.796zm-21.968.706c-1.044.729-1.06 2.996.082 5.215 1.092 2.12 2.913 3.236 4.868 1.87 1.696-1.185 1.504-3.433-.082-5.215-1.596-1.793-3.824-2.599-4.868-1.87zm15.643-7.292c1.323.251 2.321 2.428 2.182 5.062-.134 2.517-1.405 4.382-3.882 3.912-2.149-.407-2.938-2.657-2.181-5.061.761-2.421 2.559-4.164 3.881-3.913zm-10.295.058c-1.268.451-1.92 2.756-1.377 5.337.519 2.467 2.062 4.114 4.437 3.269 2.06-.732 2.494-3.077 1.377-5.336-1.125-2.276-3.169-3.721-4.437-3.27z"/>
          </svg>
          <span id="logoname" class="text-primary">WonderLand</span>
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapsed" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/khanhlinh.com/home.php">Home</a>
            </li>

            <li class="nav-item" id="dropdown">
              <a class="nav-link" href="http://localhost/khanhlinh.com/services">Services</a>
              <div id="dropdown-content">
                <a href="#salon-part">Salon</a>
                <a href="#training-part">Training</a>
                <a href="http://localhost/khanhlinh.com/services/medicare.php">Medi-care</a>
              </div>
            </li>
            
            <li class="nav-item" id="nav-login">
              <a href="login.php" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="icon__user">
                    <path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/>
                </svg>
                <span> Login</span>
            </a>
            </li>
            <li class="nav-item" id="nav-register">
              <a href="register.php" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M12.451 17.337l-2.451 2.663h-2v2h-2v2h-6v-5l6.865-6.949c1.08 2.424 3.095 4.336 5.586 5.286zm11.549-9.337c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-3-3c0-1.104-.896-2-2-2s-2 .896-2 2 .896 2 2 2 2-.896 2-2z"/>
                </svg>
                    <span> Register</span>
                </a>
            </li>

            <li class="nav-item" id="nav-user">
              <div class="row">
                <div class="col-2">
                  <a href="database/logout.php" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M10 9.408l2.963 2.592-2.963 2.592v-1.592h-8v-2h8v-1.592zm-2-4.408v4h-8v6h8v4l8-7-8-7zm6-3c-1.787 0-3.46.474-4.911 1.295l.228.2 1.396 1.221c1.004-.456 2.114-.716 3.287-.716 4.411 0 8 3.589 8 8s-3.589 8-8 8c-1.173 0-2.283-.26-3.288-.715l-1.396 1.221-.228.2c1.452.82 3.125 1.294 4.912 1.294 5.522 0 10-4.477 10-10s-4.478-10-10-10z"/>
                    </svg>
                  </a>
                </div>

                <div class="nav-link col-10" id="nav-username">
                  <span>
                    Hello, 
                        <span id="nav-user-name">
                        <?php
                          if (isset($_SESSION['username'])) { ?>
                          <script type="text/javascript">document.getElementById('nav-user').style.display = 'inline-block';</script>
                          <script type="text/javascript">document.getElementById('nav-login').style.display = 'none';</script>
                          <script type="text/javascript">document.getElementById('nav-register').style.display = 'none';</script>
                          <?php
                          echo  $_SESSION['username'];
                        }
                        else { ?>
                          <script type="text/javascript">document.getElementById('nav-user').style.display = 'none';</script>
                          <script type="text/javascript">document.getElementById('nav-login').style.display = 'inline-block';</script>
                          <script type="text/javascript">document.getElementById('nav-register').style.display = 'inline-block';</script>
                        <?php }
                        ?>
                        </span>
                  </span>
                </div>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../image/clinic.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's help your pets healthier</span>
        <h1 class="display-4">Healthy and Happy</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Medicare</span> Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Medicare</span> Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to  Medicare <br> Center</h1>
            <p class="text-grey mb-4">We have the best team of vets who have more than 2 years of experience in pet's health. Come to our Medicare, you will have more knowledge about your pet's health status. 
              We also advise some eating plans that suitable to pet's status. </p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../image/Vet2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Your name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Pet name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" required>
            <select name="kind" id="petkind" class="custom-select">
              <option value="kind" selected disabled>Pet kind...</option>
              <option value="dog">Dog</option>
              <option value="cat">Cat</option>
              <option value="bunny">Bunny</option>
              <option value="hamster">Hamster</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Email..." required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Phone number..." required>
          </div>
        
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms" required>
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" required>
            <select name="departement" id="departement" class="custom-select">
              <option value="general">General Check</option>
              <option value="dental">Dental</option>
              <option value="dental">Eye Test</option>
              <option value="neurology">Skin Health</option>
              <option value="orthopaedics">Nutrition</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h3>Keep in touch!</h3>
          <p style="opacity: .9;">Don't miss any new services and favors<p>
          <input type="email" placeholder="Email" class="get_email">
          <button class="btn-primary" id="btn-submit">Submit</button>
        </div>
        <div class="col-6">
          <h3>Meet Us</h3>
          <ul>
            <li>
              <div class="contact-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M12 1l-12 12h3v10h18v-10h3l-12-12zm0 18c-1.607-1.626-3-2.84-3-4.027 0-1.721 2.427-2.166 3-.473.574-1.695 3-1.246 3 .473 0 1.187-1.393 2.402-3 4.027zm8-11.907l-3-3v-2.093h3v5.093z"/>
                </svg>
                <span>26 Tran Hung Dao St., Ben Thanh Ward, District 1</span>
              </div>
            </li>

            <li>
              <div class="contact-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3.445 17.827c-3.684 1.684-9.401-9.43-5.8-11.308l1.053-.519 1.746 3.409-1.042.513c-1.095.587 1.185 5.04 2.305 4.497l1.032-.505 1.76 3.397-1.054.516z"/>
                </svg>
                <span>120 2611 2622</span>
              </div>
            </li>

            <li>
              <div class="contact-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M13 12v-5h-1.999v6.999h5.999v-1.999h-4zm-12.197-4.285c-1.261-1.944-1.035-4.569.675-6.266 1.7-1.687 4.305-1.896 6.235-.645-3.171 1.219-5.692 3.741-6.91 6.911zm18.428 11.18c1.715-1.794 2.771-4.219 2.771-6.896 0-5.522-4.477-10-10.002-10-5.522 0-10 4.477-10 10 0 2.678 1.059 5.104 2.772 6.898l-1.736 4.506c-.159.394.288.759.643.522l3.581-3.122c1.412.761 3.026 1.195 4.742 1.195 1.717 0 3.334-.434 4.744-1.195l3.582 3.122c.355.237.803-.128.643-.522l-1.74-4.508zm-7.23 1.103c-4.412 0-8.001-3.588-8.001-8s3.589-8 8.001-8c4.412 0 8.002 3.588 8.002 8s-3.59 8-8.002 8zm10.553-18.52c-1.697-1.71-4.324-1.937-6.268-.675 3.17 1.218 5.693 3.739 6.912 6.91 1.25-1.931 1.041-4.535-.644-6.235z"/>
                </svg>
                <span>10AM - 9PM</span>
        </div>
      </div>
    </div>
  </footer>

  

<script src="../JS/medi-js/jquery-3.5.1.min.js"></script>

<script src="../JS/medi-js/bootstrap.bundle.min.js"></script>

<script src="../vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../vendor/wow/wow.min.js"></script>

<script src="../JS/medi-js/theme.js"></script>
  
</body>
</html>