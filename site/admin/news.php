<?php include "header.php";

$news = $db->query('SELECT id,datenews,title,description,imag,imgAlt,urltext,urlLink,urlType,vues FROM news');
$news->execute();
$news->setFetchMode(PDO::FETCH_ASSOC);


?>

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="">Accueil / actualités</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="card-box">
                        <form method="POST" action="" accept-charset="UTF-8">
                            <div class="row">
                                <div class="box-tools form-group form-action m-b-30">
                                    <div class="col-sm-4">
                                        <select class="form-control" name="action">
                                            <option value="" selected="selected">Unpublish</option>
                                            <option value="">Mettre à la corbeille</option>
                                        </select>
                                    </div>
                                    <input class="btn btn-light delete-btn" type="submit" value="Appliquer">
                                    <div class="col text-right">
                                        <a href="create.php" class="btn btn-success ajouter-btn" ><i class="fas fa-plus-square"></i>Ajouter</a>
                                    </div>
                                </div>
                            </div>
                            <table id="newsTable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 1px;">
                                        <input id="CbSelectAll" type="checkbox">
                                    </th>
                                    <th>#ID</th>
                                    <th>Titre</th>
                                    <th>Date</th>
                                    <th>New</th>
                                    <th>Vues</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($news->fetchAll() as $key => $news) {
                                    echo '                                                                                             
                                <tr id="row-1">
                                    <td class="text-center">
                                        <input class="check-all" name="checkboxes[]" type="checkbox" value="1">
                                    </td>
                                    <td>'. $news["id"].'</td>
                                    <td>'. $news["title"].'</td>
                                    <td>'. $news["datenews"].'</td>
                                    <td>'. $news["description"].'</td>
                                    <td>'. $news["vues"].'</td>
                                    <td class="td-btn">
                                        <a href="#" class="btn btn-info btn-xs">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger delete-btn btn-xs">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><!--end tr // end table line-->
                                  ';
                                }
                                ?>
                                </tbody>
                            </table>

                        </form>
                        <div class="text-center"></div>
                    </div><!-- /.card-box -->
                </div>
                <!--end sidebar div-->


<?php include "footer.php";?>