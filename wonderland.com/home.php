<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Home Page</title>

  <link rel="stylesheet" href="css/maicons.css">

  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="vendor/animate/animate.css">

  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="css/services.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
  
  <header>
    <?php include_once('./components/header.php') ?>

    <div class="container">
      <div class="page-banner home-banner" id="home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 id="home-name">Wonderland For Your Pets</h1>
            <p id="home-slogan">More than pets, they are our Friends !</p>
            <a href="http://localhost/khanhlinh.com/?page=search" class="hero__btn btn btn-primary btn-split">More services<div class="fab"><span class="mai-search"></span></div></a>
            <a href="#offers" class="hero__btn btn btn-secondary btn-split">Special offers<div class="fab"><span class="mai-bulb"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img id="pet-main" src="image/pet-main.png" alt="">
            </div>
          </div>
        </div>
        <a href="#abus" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="card-service article-box">
            <div class="row">
              <div class="col-4 header">
                <img src="image/happy-dog.jpg" alt="">
              </div>
              <div class="col-8 body">
                <h2>Wanna know your pet's feelings?</h2>
                <p class="article-header">Wouldn’t it be great to know what your pet is thinking? How can we interpret...</p>
                <a href="https://pursuit.unimelb.edu.au/articles/ever-wondered-what-your-pet-is-thinking" class="btn btn-primary read-more">Read more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card-service article-box">
          <div class="row">
              <div class="col-4 header">
                <img src="image/pet.jpg" alt="">
              </div>

              <div class="col-8 body">
                <h2>Fun facts about your pets</h2>
                <p lass="article-header">Did you know that cats have more than 100 vocal sounds, or that dogs are not...</p>
                <a href="https://us.virbac.com/top-random-pet-facts" class="btn btn-primary read-more">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section" id="abus">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">
          <h2 class="title-section">The high-quality service center for pet care</h2>
          <div class="divider"></div>

          <div class="title-para">
          <p>Pets are fun to spend time with, but taking care of them is also a hard work with high responsibility.</p>
          <p>At WonderLand, we provide the high-quality services for your pets in three aspects: <span class="important-txt">Beauty, Mental, and Physical</span>.</p>
          <p>Come to our WonderLand, you will see how your good friends change possitively.</p>
        </div>
          </div>
        <div class="col-lg-6 py-3">
          <div class="img-fluid py-3 text-center">
            <img id="ab-img" src="image/ab-us.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section" id="offers">
    <div class="container">
      <div class="text-center">
        <div class="subhead">WonderLand Member Favors</div>
        <h2 class="title-section">Choose the suitable for you</h2>
        <div class="divider mx-auto"></div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-4 py-3">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">New Friends</div>
              <div class="price">
                <span class="dollar">$</span>
                <h1>499<span class="suffix">.99</span></h1>
              </div>
              <h5>Annually</h5>
            </div>
            <div class="body">
              <p>1 Free salon service <span class="suffix">every month</span></p>
              <p>General Health Check <span class="suffix">twice a year</span></p>
              <p>5% discount <span class="suffix">training classes</span></p>
              <p>Birthday Present <span class="suffix">for pet</span></p>
            </div>
            <div class="footer">
              <form  action="index.php" method="POST">
                <input type="hidden" name="page" value="subscribe_processing">
                <button class="btn btn-pricing btn-block" name="newfriend" id="nf-btn" type="submit" >Subscribe</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3">
          <div class="card-pricing marked">
            <div class="header">
              <div class="pricing-type">Soulmates</div>
              <div class="price">
                <span class="dollar">$</span>
                <h1>999<span class="suffix">.99</span></h1>
              </div>
              <h5>Annually</h5>
            </div>
            <div class="body">
              <p>4 Free salon service <span class="suffix">every month</span></p>
              <p>General Health Check <span class="suffix">twice a year</span></p>
              <p>1 Free Shower gel  <span class="suffix">every year</span></p>
              <p>20% discount <span class="suffix">training classes</span></p>
              <p>Birthday Present <span class="suffix">for pet</span></p>
              <p>1 Free collar  <span class="suffix">with name tag</span></p>
            </div>
            <div class="footer">
              <form  action="index.php" method="POST">
                <input type="hidden" name="page" value="subscribe_processing">
                <button class="btn btn-pricing btn-block" name="soulmate" id="soulmate-btn" type="submit" >Subscribe</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">Best Friends</div>
              <div class="price">
                <span class="dollar">$</span>
                <h1>799<span class="suffix">.99</span></h1>
              </div>
              <h5>Annually</h5>
            </div>
            <div class="body">
              <p>2 Free salon service <span class="suffix">every month</span></p>
              <p>General Health Check <span class="suffix">twice a year</span></p>
              <p>10% discount <span class="suffix">training classes</span></p>
              <p>Birthday Present <span class="suffix">for pet</span></p>
            </div>
            <div class="footer">
              <form  action="index.php" method="POST">
                <input type="hidden" name="page" value="subscribe_processing">
                <button class="btn btn-pricing btn-block" name="bestfriend" id="bf-btn" type="submit">Subscribe</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  <?php include_once('./components/footer.php') ?>

<script src="js/medi-js/jquery-3.5.1.min.js"></script>

<script src="js/medi-js/bootstrap.bundle.min.js"></script>

<script src="js/medi-js/google-maps.js"></script>

<script src="js/service-js/theme.js"></script>

<script src="vendor/wow/wow.min.js"></script>

</body>
</html>