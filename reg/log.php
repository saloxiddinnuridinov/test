<?php 
   require_once("../com/test.php");
    $test = new Test();
        if(isset($_POST["submit"]) && ($_POST["radio"] == "student")){
            $quiz = $test->getEmailStudent($_POST["email"], $_POST["password"]);
            if($_POST["email"] == $quiz[0]["email"] && $_POST["password"] == $quiz[0]["password"]){
                header("Location: ../test-student.php");
            }
            else{
                echo "Xatolik ";
            }
        }
        if(isset($_POST["submit"]) && ($_POST["radio"] == "ticher")){
            $quiz = $test->getEmailTicher($_POST["email"], $_POST["password"]);
            
            if($_POST["email"] == $quiz[0]["email"] ){
                header("Location: ../teacher.php");
            }
            else{
                echo "Xatolik! teacher";
            }
        }
        
?>