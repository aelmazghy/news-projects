<?php include "header.php";

$news = $db->query('SELECT id,datenews,title,description,imag,imgAlt,urltext,urlLink,urlType,vues FROM news');
$news->execute();
$news->setFetchMode(PDO::FETCH_ASSOC);


?>

    <div class="col-md-12">
        <ul class="breadcrumb">
            <li class="">Accueil / créer une actualité</li>
        </ul>
    </div>
    <div id="demonews">
    <div class="col-xs-12 col-lg-8 add-news float-left">
        <div class="card-box">
            <form>
                <div class="form-group">
                    <label for="new-Titre">Titre</label>
                    <input type="text" class="form-control" id="new-Titre" placeholder="Titre new" v-model="title">
                </div>
                <div class="form-group">
                    <label for="new-texte">Texte</label>
                    <textarea class="form-control" id="new-texte" rows="3" v-model="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="new-Image">Image</label>
                    <div class="custom-file">
                        <input type="file" id="imageLoader" @change="updateCanvasImage"/>
                        <label class="custom-file-label" for="imageLoader">Ajouter une image</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="new-texteAlternatif">Texte Alternatif</label>
                    <input type="text" class="form-control" id="new-texteAlternatif" placeholder="Texte Alternatif">
                </div>
                <div class="form-group">
                    <label for="new-typeLink">Type du lien</label>
                    <select class="form-control" id="new-typeLink">
                        <option selected="selected">Aucun</option>
                        <option>Interne</option>
                        <option>Externe</option>
                        <option>PDF</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="new-textLink">Texte du lien</label>
                    <input type="text" class="form-control" id="new-textLink" placeholder="Ex: Découvrir" v-model="urltext">
                </div>
                <div class="form-group">
                    <label for="new-urlLink">URL</label>
                    <input type="text" class="form-control" id="new-urlLink" placeholder="http://croustillance.com/decouvrir">
                </div>

                <div class="text-right">
                    <button type="button" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div><!-- /.card-box -->
    </div>
<div class="col-xs-12 col-lg-4 side-apercu float-right">
    <div class="card-box">



            <div class="section fp-auto-height fp-section active section-anim fp-completely" data-section="projects-grid" data-anchor="projects-grid" style="height: 627px;">
                <!-- Begin of section wrapper -->
                <div class="section-wrapper fullwidth with-margin">
                    <!-- content -->
                    <div class="section-content">

                        <!-- project list -->
                        <div class="project-list grid-1 grid-md-2 grid-lg-3 anim">
                            <!-- an item -->
                            <div class="item media media-square text-primary">
                                <div class="media-img">
                                    <div class="mask"></div>
                                    <img src="" alt="" class="img-block" style="display: none;">
                                    <canvas id="imageCanvas" ref="imageCanvas"></canvas>
                                    <div class="img" alt="news.imgAlt"></div>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h2 class="sr-up-td1">33/33/3333</h2>
                                        <h2 class="sr-up-td2 display-6 mt-5 mb-5">{{ title }}</h2>
                                    </a>
                                    <div class="desc">
                                        <p class="pSpacer" style="background-color:rgba(218, 218, 218, 0.72);color: #fff;border-radius: 5px;">
                                            {{ description }}
                                        </p>
                                    </div>
                                </div>

                                <div class="media-footer sr-up-td4">
                                    <div class="btns-action sr-up-td3 text-primary">
                                        <a class="btn btn-normal btn-white spaceTop">
                                            <span class="icon"><img src="img/pdf-icone.svg" width="35px"></span>
                                            <span class="text">{{urltext}}</span>
                                            <span class="icon">
                                            <span class="arrow-right"></span>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- an item -->
                        </div>
                    </div>
                </div>
                <!-- End of section wrapper -->
            </div>

        </div>

        </div>
    </div><!--end card-box-->
</div>
    <script src="https://unpkg.com/vue-upload-multiple-image@1.0.2/dist/vue-upload-multiple-image.js"></script>
    <!--end sidebar div-->
    <script>
        new Vue({
            el: '#demonews',
            data: {
                title: '',
                description: '',
                urltext: '',
                imag: ''


            },
            methods: {
            updateCanvasImage(e) {

                var self = this;

                var reader, files = e.target.files;

                var reader = new FileReader();

                reader.onload = (e) => {
                    var img = new Image();
                    img.onload = function() {
                        self.drawCanvasImage(img)
                    }
                    img.src = event.target.result;
                };

                reader.readAsDataURL(files[0]);

            },

            drawCanvasImage(img) {
                var canvas = this.$refs.imageCanvas;
                canvas.width = img.width;
                canvas.height = img.height;

                var ctx = canvas.getContext('2d');
                ctx.drawImage(img,0,0);
            }
        }
        })
    </script>
<?php include "footer.php";?>