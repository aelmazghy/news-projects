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
                                <div class="mask opacity-8"></div>
                                <img class="img img-block" :src="news.img" alt="An image" style="background-repeat: no-repeat; background-position: center center; background-size: cover;">
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h5 class="sr-up-td1">{{ news.date }}</h5>
                                    <h2 class="sr-up-td2">{{ news.title }}</h2>
                                </a>
                                <div class="desc">
                                    <p class="pSpacer" style="background-color: rgba(0, 0, 0, 0.5);">
                                        Pour vos fêtes et banquets, en famille ou entre amis, Croustillance vous propose
                                        un large choix de menus pour faire pétiller les papilles de vos invités.
                                    </p>
                                </div>
                            </div>
                            <div class="media-footer sr-up-td4">
                                <a class="btn btn-underline btn-primary" href="#">
                                    <span class="text">Details...</span>
                                </a>
                                <a class="btn btn-underline btn-primary" href="#">
                                    <span class="text">PDF</span>
                                </a>
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
    export default {
        props:['newsData', 'itemsNumber'],
        name: "croustiNews"
    }
</script>

<style scoped>

</style>


