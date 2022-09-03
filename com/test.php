<?php  
require_once "config.php"; 
class Test{
    public function getTest(){ 
        $config = new Config();
        $obj = $config->sql("SELECT * FROM `quiz`");
        return $config->sqlArray($obj);
    }
    public function setNameStudent(){
        $config = new Config();
        $obj = $config->sql("SELECT * FROM `login_talaba`");
        return $config->sqlArray($obj);
    }

    public function getBaza($id){ 
        $config = new Config();
        $obj = $config->sql("SELECT `t_javob` FROM `quiz` WHERE `t_javob` = '$id'");
        return $config->sqlArray($obj);
    }

    public function setEmailStudent($name, $email, $password){
        $config = new Config();
        return $config->sql("INSERT INTO `login_talaba` (`name`,`email`, `password` ) VALUES('$name','$email', '$password')");
    }
    public function setEmailTicher($name, $email, $password){
        $config = new Config();
        return $config->sql("INSERT INTO `login_ticher` (`name`,`email`, `password` ) VALUES('$name', '$email', '$password')");
    }

    public function getEmailStudent($email, $password){
        $config = new Config();
        $obj = $config->sql("SELECT * FROM `login_talaba` WHERE `email` = '$email' AND `password` = '$password'");
        return $config->sqlArray($obj);
    }
    public function getEmailTicher($email, $password){
        $config = new Config();
        $obj = $config->sql("SELECT * FROM `login_ticher` WHERE `email` = '$email' AND `password` = '$password'");
        return $config->sqlArray($obj);
    }
    public function getQuiz($savol, $t_javob, $n_javob1, $n_javob2, $n_javob3){
        $config = new Config();
        return $config->sql("INSERT INTO `quiz` (`savol`, `t_javob`, `n_javob`, `n_javob2`, `n_javob3`) VALUES ('$savol', '$t_javob', '$n_javob1', '$n_javob2', '$n_javob3')");
    }
    public function viewQuiz($id){
        $config = new Config();
        return $config->sql("SELECT * FROM `quiz` WHERE `id` = '$id'");
    }
    public function deleteQuiz($id){
        $config = new Config();
        return $config->sql("DELETE  FROM `quiz` WHERE `id` = '$id'");
    }
    public function editQuizView($id){
        $config = new Config();
        $obj = $config->sql("SELECT * FROM `quiz` WHERE `id` = '$id'");
        return $config->sqlArray($obj);
    }
    public function updateQuiz($id, $savol, $t_javob, $n_javob1, $n_javob2, $n_javob3){
        $config = new Config("");
        return $config->sql("UPDATE `quiz` SET `savol` = '$savol', `t_javob` = '$t_javob', `n_javob` = '$n_javob1', `n_javob2` = '$n_javob2', `n_javob3` = '$n_javob3' WHERE `quiz`.`id` = '$id'");
    }

}
?>