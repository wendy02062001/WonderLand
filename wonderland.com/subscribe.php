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
        <?php
            session_start();
            if (!isset($_SESSION['username']) || $_SESSION['username'] == NULL) {
                header('Location: ./login.php');
            }
            session_write_close(); 
            include ('./components/header.php'); 
        ?>
        
        <div class="page-section text-lg">
            <div class="container">
                <div class="text-center wow fadeInUp">
                    <h2 class="title-section">Be A Part of WonderLand!</h2>
                    <div class="divider mx-auto"></div>
                </div>

                    <?php
                    
                        $customer = $_SESSION['username'];
                        $db = mysqli_connect('localhost', 'root', '', 'mydb');
                                if (isset($_POST['newfriend'])) {
                                    $sql = "UPDATE users
                                            SET subscribe_ID = '101'
                                            WHERE name = '$customer'";
                                    mysqli_query($db, $sql);

                                    $query = "SELECT * FROM users INNER JOIN subscribe_package ON users.subscribe_ID = subscribe_package.packageID  WHERE package_name='New Friends';";
                                    $found = mysqli_query($db, $query);
                                    $result = mysqli_fetch_assoc($found);
                                    echo "<div id='card' class='animated fadeIn'>";
                                    echo "<div id='upper-side'>";
                                    echo "<h2 id='status'>".$result['package_name']."</h2>";
                                    echo "<h4 id='sub-status'> is successfully subscribe! </h4>";
                                    echo "</div>";
                                    echo "<div id='lower-side'>
                                        <p id='message'> Congratulations, ".$customer."! </p>
                                        <p id='message'> Thanks for being our member from today. </p>
                                    </div>
                                    </div>";
                                }
                                else if (isset($_POST['bestfriend'])) {
                                    $sql = "UPDATE users
                                            SET subscribe_ID = '102'
                                            WHERE name = '$customer'";
                                    mysqli_query($db, $sql);

                                    $query = "SELECT * FROM users INNER JOIN subscribe_package ON users.subscribe_ID = subscribe_package.packageID  WHERE package_name='Best Friends';";
                                    $found = mysqli_query($db, $query);
                                    $result = mysqli_fetch_assoc($found);
                                    echo "<div id='card' class='animated fadeIn'>";
                                    echo "<div id='upper-side'>";
                                    echo "<h2 id='status'>".$result['package_name']."</h2>";
                                    echo "<h4 id='sub-status'> is successfully subscribe! </h4>";
                                    echo "</div>";
                                    echo "<div id='lower-side'>
                                        <p id='message'> Congratulations, ".$customer."! </p>
                                        <p id='message'> Thanks for being our member from today. </p>
                                    </div>
                                    </div>";
                                }
                                else if (isset($_POST['soulmate'])) {
                                    $sql = "UPDATE users
                                            SET subscribe_ID = '103'
                                            WHERE name = '$customer'";
                                    mysqli_query($db, $sql);

                                    $query = "SELECT * FROM users INNER JOIN subscribe_package ON users.subscribe_ID = subscribe_package.packageID  WHERE package_name='Soulmates';";
                                    $found = mysqli_query($db, $query);
                                    $result = mysqli_fetch_assoc($found);
                                    echo "<div id='card' class='animated fadeIn'>";
                                    echo "<div id='upper-side'>";
                                    echo "<h2 id='status'>".$result['package_name']."</h2>";
                                    echo "<h4 id='sub-status'> is successfully subscribe! </h4>";
                                    echo "</div>";
                                    echo "<div id='lower-side'>
                                        <p id='message'> Congratulations, ".$customer."! </p>
                                        <p id='message'> Thanks for being our member from today. </p>
                                    </div>
                                    </div>";
                                }
                    ?>

                    <a href='index.php' class='btn btn-secondary backHome' id='back-sub'>Back to Home</a>    
                    </div>
            </div>
        </div>

        <?php include_once('./components/footer.php') ?>
    </body>

</html>