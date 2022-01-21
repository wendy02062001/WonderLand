<?php
    include_once 'createDB.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
  
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="../CSS/index.css" />
  <link rel="stylesheet" href="CSS/database.css"/>

  <title>Pet Shop</title>
</head>

<body>

  <!-- Header -->
  <header id="header" class="header">
  <?php include_once('../header.php') ?>
  </header>
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <h1 style="padding-top:2rem;">Database of services - categories and detail</h1>
    <div class="left-right-arrows">
        <svg onclick="backtable()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12-5.373-12-12-12-12 5.373-12 12zm7.58 0l5.988-5.995 1.414 1.416-4.574 4.579 4.574 4.59-1.414 1.416-5.988-6.006z"/>
        </svg>

        <svg onclick="nexttable()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.568 18.005l-1.414-1.415 4.574-4.59-4.574-4.579 1.414-1.416 5.988 5.995-5.988 6.005z"/>
        </svg>
    </div>
    <div id="database">
    <div class="service-cate" id="category">
      <h2>Service category database</h2>
      <p>Imported from <em>phpmyadmin</em></p>
    <?php 
        $sql = "SELECT * FROM service_categories;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          echo "<table border='1'>
          <tr>
          <th>Category ID</th>
          <th>Service category</th>
          </tr>";

          while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
            echo "<tr>";
            echo "<td>" . $row['categoryID'] . "</td>";
            echo "<td>" . $row['category_name'] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        }
    ?>
    </div>

    <div class="service-detail" id="services">
      <h2>Service database</h2>
      <p>Imported from <em>phpmyadmin</em></p>
    <?php 
        $sql = "SELECT * FROM services;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          echo "<table border='1'>
          <tr>
          <th>Service ID</th>
          <th>Service Name</th>
          <th>Price</th>
          <th>Category ID</th>
          </tr>";

          while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
            echo "<tr>";
            echo "<td>" . $row['serviceID'] . "</td>";
            echo "<td>" . $row['service_name'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['catID'] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        }
    ?>
    </div>
    </div>

  </section><!-- End Hero -->

  <!--Footer-->
   <footer class="footer">
    <div class="container">
      <div class="footer-container">
        <div class="sub-email">
          <h3>Keep in touch!</h3>
          <p style="opacity: .7;">Don't miss any new services and favors<p>
          <input type="email" placeholder="Email" class="get_email">
          <button class="btn_get">Submit</button>
        </div>

        <div class="contact">
          <h3>Meet Us</h3>
          <ul>
            <li>
              <div class="contact-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M12 1l-12 12h3v10h18v-10h3l-12-12zm0 18c-1.607-1.626-3-2.84-3-4.027 0-1.721 2.427-2.166 3-.473.574-1.695 3-1.246 3 .473 0 1.187-1.393 2.402-3 4.027zm8-11.907l-3-3v-2.093h3v5.093z"/>
                </svg>
                <p>26 Tran Hung Dao St., Ben Thanh Ward, District 1</p>
              </div>
            </li>

            <li>
              <div class="contact-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3.445 17.827c-3.684 1.684-9.401-9.43-5.8-11.308l1.053-.519 1.746 3.409-1.042.513c-1.095.587 1.185 5.04 2.305 4.497l1.032-.505 1.76 3.397-1.054.516z"/>
                </svg>
                <p>120 2611 2622</p>
              </div>
            </li>

            <li>
              <div class="contact-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M13 12v-5h-1.999v6.999h5.999v-1.999h-4zm-12.197-4.285c-1.261-1.944-1.035-4.569.675-6.266 1.7-1.687 4.305-1.896 6.235-.645-3.171 1.219-5.692 3.741-6.91 6.911zm18.428 11.18c1.715-1.794 2.771-4.219 2.771-6.896 0-5.522-4.477-10-10.002-10-5.522 0-10 4.477-10 10 0 2.678 1.059 5.104 2.772 6.898l-1.736 4.506c-.159.394.288.759.643.522l3.581-3.122c1.412.761 3.026 1.195 4.742 1.195 1.717 0 3.334-.434 4.744-1.195l3.582 3.122c.355.237.803-.128.643-.522l-1.74-4.508zm-7.23 1.103c-4.412 0-8.001-3.588-8.001-8s3.589-8 8.001-8c4.412 0 8.002 3.588 8.002 8s-3.59 8-8.002 8zm10.553-18.52c-1.697-1.71-4.324-1.937-6.268-.675 3.17 1.218 5.693 3.739 6.912 6.91 1.25-1.931 1.041-4.535-.644-6.235z"/>
                </svg>
                <p>10AM - 9PM</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer> 
  <!-- Glide Carousel Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <!-- Vendor JS Files -->
   <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="../JS/medi-js/jquery-3.5.1.min.js"></script>

<script src="JS/database.js"></script>

</body>

</html>