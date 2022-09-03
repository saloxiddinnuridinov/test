<?php
    require_once("../com/test.php");
    $test = new Test();
    // if(!validateEmail($_POST["email"]) && !validatePassword($_POST["password"])){
    //     header("Location: ../register.php");
    //     die(); 
    //}
    if ((isset($_POST["submit"])) && ($_POST["radio"] == "student")) {
        $test->setEmailStudent($_POST["name"], $_POST["email"], $_POST["password"]);
    }
    if ((isset($_POST["submit"])) && ($_POST["radio"] == "ticher")) {
        $test->setEmailTicher($_POST["name"], $_POST["email"], $_POST["password"]);
    }
    header("Location: ../reg/login.php");
?>