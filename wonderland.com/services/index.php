<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Service Page</title>

  <link rel="stylesheet" href="../CSS/maicons.css">

  <link rel="stylesheet" href="../CSS/bootstrap.css">

  <link rel="stylesheet" href="../vendor/animate/animate.css">

  <link rel="stylesheet" href="../CSS/services.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
  
  <header>
    <?php include_once('../components/header.php') ?>

    <div class="container">
      <div class="page-banner">
        <div class="row">
          <div class="col-lg-6" id="banner-text">
            <h1>Love your pets <br>Like they do</h1>
            <p>Money can buy you a pet, but love gives you a true friend. 
              <br> From today, join us to give your best friends the best cares! 
              <br> The more care you give them, the more love they give you.</p>
          </div>

          <div class="col-lg-6">
            <img id="dog-hug" src="../image/Vet.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="../image/salon-icon.png" alt="">
            </div>
            <div class="body">
              <h5 class="text-primary">Salon</h5>
              <p>Let your pets relax and enjoy our high-quality beauty services.</p>
              <a href="http://localhost/khanhlinh.com/services/salon.php" class="btn btn-primary">More detail</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="../image/train-icon.png" alt="">
            </div>
            <div class="body">
              <h5 class="text-primary">Training</h5>
              <p>Come to our courses from today! Let they prove themshelves!</p>
              <a href="http://localhost/khanhlinh.com/services/training.php" class="btn btn-primary">More detail</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="../image/care-icon.png" alt="">
            </div>
            <div class="body">
              <h5 class="text-primary">Medicare</h5>
              <p>Don't forget to take care of their health. With good health, they can do anything!</p>
              <a href="http://localhost/khanhlinh.com/services/medicare.php" class="btn btn-primary">More detail</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <?php include_once('../components/footer.php') ?>

<script src="../JS/medi-js/jquery-3.5.1.min.js"></script>

<script src="../JS/medi-js/bootstrap.bundle.min.js"></script>

<script src="../JS/medi-js/google-maps.js"></script>

<script src="../JS/service-js/theme.js"></script>

<script src="../vendor/wow/wow.min.js"></script>

</body>
</html>