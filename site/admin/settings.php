<?php include "header.php"; ?>

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="">Accueil / paramètres</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="card-box">
                        <form>
                            <div class="form-group">
                                <label for="website-name">Nom du site</label>
                                <input type="text" class="form-control" id="website-name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="description-site">Description</label>
                                <textarea class="form-control" id="description-site" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </form>
                    </div><!-- /.card-box -->
                </div>
                <!--end sidebar div-->

<?php include "footer.php";?>