<?php
    require ("../com/test.php"); 
    $test = new Test();
    $id = $_GET["id"];
    $result = $test->viewQuiz($id);
   
	if(!$result){
		echo $connection->error;
            die;
        }
    if (mysqli_num_rows($result) >= 1 ) {
        $test->deleteQuiz($id);
     }

    header("Location: ../view-test.php");
?>