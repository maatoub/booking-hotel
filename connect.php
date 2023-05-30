<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $dateIn = $_POST['dateIn'];
    $dateOut = $_POST['dateOut'];

    $cnx = new mysqli('localhost','root','','booking');
    if($cnx->connect_error){
            die('Connection failed');
    }else{
        $satatment = $cnx->prepare("INSERT INTO dbBooking VALUES(?,?,?,?,?) ");
        $satatment -> bind_param('ssssi',$firstName,$lastName,$email, $dateIn,$dateOut);
        $satatment->execute();
        $satatment->close();
        $cnx->close();
    }
?>