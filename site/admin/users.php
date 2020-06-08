<?php include "header.php"; ?>

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="">Accueil / liste administateurs</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="card-box">
                        <form method="POST" action="" accept-charset="UTF-8">
                            <div class="row">
                                <div class="box-tools form-group form-action m-b-30">
                                    <div class="col-sm-4">
                                        <select class="form-control" name="action">
                                            <option value="" selected="selected">Supprimer</option>
                                        </select>
                                    </div>
                                    <input class="btn btn-light delete-btn" type="submit" value="Appliquer">
                                    <div class="col text-right">
                                        <button type="button" class="btn btn-success ajouter-btn"><i class="fas fa-plus-square"></i>Ajouter</button>
                                    </div>
                                </div>
                            </div>
                            <table id="newsTable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 1px;">
                                        <input id="CbSelectAll" type="checkbox" data-toggle="tooltip" data-placement="top" title="" data-original-title="test test">
                                    </th>
                                    <th>#ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Mail</th>
                                    <th>Password</th>
                                    <th>Avatar</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="row-1">
                                    <td class="text-center">
                                        <input class="check-all" name="checkboxes[]" type="checkbox" value="1">
                                    </td>
                                    <td>1</td>
                                    <td>Abdess</td>
                                    <td>test</td>
                                    <td>test@gmail.com</td>
                                    <td>123123123123123-crypt</td>
                                    <td>ddd.png</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-xs">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger delete-btn btn-xs">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><!--end tr // end table line-->
                                <tr id="row-2">
                                    <td class="text-center">
                                        <input class="check-all" name="checkboxes[]" type="checkbox" value="1">
                                    </td>
                                    <td>2</td>
                                    <td>Ali</td>
                                    <td>test</td>
                                    <td>test@gmail.com</td>
                                    <td>123123123123123-crypt</td>
                                    <td>ddd.png</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-xs">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger delete-btn btn-xs">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr><!--end tr // end table line-->
                                </tbody>
                            </table>

                        </form>
                        <div class="text-center"></div>
                    </div><!-- /.card-box -->
                </div>
                <!--end sidebar div-->
<?php include "footer.php";?>