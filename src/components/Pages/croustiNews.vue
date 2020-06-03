<template>
    <div id="newsData">
        <div class="section fp-auto-height fp-section active section-anim fp-completely" data-section="projects-grid" data-anchor="projects-grid" style="height: 627px;">
             <!-- Begin of section wrapper -->
            <div class="section-wrapper fullwidth with-margin">
                <!-- content -->
                <div class="section-content">
                    <!-- project list -->
                    <div class="project-list grid-1 grid-md-2 grid-lg-3 anim">
                        <!-- an item -->
                        <div class="item media media-square text-primary" v-for="news in newsData.slice(0, itemsNumber)">
                            <div class="media-img">
                                <div class="mask"></div>
                                <img :src="news.imag" :alt="news.imgAlt" class="img-block" style="display: none;">
                                <div class="img" :style="{ backgroundImage: 'url(' + news.imag + ')' }" :alt="news.imgAlt"></div>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h2 class="sr-up-td1">{{ formatDate(news.date) }}</h2>
                                    <h2 class="sr-up-td2 display-6 mt-5 mb-5">{{ news.title }}</h2>
                                </a>
                                <div class="desc">
                                    <p class="pSpacer" style="background-color:rgba(218, 218, 218, 0.72);color: #fff;border-radius: 5px;">
                                        {{ news.description }}
                                    </p>
                                </div>
                            </div>

                            <div class="media-footer sr-up-td4" v-if="news.urlType != 'none'">
                                <div class="btns-action sr-up-td3 text-primary">
                                    <a class="btn btn-normal btn-white spaceTop" @click="goToLink(news.urlLink,news.urlType)">
                                        <span class="icon" v-if="news.urlType == 'pdf'"><img src="img/pdf-icone.svg" width="35px"></span>
                                        <span class="text">{{news.urltext}}</span>
                                        <span class="icon" v-if="news.urlType === 'interne' || news.urlType === 'externe'">
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
</template>

<script>
    import moment from "moment";

    export default {
        name: "croustiNews",
        props: ['newsData', 'itemsNumber'],

    methods: {
        afterLoad() {
            console.log('After load')
        },

        formatDate(dateEvent){
            moment.locale('fr');         // fr
            return moment(dateEvent).format('LL');  // Jun 2, 2020 11:44 AM
        },

        goToLink(urlLink, urlType){
            switch(urlType) {
                case 'pdf':
                    window.open(urlLink, '_blank');
                    break;
                case "interne":
                    this.$router.push({ path:urlLink });
                    break;
                case 'externe':
                    window.open(urlLink, "_blank");
                    break;
            }
        }
    }
    }
</script>

<style scoped>

</style>


