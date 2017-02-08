<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
getDBConnection();

function getDBConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "123";
    $db = "aspms_db";
// Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        return $conn;
    }
}

function doLogin() {
    $conn = getDBConnection();


    //login hard-corded
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'a') {
        $_SESSION['islog'] = true;
        $_SESSION['username'] = "admin";
        $_SESSION['role'] = "ADM";
        return true;
    } else if ($_POST['username'] == 'emp' && $_POST['password'] == 'a') {
        $_SESSION['islog'] = true;
        $_SESSION['username'] = "emp";
        $_SESSION['role'] = "EMP";
        return true;
    }
    return false;



    /*
      $sql = "SELECT * FROM USERS WHERE username = '".$_POST['username']."' AND password = PASSWORD('".$_POST['password']."')";
      echo 'sql:'.$sql;
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while ($row = mysqli_fetch_assoc($result)) {
      echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
      }
      } else {
      echo "0 results";
      }

      mysqli_close($conn);

     */
}

function addItem() {
    //insert into table
     $conn = getDBConnection();
    
    $sql = " INSERT INTO item
            (item_name,
             category_code,
             brand,
             buying_price,
             selling_price,
             description,
             qty,
             image_path,
             store_area)
VALUES ('".$_POST['item_name']."',
        '".$_POST['category_code']."',
        '".$_POST['brand']."',
        '".$_POST['buying_price']."',
        '".$_POST['selling_price']."',
        '".$_POST['description']."',
        '".$_POST['qty']."',
        'sample.jpg',
        '".$_POST['store_area']."'); ";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>
