<?php
    require ("../com/test.php");
    $test = new Test();
    $id = $_GET["id"];
    $ok = $_POST["ok"];
    $savol = $_POST["savol"];
    $t_javob = $_POST["t_javob"];
    $n_javob1 = $_POST["n_javob1"];
    $n_javob2 = $_POST["n_javob2"];
    $n_javob3 = $_POST["n_javob3"];

    if(isset($ok)){
        $result = $test->viewQuiz($id);

        if(!$result){
        echo $connection->error;
        die;
        }
        if ($result>= 1 ) {
            $test->updateQuiz($id, $savol, $t_javob, $n_javob1, $n_javob2, $n_javob3);
        }
    }

    header("Location: ../view-test.php");
?>