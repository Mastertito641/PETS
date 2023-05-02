<?php
    include("../config/connectionDB.php");
    //Get data
    $fName=$_POST['f_name'];
    $lName=$_POST['l_name'];
    $idNum=$_POST['id_num'];
    $address=$_POST['address'];
    $celphone=$_POST['cel_phone'];
    $email=$_POST['Email'];
    $pass=md5($_POST['passwd']);

    $sql="INSERT INTO users(first_name, last_name, number_id, address, cellphone, email, password)
    VALUES('$fName','$lName','$idNum','$address','$celphone','$email','$pass')";
    //$conn->query($sql);
    if($conn->query($sql)===TRUE){
    // echo"USER HAS BEEN CREATED SUCCESFULLY";
    echo"<script>alert(' USER HAS BEEN CREATED SUCCESFULLY')</script>";
    header("refresh:0;url=http://127.0.0.1/PETS/front/login.html");

    }else{
        echo"ERROR ".$conn->error."<br>".$sql;

        echo"<script>alert('user wasnt created succesfully ')</script>";
        header("refresh:0;url=http://127.0.0.1/PETS/front/home.html");

    }
?>