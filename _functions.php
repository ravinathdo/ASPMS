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
}

?>
