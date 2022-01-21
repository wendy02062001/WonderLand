
<?php
    $page = "";

    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else if (isset($_POST['page'])){
        $page = $_POST['page'];
        }
    

    switch($page) {
      case 'search':
        include "search.php";
        break;
      
      case 'search_processing':
        include "search_processing.php";
        break;

      case 'subscribe_processing':
        include "subscribe.php";
        break;

      default:
        include "home.php";
        break;
      }
?>
