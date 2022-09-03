<?php
require_once "../com/test.php";
$test = new Test();
$ok = $_POST["ok"];
$savol = htmlspecialchars($_POST["savol"], ENT_QUOTES, 'UTF-8');
$t_javob = htmlspecialchars($_POST["t_javob"],ENT_QUOTES,'UTF-8');
$n_javob1 = htmlspecialchars($_POST["n_javob1"], ENT_QUOTES, 'UTF-8');
$n_javob2 = htmlspecialchars($_POST["n_javob2"], ENT_QUOTES, 'UTF-8');
$n_javob3 = htmlspecialchars($_POST["n_javob3"], ENT_QUOTES, 'UTF-8');
if(isset($ok)){
$test->getQuiz("$savol", "$t_javob", "$n_javob1", "$n_javob2", "$n_javob3");
header("Location: ../view-test.php");
}
?>