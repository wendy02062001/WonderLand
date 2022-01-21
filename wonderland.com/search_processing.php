<!DOCTYPE html>
    <html lang="en"></html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Search form</title>
        <link rel="stylesheet" href="CSS/maicons.css">

        <link rel="stylesheet" href="CSS/bootstrap.css">

        <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.css">

        <link rel="stylesheet" href="vendor/animate/animate.css">

        <link rel="stylesheet" href="CSS/services.css">
    </head>
    <body>
        <?php include_once('./components/header.php') ?>
        
        <div class="page-section text-lg">
            <div class="container">
                <div class="text-center wow fadeInUp">
                    <h2 class="title-section">Check the Result!</h2>
                    <div class="divider mx-auto"></div>
                </div>
      
                <?php
                    $db = mysqli_connect('localhost', 'root', '', 'mydb');
                    if (isset($_POST['search-service'])) {
                        $servicename = $_POST['servicename'];
                            if(!empty($servicename)) {
                                $query = "SELECT * 
                                        FROM services INNER JOIN service_categories ON services.catID = service_categories.categoryID 
                                        WHERE service_name LIKE '%$servicename%';";
                                $result = mysqli_query($db, $query);
                                $resultCheck = mysqli_num_rows($result);
                            } else {
                                $servicecate = $_POST['category'];
                                if(empty($servicename) && empty($servicecate)) {
                                    echo "<script>if(confirm('Please give us more information')){document.location.href='http://localhost/khanhlinh.com/search.php'};</script>";
                                }
                                else {
                                    $query = "SELECT * 
                                        FROM services INNER JOIN service_categories ON services.catID = service_categories.categoryID 
                                        WHERE category_name='$servicecate';";
                                    $result = mysqli_query($db, $query);
                                    $resultCheck = mysqli_num_rows($result);
                                }
                                
                            }
                            
                            if($resultCheck > 0) {
                                while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                                    echo "<div class='row mt-5'>";
                                    echo "<div class='col-12'>";
                                    echo "<div class='card-service wow fadeInUp'>";
                                    echo "<div class='body'>";
                                    echo "<h4 class='service-title text-lg'>". $row['service_name'] ."</h4>";
                                    echo "<p class='text-lg cate-title'>Category: ". $row['category_name'] ."</p>";
                                    echo "<p class='price-title'>". $row['price'] ." $</a>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            } else {
                                echo "<p class='text-center text-lg noti-search'>Oops, we don't have \"". $servicename . "\" here!</p>";
                                
                            }
                        }
                    ?>
                    <div class='col-12 mt-4 text-center'>
                        <a href='search.php' class='btn btn-primary'>Find something else?</a>
                    </div>
                    <div class='col-12 mt-4 text-center'>
                        <a href='index.php' class='btn btn-secondary backHome'>Back to Home</a>
                    </div>
            </div>
        </div>

        <?php include_once('./components/footer.php') ?>
    </body>

</html>