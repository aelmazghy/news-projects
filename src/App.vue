<template>
    <v-app>
        <component is="bubble" :right="true">

        </component>
        <main id="page-wrap">
            <transition name="page" mode="out-in">
                <router-view></router-view>
            </transition>
        </main>
    </v-app>
</template>

<script>
    import slide from './components/Menu/slide';
    import bubble from './components/Menu/bubble';
    import elastic from './components/Menu/elastic';
    import falldown from './components/Menu/fallDown';
    import push from './components/Menu/push';
    import pushrotate from './components/Menu/pushRotate';
    import reveal from './components/Menu/reveal';
    import scaledown from './components/Menu/scaleDown';
    import scalerotate from './components/Menu/scaleRotate';
    import stack from './components/Menu/stack';


    export default {
        name: 'App',
        components: {
            slide,
            bubble,
            elastic,
            push,
            pushrotate,
            scaledown,
            scalerotate,
            reveal,
            stack,
            falldown
        },
        data() {
            return {
                menus: {
                    slide: {buttonText: 'Slide'},
                    push: {buttonText: 'Push'},
                    pushRotate: {buttonText: 'Push Rotate'},
                    reveal: {buttonText: 'Reveal'},
                    scaleDown: {buttonText: 'Scale Down'},
                    scaleRotate: {buttonText: 'Scale Rotate'},
                    bubble: {buttonText: 'Bubble'},
                    fallDown: {buttonText: 'Fall Down'}
                },
                side: 'left',
                currentMenu: 'slide'
            };
        },
        methods: {
            changeMenu(menu) {
                this.currentMenu = menu.replace(/ +/g, '').toLowerCase();
                return this.currentMenu;
            },
            changeSide(side) {
                this.side = side;
            }
        },
        created: function () {

        }
    };
</script>

<style lang="less">
    *,
    *:after,
    *:before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    html {
        height: 100%;
    }

    body {
        color: #fffce1;
        font-family: 'Raleway', Arial, sans-serif;
        margin: 0px;
        overflow: hidden;

    }

    #app {
        height: 100%;

    }

    a {
        color: #4e4a46;
        text-decoration: none;

        &:hover,
        &:focus {
            color: #c94e50;
        }
    }

    main {
        height: 100%;
        text-align: center;
        background: #f5f5f5;
        overflow: auto;
    }

    h1 {
        font-weight: 800;
        font-size: 3.75em;
    }

    .description {
        max-width: 20em;
        margin: 1.2em auto 1em;
        line-height: 1.3em;
        font-weight: 400;
    }

    .demo-buttons {
        font-size: 1em;
        max-width: 1200px;
        margin: 2em auto 3em;
        padding: 0 10em;

        a {
            display: inline-block;
            margin: 0.75em;
            padding: 1.35em 1.1em;
            width: 15em;
            background: #fffce1;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 800;
            border-top-left-radius: 20px 50px;
            border-top-right-radius: 20px 50px;
            border-bottom-right-radius: 20px 50px;
            border-bottom-left-radius: 20px 50px;
            cursor: pointer;

            &.currentDemo {
                background: #c94e50;
                color: #fffce1;
            }
        }
    }

    .sideButton {
        display: inline-block;
        width: 5em;
        height: 2.5em;
        line-height: 2.5em;
        cursor: pointer;
        background: #fffce1;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.8em;
        font-weight: 800;

        &.left {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        &.right {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        &.active {
            background: #c94e50;
            color: #fffce1;
        }
    }

    @media screen and (max-width: 40em) {
        main {
            font-size: 80%;
        }

        h1 {
            padding-top: 1em;
            font-size: 2.5em;
        }

        .demo-buttons {
            max-width: 900px;
            padding: 0 2em;
        }
    }

    //
    // Burger menu custom styles
    //
    .bm-burger-button {
        position: fixed;
        right: 36px;
        top: 36px;
    }

    @media screen and (max-width: 400px) {
        .bm-burger-button {
            right: 10px;
            top: 20px;
        }
        .TitleBottom  h1 {
            font-size:25px;
            margin-right:5px;
        }
    }
    @media screen and (min-width: 401px) {
        .TitleBottom  h1 {
            margin-right:50px;
        }
    }


    .right .bm-burger-button {
        right: initial;
        right: 36px;
    }

    .bm-burger-bars {
        background: #373a47;
    }

    .bm-morph-shape {
        fill: #373a47;
    }

    .bm-menu {
        background: #95c01e;

        a {
            color: #b8b7ad;

            &:hover,
            &:focus {
                color: #c94e50;
            }
        }
    }

    //
    // Mixins
    //
    .menu-1 {
        .bm-cross {
            background: #bdc3c7;
        }

        .bm-menu {
            padding: 2.5em 1.5em 0;
            font-size: 1.15em;
        }
    }

    .menu-2 {
        .bm-cross {
            background: #999;
        }

        .bm-menu {
            padding: 3.4em 1em 0;
        }

        a {
            padding: 1em;
        }

        i {
            font-size: 1.7em;
            vertical-align: middle;
            color: #282a35;
        }
    }

    .menu-3 {
        .bm-cross {
            background: #888;
        }

        .bm-menu {
            padding: 2em 1em;
            font-size: 1.15em;
        }

        i {
            opacity: 0.5;
        }

        span {
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.75em;
        }
    }

    .menu-4 {
        .bm-cross {
            background: #888;
        }

        h2 {
            margin: 0 auto;
            padding: 2em 1em;
            color: rgba(0, 0, 0, 0.4);
            box-shadow: inset 0 -1px rgba(0, 0, 0, 0.2);

            i {
                margin-left: 0.2em;
            }

            span {
                font-size: 1.6em;
                font-weight: 700;
            }
        }

        a {
            padding: 1em;
            text-transform: uppercase;
            transition: background 0.3s, box-shadow 0.3s;
            box-shadow: inset 0 -1px rgba(0, 0, 0, 0.2);

            span {
                letter-spacing: 1px;
                font-weight: 400;
            }

            &:hover,
            &:focus {
                background: rgba(0, 0, 0, 0.2);
                box-shadow: inset 0 -1px rgba(0, 0, 0, 0);
                color: #b8b7ad;
            }
        }
    }

    .page-enter-active, .page-leave-active {
        transition: opacity 0.3s, transform 0.3s;
    }

    .page-enter, .page-leave-to {
        opacity: 0;
        transform: translateY(-30%);
    }

    .app-style {
        background-color: #dfdfd0;
    }

    .topMenu {
        margin: 0px;
        padding: 0px;
        color: white;
        font-family: 'Nunito', sans-serif;
        font-size: 30px;
        cursor: pointer;
    }

    .topMenuBlock {
        margin-top: 15px;
    }

    .menuLink {
        padding: 2px;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
    }

    .v-application--wrap {
        background: #e5db1a;
    }

    #app {
        height: 100vh; /* Fallback for browsers that do not support Custom Properties */
        height: calc(var(--vh, 1vh) * 100);
    }
</style>
