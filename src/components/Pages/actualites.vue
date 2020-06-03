<template>

    <div>
        <header-page></header-page>
        <full-page :options="options" id="fullpage">
            <div class="section" id="section0">
                <div class="slide" id="actu">
                </div>
            </div>
            <div class="TitleBottom"><a
                    @click="$vuetify.goTo('#welcome',{ duration:1000, offset:0, easing:'easeInOutCubic'})">
                <h1>
                    <v-icon :size="screenwidth" color="white">mdi-chevron-down</v-icon>
                    Les actualités
                </h1>
            </a></div>
        </full-page>
        <div>
            <div class="backgroundGreen" id="welcome">
                <div class="media-row">
                    <div class="row backgroundGreen">
                        <crousti-news :itemsNumber="18" :newsData="$store.state.news"></crousti-news>
                    </div>
                </div>
            </div>

        </div>
        <footer-page> </footer-page>
    </div>

</template>

<script>
    import HeaderPage from './headerPage'
    import FooterPage from './footerPage'
    import croustiNews from './croustiNews'

    export default {
        name: 'actualites',
        components: {
            HeaderPage,
            FooterPage,
            croustiNews

        },
        data() {
            return {
                options: {
                    licenseKey: 'A32C7F42-F0FE4A04-AAB7E182-AB1F9C8B',
                    navigation: false,
                    scrollBar: true,
                    autoScrolling: false,
                    fitToSection: false,
                },
            }
        },
        methods: {
            afterLoad() {
                console.log('After load')
            },
        },
        computed: {
            screenwidth() {
                if (screen.width > 400) {
                    return 70
                } else {
                    return 30
                }
            }
        }
    }
</script>

<style>
    #actu {
        background: url('/img/actualites/coucou-du-chef.jpg') no-repeat center center;
        padding: 0 0 0 0;
        background-size: cover;
    }
</style>