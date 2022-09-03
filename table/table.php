<?php
    require ("com/test.php");
    $studentName = new Test();
    $name = $studentName->setNameStudent();

?>

<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
<section id="main-content">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title pr">
                                    <h4>All Expense</h4>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table student-data-table m-t-20">
                                            <thead>
                                                <tr>
                                                    <th>#No</th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
        <?php
            $i = 0;
            foreach ($name as $baza){
               $i++;
        ?>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?=$i?>
                                                    </td>
                                                    <td>
                                                        <?=$baza["id"]?>
                                                    </td>
                                                    <td>
                                                        <?=$baza["name"]?>
                                                    </td>
                                                    <td>
                                                        <?=$baza["email"]?>
                                                    </td>
                                                    <td>
                                                        10/05/2017
                                                    </td>
                                                </tr>
                                                
                                                </tr>
                                            </tbody>
        <?php
            }
        ?>                           
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

</section>