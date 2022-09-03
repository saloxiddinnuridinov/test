<?php
require ("com/test.php"); 
    $test = new Test();
    $id = $_GET["id"];
    $result = $test->editQuizView($id);
    //print_r($result);
    
	if(!$result){
		echo $connection->error;
            die;
    }
    //header("Location: ../view-edit-test.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticher</title>
    
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<?php
require_once("inc/sidebar.php");
require_once("inc/header.php");
?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Edit Test</h4>
                                </div>
                                <div class="card-body">
                                    <div class="input-states"> 
            <?php
            $i = 0;
            foreach ($result as $baza){
               $i++;
            ?>              
                                        <form class="form-horizontal" action="edit&delete/edit.php?id=<?=$baza["id"]?>" method="post">
            
                                            <div class="form-group has-success">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Savolni kiriting</label>
                                                    <div class="col-sm-9">
                                                        <input name="savol" value="<?=$baza["savol"]?>" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group has-success has-feedback">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">To'g'ri javobni kiriting</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i
                                                                    class="ti-user"></i></span>
                                                            <input name="t_javob" value="<?=$baza["t_javob"]?>" type="text" class="form-control">
                                                        </div>
                                                        <span class="ti-check form-control-feedback"></span>
                                                        <span class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group has-error has-feedback">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Noto'g'ri javobni kiriting</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i
                                                                    class="ti-user"></i></span>
                                                            <input name="n_javob1" value="<?=$baza["n_javob"]?>" type="text" class="form-control">
                                                        </div>
                                                        <span class="ti-close form-control-feedback"></span>
                                                        <span class="sr-only">(error)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group has-error has-feedback">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Noto'g'ri javobni kiriting</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i
                                                                    class="ti-user"></i></span>
                                                            <input name="n_javob2" value="<?=$baza["n_javob2"]?>" type="text" class="form-control">
                                                        </div>
                                                        <span class="ti-close form-control-feedback"></span>
                                                        <span class="sr-only">(error)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group has-error has-feedback">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Noto'g'ri javobni kiriting</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i
                                                                    class="ti-user"></i></span>
                                                            <input name="n_javob3" value=" <?=$baza["n_javob3"]?>" type="text" class="form-control">
                                                        </div>
                                                        <span class="ti-close form-control-feedback"></span>
                                                        <span class="sr-only">(error)</span>
                                                    </div>
                                                </div>
                                            </div>
            <?php
            }
            ?>
                                            <button name="ok" type="submit"  class="btn btn-primary btn-block m-b-10">submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
require_once("inc/footer.php");
?>

</body>

</html> 