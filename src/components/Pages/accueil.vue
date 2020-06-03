<template>
    <div>
        <full-page :options="options" id="fullpage" ref="fullpage">
            <div class="section " id="section0">
                <video id="myVideo" loop muted data-autoplay>
                    <source src="/videos/traiteur-croustillance.mp4" type="video/mp4">
                    <source src="/videos/traiteur-croustillance.webm" type="video/webm">
                </video>
                <div class="layer">
                    <img src="/img/logo-croustillance.svg" class="image-home"><br>
                </div>
                <div class="goDown">
                    <v-icon size="60" color="#2c6730"
                            @click="$vuetify.goTo('#welcome',{ duration:1000, offset:0, easing:'easeInOutCubic'})">
                        mdi-chevron-down
                    </v-icon>
                </div>
            </div>
        </full-page>
        <div class="backgroundGreen" id="welcome">
            <div class="media-row">
                <div class="row backgroundGreen">
                    <crousti-news :itemsNumber="3" :newsData="$store.state.news"></crousti-news>
                </div>
            </div>
        </div>
        <footer-page> </footer-page>
    </div>
</template>

<script>
    import * as easings from 'vuetify/es5/services/goto/easing-patterns'
    import FooterPage from './footerPage'
    import croustiNews from './croustiNews'

    export default {
        name: "accueil",
        components : {
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
                    fitToSection: false

                },
                easings: Object.keys(easings)
            };
        },
        created() {
            document.getElementsByTagName('meta')["description"].content = "Croustillance, traiteur dans les Vosges, accompagne tous vos événements : mariages, cocktails, buffets, menus chauds, plateaux-repas et animations culinaires.";
            document.title = "Croustillance, traiteur et créateur de saveurs dans les Vosges";
        }
    }
</script>

