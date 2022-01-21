
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Training Page</title>

  <link rel="stylesheet" href="../CSS/maicons.css">

  <link rel="stylesheet" href="../CSS/bootstrap.css">

  <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../vendor/animate/medi-animate.css">

  <link rel="stylesheet" href="../CSS/services.css">

  <link rel="stylesheet" href="../CSS/salon.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
  
  <header>
    <?php include_once('../components/header.php') ?>
  </header>  
  <div  style="min-height: 68vh; overflow: hidden;">
  <div class="row mt-5">
        <?php
            $db = mysqli_connect('localhost', 'root', '', 'mydb');
            $query = "SELECT * FROM services WHERE catID='102';";
            $result = mysqli_query($db, $query);
            $resultCheck = mysqli_num_rows($result);

          if (empty($result)){
            echo 'There is no salon services';
          } else {
            while($row = mysqli_fetch_array($result)){
              echo "
                <div class='col-lg-3 py-3 wow fadeInUp'>
                    <div class='card-blog'>
                        <div class='header'>
                            <div class='post-thumb'><img src='../image/".$row['serviceID'].".png'></div>
                        </div>
                        <div class='body'>
                            <h2 class='post-title'>".$row['service_name']."</h2>
                            <h4 class='post-date'>Price: ".$row['price']." $ </h4>
                            <a href='#' class='service-btn btn btn-primary'>Register</a>
                        </div>
                    </div>
                </div>";
            }
          }
        ?>
    </div>
  </div>
  
    
    <?php include_once('../components/footer.php') ?>

<script src="../JS/medi-js/jquery-3.5.1.min.js"></script>

<script src="../JS/medi-js/bootstrap.bundle.min.js"></script>

<script src="../vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../vendor/wow/wow.min.js"></script>

<script src="../JS/medi-js/theme.js"></script>

</body>
</html>