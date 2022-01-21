<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Home Page</title>

  <link rel="stylesheet" href="./CSS/maicons.css">

  <link rel="stylesheet" href="./CSS/bootstrap.css">

  <link rel="stylesheet" href="./vendor/animate/animate.css">

  <link rel="stylesheet" href="./CSS/homepage.css">
  <link rel="stylesheet" href="./CSS/services.css">
</head>
<body>

  <!-- Back to top button -->
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
              <a class="nav-link" href="search.php">
              <svg id="search" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M13 8h-8v-1h8v1zm0 2h-8v-1h8v1zm-3 2h-5v-1h5v1zm11.172 12l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"/>
              </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/khanhlinh.com/home.php">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="http://localhost/khanhlinh.com/services">Services</a>
              <div class="dropdown-content">
                <a href="http://localhost/khanhlinh.com/services/salon.php">Salon</a>
                <a href="http://localhost/khanhlinh.com/services/training.php">Training</a>
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
                          
                          $customer = $_SESSION['username'];
                          $db = mysqli_connect('localhost', 'root', '', 'mydb');
                          $query = "SELECT * FROM users INNER JOIN subscribe_package ON users.subscribe_ID = subscribe_package.packageID WHERE name = '$customer'";
                          $found = mysqli_query($db, $query);
                          $result = mysqli_fetch_assoc($found);

                          if(!empty($result['subscribe_ID'])){
                            if($result["subscribe_ID"] == "101") {
                              echo " <span id='newfriend' class = 'type-sub '> ".$result["package_name"]."</span>";
                            } else if($result["subscribe_ID"] == "102") {
                              echo " <span id='bestfriend' class = 'type-sub '> ".$result["package_name"]."</span>";
                            } else if($result["subscribe_ID"] == "103") {
                              echo " <span id ='soulmate' class = 'type-sub'> ".$result["package_name"]."</span>";
                            }
                          }
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


<script src="./JS/medi-js/jquery-3.5.1.min.js"></script>

<script src="./JS/medi-js/bootstrap.bundle.min.js"></script>

<script src="./JS/medi-js/google-maps.js"></script>

<script src="../JS/service-js/theme.js"></script>

<script src="./vendor/wow/wow.min.js"></script>

</body>
</html>