<?php 
require("com/test.php");
$test = new Test();
$tests = $test->getTest();

$arr = [
   "t_javob", "n_javob", "n_javob2", "n_javob3"
];
?>
<!DOCTYPE html>
<html>
   <head> 
      <title>Test Saloxiddin</title>
      <link rel="stylesheet" type="text/css" href="css/style-test.css"/>
   </head>
   <body >
      <form action="answer.php" method="post">
         <?php
            $i = 0;
            foreach ($tests as $savol) {
               $i++;
               shuffle($arr);
              
         ?>
         <div class="scp-quizzes-main">
            <div class="scp-quizzes-data">
               <h3><?=$i?>-savol?</h3>
                  <h2><pre>
                     <?=$savol["savol"]?>
                  </pre></h2>
                  <br/>
                  <input id="r1<?=$i?>" type="radio" name="question<?=$i?>" value="<?=$savol[$arr[0]]?>" >
                     <label for="r1<?=$i?>"><?=$savol[$arr[0]]?></label><br/>
                  <input id="r2<?=$i?>" type="radio" name="question<?=$i?>" value="<?=$savol[$arr[1]]?>" >
                     <label for="r2<?=$i?>"><?=$savol[$arr[1]]?></label><br/>
                  <input id="r3<?=$i?>" type="radio" name="question<?=$i?>" value="<?=$savol[$arr[2]]?>" >
                     <label for="r3<?=$i?>"><?=$savol[$arr[2]]?></label> <br/>
                  <input id="r4<?=$i?>" type="radio" name="question<?=$i?>" value="<?=$savol[$arr[3]]?>" >
                     <label for="r4<?=$i?>""><?=$savol[$arr[3]]?></label> 
            </div>
         </div>
         <?php
          }
         ?>
         <button class="kirish" type="submit" name="ok">Submit </button>
      </form>

   </body>
</html>