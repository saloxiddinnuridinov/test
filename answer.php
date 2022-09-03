<?php  
require_once("com/test.php");
$test = new Test();
$k = 0;
$l = 0;
//print_r($_POST);
//print_r($_POST);
if (isset($_POST["ok"])) {
    $arrays = $_POST;
    $i = 1;
    $count = count($arrays);
 //print_r($arrays);
    for ($j=1; $j<$count; $j++) {
        $javob = $arrays["question$i"];
        //print_r($arrays["question$i"]);
        $true = $test->getBaza($javob);
        //print_r($true);
        //print_r($true);
        if($javob === $true[0]["t_javob"] ){
            $k++;   
        }
        else{
            $l++;
        }
        $i++;
     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The result</title>
    <style>
        #div1{
            border: 2px solid greenyellow;
            width: 45%;
            height: 100px;
            background-color: blue;
            color: #fff;
            text-align: center;
        }
        #div2{
            border: 2px solid greenyellow;
            width: 45%;
            height: 100px;
            background-color: red;
            color: #fff;
            text-align: center;
        }

</style>
</head>
<body>
    <div>
        <div id="div1">
        <h1><?php echo "To'g'ri javoblar ". $k. "-ta"; ?></h1>
        </div><br>
        <div id="div2">
        <h1><?php echo "Noto'g'ri javoblar ". $l. "-ta";?></h1>
        </div>
    </div>
    
</body>
</html>