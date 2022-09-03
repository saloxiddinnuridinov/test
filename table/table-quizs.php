<?php
     require ("com/test.php"); 
     $quiz = new Test();
     $name = $quiz->getTest();

?>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span>this is all tests</span></h1>
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
                                            <th>Savol</th>
                                            <th>To'g'ri javob</th>
                                            <th>Noto'g'ri javob 1</th>
                                            <th>Noto'g'ri javob 2</th>
                                            <th>Noto'g'ri javob 3</th>
                                            <th><span>Delete\Edit</span></th>
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
                                                <?=$baza["savol"]?>
                                            </td>
                                            <td>
                                                <?=$baza["t_javob"]?>
                                            </td>
                                            <td>
                                                <?=$baza["n_javob"]?>
                                            </td>
                                            <td>
                                                <?=$baza["n_javob2"]?>
                                            </td>
                                            <td>
                                                <?=$baza["n_javob3"]?>
                                            </td>
                                            <td>
                                                <div class="icon-container"><span class="ti-trash"><a href="edit&delete/delete.php?id=<?=$baza["id"]?>">Delete</a></span></div>
                                                <div class="icon-container"><span class="ti-pencil"><a href="view-edit-test.php?id=<?=$baza["id"]?>">edit</a></span></div>
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