<style>
    .LinkText {
        text-decoration: underline;
    }

    .AccueilP {
        text-align: left;
        padding-bottom: 15px;
    }

    .alignLeft {
        text-align: left;
    }

    .h1Accueil {
        font-family: 'Montserrat', sans-serif;
        font-size:50px;
    }

    .goDown {
        position: absolute;
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        z-index: 10;
        background: #ffffff7a;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .titreAccueil {
        color: #2c6730;
        font-family: 'Nunito', sans-serif;
        font-size: 25px;
    }

    .backgroundGreen {
        background: #95c01e;
        margin-right: 0px !important;
        margin-left: 0px !important;

    }

    .section {
        text-align: center;
        overflow: hidden;
    }

    #myVideo {
        position: absolute;
        right: 0;
        bottom: 0;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-size: 100% 100%;
        background-color: #95c01e; /* in case the video doesn't fit the whole page*/
        background-image: /* our video */;
        background-position: center center;
        background-size: contain;
        object-fit: cover; /*cover video background */
        z-index: 3;
    }

    /* Layer with position absolute in order to have it over the video
    * --------------------------------------- */
    #section0 .layer {
        position: absolute;
        z-index: 4;
        width: 100%;
        left: 0;
        transform: translateY(-50%);
        /*
        * Preventing flicker on some browsers
        * See http://stackoverflow.com/a/36671466/1081396  or issue #183
        */
        background-color: #ffffff7a;
        padding-top: 20px;
        padding-bottom: 10px;
    }

    /*solves problem with overflowing video in Mac with Chrome */
    #section0 {
        overflow: hidden;
    }

    /* Bottom menu
    * --------------------------------------- */
    #infoMenu li a {
        color: #fff;
    }

    /* Hiding video controls
    * See: https://css-tricks.com/custom-controls-in-html5-video-full-screen/
    * --------------------------------------- */
    video::-webkit-media-controls {
        display: none !important;
    }

    .image-home {
        width: 100%;
        max-width: 400px;
    }

    /*!
 * fullPage 3.0.7
 * https://github.com/alvarotrigo/fullPage.js
 *
 * @license GPLv3 for open source use only
 * or Fullpage Commercial License for commercial use
 * http://alvarotrigo.com/fullPage/pricing/
 *
 * Copyright (C) 2018 http://alvarotrigo.com/fullPage - A project by Alvaro Trigo
 */
    html.fp-enabled,
    .fp-enabled body {
        margin: 0;
        padding: 0;
        overflow: hidden;

        /*Avoid flicker on slides transitions for mobile phones #336 */
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .fp-section {
        position: relative;
        -webkit-box-sizing: border-box; /* Safari<=5 Android<=3 */
        -moz-box-sizing: border-box; /* <=28 */
        box-sizing: border-box;
    }

    .fp-slide {
        float: left;
    }

    .fp-slide, .fp-slidesContainer {
        height: 100%;
        display: block;
    }

    .fp-slides {
        z-index: 1;
        height: 100%;
        overflow: hidden;
        position: relative;
        -webkit-transition: all 0.3s ease-out; /* Safari<=6 Android<=4.3 */
        transition: all 0.3s ease-out;
    }

    .fp-section.fp-table, .fp-slide.fp-table {
        display: table;
        table-layout: fixed;
        width: 100%;
    }

    .fp-tableCell {
        display: table-cell;
        vertical-align: middle;
        width: 100%;
        height: 100%;
    }

    .fp-slidesContainer {
        float: left;
        position: relative;
    }

    .fp-controlArrow {
        -webkit-user-select: none; /* webkit (safari, chrome) browsers */
        -moz-user-select: none; /* mozilla browsers */
        -khtml-user-select: none; /* webkit (konqueror) browsers */
        -ms-user-select: none; /* IE10+ */
        position: absolute;
        z-index: 4;
        top: 50%;
        cursor: pointer;
        width: 0;
        height: 0;
        border-style: solid;
        margin-top: -38px;
        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .fp-controlArrow.fp-prev {
        left: 15px;
        width: 0;
        border-width: 20px 30px 20px 0;
        border-color: transparent white transparent transparent;
    }

    .fp-controlArrow.fp-next {
        right: 15px;
        border-width: 20px 0 20px 30px;
        border-color: transparent transparent transparent white;
    }

    .fp-scrollable {
        overflow: hidden;
        position: relative;
    }

    .fp-scroller {
        overflow: hidden;
    }

    .iScrollIndicator {
        border: 0 !important;
    }

    .fp-notransition {
        -webkit-transition: none !important;
        transition: none !important;
    }

    #fp-nav {
        position: fixed;
        z-index: 100;
        margin-top: -32px;
        top: 50%;
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
    }

    #fp-nav.fp-right {
        right: 17px;
    }

    #fp-nav.fp-left {
        left: 17px;
    }

    .fp-slidesNav {
        position: absolute;
        z-index: 4;
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        left: 0 !important;
        right: 0;
        margin: 0 auto !important;
    }

    .fp-slidesNav.fp-bottom {
        bottom: 17px;
    }

    .fp-slidesNav.fp-top {
        top: 17px;
    }

    #fp-nav ul,
    .fp-slidesNav ul {
        margin: 0;
        padding: 0;
    }

    #fp-nav ul li,
    .fp-slidesNav ul li {
        display: block;
        width: 14px;
        height: 13px;
        margin: 7px;
        position: relative;
    }

    .fp-slidesNav ul li {
        display: inline-block;
    }

    #fp-nav ul li a,
    .fp-slidesNav ul li a {
        display: block;
        position: relative;
        z-index: 1;
        width: 100%;
        height: 100%;
        cursor: pointer;
        text-decoration: none;
    }

    #fp-nav ul li a.active span,
    .fp-slidesNav ul li a.active span,
    #fp-nav ul li:hover a.active span,
    .fp-slidesNav ul li:hover a.active span {
        height: 12px;
        width: 12px;
        margin: -6px 0 0 -6px;
        border-radius: 100%;
    }

    #fp-nav ul li a span,
    .fp-slidesNav ul li a span {
        border-radius: 50%;
        position: absolute;
        z-index: 1;
        height: 4px;
        width: 4px;
        border: 0;
        background: #333;
        left: 50%;
        top: 50%;
        margin: -2px 0 0 -2px;
        -webkit-transition: all 0.1s ease-in-out;
        -moz-transition: all 0.1s ease-in-out;
        -o-transition: all 0.1s ease-in-out;
        transition: all 0.1s ease-in-out;
    }

    #fp-nav ul li:hover a span,
    .fp-slidesNav ul li:hover a span {
        width: 10px;
        height: 10px;
        margin: -5px 0px 0px -5px;
    }

    #fp-nav ul li .fp-tooltip {
        position: absolute;
        top: -2px;
        color: #fff;
        font-size: 14px;
        font-family: arial, helvetica, sans-serif;
        white-space: nowrap;
        max-width: 220px;
        overflow: hidden;
        display: block;
        opacity: 0;
        width: 0;
        cursor: pointer;
    }

    #fp-nav ul li:hover .fp-tooltip,
    #fp-nav.fp-show-active a.active + .fp-tooltip {
        -webkit-transition: opacity 0.2s ease-in;
        transition: opacity 0.2s ease-in;
        width: auto;
        opacity: 1;
    }

    #fp-nav ul li .fp-tooltip.fp-right {
        right: 20px;
    }

    #fp-nav ul li .fp-tooltip.fp-left {
        left: 20px;
    }

    .fp-auto-height.fp-section,
    .fp-auto-height .fp-slide,
    .fp-auto-height .fp-tableCell {
        height: auto !important;
    }

    .fp-responsive .fp-auto-height-responsive.fp-section,
    .fp-responsive .fp-auto-height-responsive .fp-slide,
    .fp-responsive .fp-auto-height-responsive .fp-tableCell {
        height: auto !important;
    }

    /*Only display content to screen readers*/
    .fp-sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }
    .pSpacer {
        padding: 0px 10px;
    }
</style>