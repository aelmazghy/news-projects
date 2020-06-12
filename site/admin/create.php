<?php include "header.php";



?>

    <div class="col-md-12">
        <ul class="breadcrumb">
            <li class="">Accueil / créer une actualité</li>
        </ul>
    </div>
    <div id="demonews">
        <div class="col-xs-12 col-lg-6 add-news float-left">

            <form>
                <div class="card-box">
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
                            <input type="file" class="form-control" id="imageLoader" @change="updateCanvasImage"/>
                            <label class="custom-file-label" for="imageLoader">Ajouter une image</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new-texteAlternatif">Texte Alternatif Image</label>
                        <input type="text" class="form-control" id="new-texteAlternatif" placeholder="Texte Alternatif">
                    </div>
                    <div class="form-group">
                        <label>Date de publication</label>
                        <div class='input-group date'>

                            <b-form-datepicker class="form-control" id="news-datepicker"
                                               v-model="datenew"
                                               locale="fr"
                                               placeholder="Sélectionner une date"
                            >
                            </b-form-datepicker>

                        </div>
                    </div>

                </div><!-- /.card-box -->
                <div class="card-box">
                    <div class="form-group">
                        <label for="new-typeLink">Type du lien</label>
                        <select class="form-control" id="new-typeLink" v-model="typeLinkSelected">
                            <option
                                    v-for="typelink in typeLinks"
                                    :value="typelink"
                                    :key="typelink.id">
                                {{ typelink.name }}
                            </option>
                        </select>
                    </div>
                    <div class="hasLink" v-if="typeLinkSelected.name != 'Aucun'">
                        <div class="form-group">
                            <label for="new-textLink">Texte du lien</label>
                            <input type="text" class="form-control" id="new-textLink" placeholder="Ex: Découvrir" v-model="urltext">
                        </div>
                        <div class="form-group">
                            <div class="haspdf" v-if="typeLinkSelected.name === 'PDF'">
                            <label for="new-urlLink">Fichier PDF</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file"  class="custom-file-input" id="inputGroupFile03"
                                   onchange="if(
                                               document.getElementById('inputGroupFile').value)document.getElementById('custom-file-label').innerHTML=document.getElementById('inputGroupFile').value;
                                           else document.getElementById('custom-file-label').innerHTML='Ajouter un PDF'" >

                                    <label class="custom-file-label" for="inputGroupFile03" id="custom-file-label">Ajouter un PDF</label>
                                </div>
                            </div>
                                {{checkfile && checkfile.name}}
                            </div>
                            <div class="has-url-link" v-if="typeLinkSelected.name === 'Interne' || typeLinkSelected.name === 'Externe'">
                            <label for="new-urlLink">URL</label>
                            <input v-if="typeLinkSelected.name === 'Externe' || typeLinkSelected.name === 'PDF'" type="text" class="form-control" id="new-urlLink" placeholder="http://croustillance.com/decouvrir">

                            <select v-if="typeLinkSelected.name === 'Interne'" class="form-control" id="new-urlLink">
                                <option
                                        v-for="internalLink in internalLinks"
                                        :value="internalLink">
                                    {{ internalLink.path }}
                                </option>
                            </select>
                        </div>
                    </div>

                </div><!-- /.card-box -->
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-lg-6 side-apercu float-right">
            <div class="card-box">
                <div class="section fp-auto-height fp-section active section-anim fp-completely" data-section="projects-grid" data-anchor="projects-grid">
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
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h2 class="sr-up-td1">{{ formatDate(datenew) }}</h2>
                                            <h2 class="sr-up-td2 display-6 mt-3 mb-3">{{ title }}</h2>
                                        </a>
                                        <div class="desc">
                                            <p class="pSpacer" style="background-color:rgba(218, 218, 218, 0.72);color: #fff;border-radius: 5px;">
                                                {{ description }}
                                            </p>
                                        </div>
                                    </div>


                                    <div class="media-footer sr-up-td4" v-if="typeLinkSelected.name != 'Aucun'">
                                        <div class="btns-action sr-up-td3 text-primary" >
                                            <a class="btn btn-normal btn-white spaceTop">
                                                <span class="icon" v-if="typeLinkSelected.name == 'PDF'"><img src="img/pdf-icone.svg" width="35px"></span>
                                                <span class="text">{{urltext}}</span>
                                                <span class="icon" v-if="typeLinkSelected.name === 'Interne' || typeLinkSelected.name === 'Externe'"><span class="arrow-right"></span></span>
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
    </div>
<style>



</style>
    <script src="https://unpkg.com/vue-upload-multiple-image@1.0.2/dist/vue-upload-multiple-image.js"></script>
    <!--end sidebar div-->
    <script>



        new Vue({
            el: '#demonews',
            data: {
                datenew: '12 juin 2020',
                title: '',
                description: '',
                urltext: '',
                imag: '',
                checkfile: '',



                typeLinks: [
                    {name: 'Aucun', id: 1},
                    {name: 'Interne', id: 2},
                    {name: 'Externe', id: 3},
                    {name: 'PDF', id: 4}
                ],
                typeLinkSelected: 1,

                internalLinks: [
                    { path: '/' },
                    { path: '/buffet-traiteur' },
                    { path: '/buffet-entreprise' },
                    { path: '/cocktail-professionnels' },
                    { path: '/cocktail-particuliers' },
                    { path: '/contact' },
                    { path: '/equipe' },
                    { path: '/esprit' },
                    { path: '/location-materiel-traiteur' },
                    { path: '/evenements-entreprises' },
                    { path: '/traiteur-mariage' },
                    { path: '/pause-dejeuner' },
                    { path: '/portage-repas' },
                    { path: '/repas-particuliers' },
                    { path: '/repas-professionnels' },
                    { path: '/label-vosges-terroir' },
                    { path: '/actualites' },
                    { path: '/plateaux-repas-entreprise' }

                ],

            },
            created: function() {
                this.typeLinkSelected = this.typeLinks.find(i => i.id === this.typeLinkSelected);

            },
            methods: {
                status(validation) {
                    return {
                        error: validation.$error,
                        dirty: validation.$dirty
                    }
                },
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
                },
                formatDate(datenew){
                    moment.locale('fr');
                    return moment(datenew).format('ll');
                }
            } // end methods


        })
    </script>
<?php include "footer.php";?>