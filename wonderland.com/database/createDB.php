<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    //Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Check connection
    if (!$conn) {
        die("Connection is failed: ".mysqli_connected_error());
    } else {
        echo "Successfully Connected";
    }

    //Create DB
    $sql = "CREATE DATABASE myDB";

    //products table
    $sqlsc = "CREATE TABLE IF NOT EXISTS service_categories (
        categoryID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        category_name VARCHAR(20) NOT NULL
        )";
    mysqli_query($conn, $sqlsc);
    
    //service table 
    $sqls = "CREATE TABLE IF NOT EXISTS services(
        serviceID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        service_name VARCHAR(20) NOT NULL,
        price VARCHAR(10) NOT NULL,
        catID INT(6) UNSIGNED NOT NULL
        )";
    mysqli_query($conn, $sqls);

    //user table
    $sqlu = "CREATE TABLE IF NOT EXISTS users (
        userID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(20) NOT NULL,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL
        )";
    mysqli_query($conn, $sqlu);

    $sql = "INSERT INTO service_categories (categoryID, category_name) VALUES ('101', 'Salon')";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO service_categories (categoryID, category_name) VALUES ('102', 'Training')";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO service_categories (categoryID, category_name) VALUES ('103', 'Medicare')";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO services (serviceID, service_name, price, catID) VALUES ('1101', 'Nice and Neat', '25', '101')";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO services (serviceID, service_name, price, catID) VALUES ('1102', 'Clean and Cool', '35', '101')";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO services (serviceID, service_name, price, catID) VALUES ('1103', 'Shiny Smile', '30', '101')";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO services (serviceID, service_name, price, catID) VALUES ('1104', 'Pretty Paws', '30', '101')";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO services (serviceID, service_name, price, catID) VALUES ('2101', 'Friendly Friends', '100', '102')";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO services (serviceID, service_name, price, catID) VALUES ('2102', 'Happy Hop', '115', '102')";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO services (serviceID, service_name, price, catID) VALUES ('2103', 'Math Master', '150', '102')";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO services (serviceID, service_name, price, catID) VALUES ('2104', 'Go Get It', '90', '102')";
    mysqli_query($conn, $sql);


?>