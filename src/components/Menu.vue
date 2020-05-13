<template>
    <div>
        <div ref="sideNav" class="bm-menu">
            <nav class="bm-item-list">
                <h3 class="topMenu" @click="goHome">Accueil</h3>
                <h3 class="topMenu" @click="goActualites">Actualités</h3>
            </nav>
            <span class="bm-cross-button cross-style" @click="closeMenu" :class="{ hidden: !crossIcon }">
                <v-btn class="mx-2" fab dark small color="#317046">
      <v-icon dark>mdi-close</v-icon>
    </v-btn>
            </span>
        </div>

        <div ref="bmBurgerButton" class="bm-burger-button" @click="openMenu" :class="{ hidden: !burgerIcon }" v-show="!isOpen">
            <v-btn class="mx-2" fab dark large color="#95c01e">
                <v-icon dark>mdi-menu</v-icon>
            </v-btn>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'menubar',
        data() {
            return {
                isSideBarOpen: false,
                openBlock: null
            };
        },
        props: {
            isOpen: {
                type: Boolean,
                required: false
            },
            right: {
                type: Boolean,
                required: false
            },
            width: {
                type: [String],
                required: false,
                default: '300'
            },
            disableEsc: {
                type: Boolean,
                required: false
            },
            noOverlay: {
                type: Boolean,
                required: false
            },
            onStateChange: {
                type: Function,
                required: false
            },
            burgerIcon: {
                type: Boolean,
                required: false,
                default: true
            },
            crossIcon: {
                type: Boolean,
                required: false,
                default: true
            },
            disableOutsideClick: {
                type: Boolean,
                required: false,
                default: true
            }
        },
        methods: {
            goActualites() {
                this.$root.$router.push({name: 'actualites'});
                this.closeMenu();
            },
            goHome() {
                this.$root.$router.push({name: 'home'});
                this.closeMenu();
            },
            openMenu() {
                this.$emit('openMenu');
                this.isSideBarOpen = true;

                if (!this.noOverlay) {
                    document.body.className += 'bm-overlay';
                }
                if (this.right) {
                    this.$refs.sideNav.style.left = 'auto';
                    this.$refs.sideNav.style.right = '0px';
                }
                this.$nextTick(function () {
                    this.$refs.sideNav.style.width = this.width
                        ? this.width + 'px'
                        : '300px';
                });
            },

            closeMenu() {
                this.$emit('closeMenu');
                this.isSideBarOpen = false;
                document.body.className = document.body.className.replace(
                    'bm-overlay',
                    ''
                );
                this.$refs.sideNav.style.width = '0px';
            },

            closeMenuOnEsc(e) {
                e = e || window.event;
                if (e.key === 'Escape' || e.keyCode === 27) {
                    this.closeMenu();
                }
            },
            documentClick(e) {
                let element = this.$refs.bmBurgerButton;
                let target = null;
                if (e && e.target) {
                    target = e.target;
                }

                if (
                    element &&
                    element !== target &&
                    !element.contains(target) &&
                    e.target.className !== 'bm-menu' &&
                    this.isSideBarOpen &&
                    !this.disableOutsideClick
                ) {
                    this.closeMenu();
                }
            }
        },

        mounted() {
            if (!this.disableEsc) {
                document.addEventListener('keyup', this.closeMenuOnEsc);
            }
        },
        created: function () {
            document.addEventListener('click', this.documentClick);
        },
        destroyed: function () {
            document.removeEventListener('keyup', this.closeMenuOnEsc);
            document.removeEventListener('click', this.documentClick);
        },
        watch: {
            isOpen: {
                deep: true,
                immediate: true,
                handler(newValue, oldValue) {
                    this.$nextTick(() => {
                        if (!oldValue && newValue) {
                            this.openMenu();
                        }
                        if (oldValue && !newValue) {
                            this.closeMenu();
                        }
                    });
                }
            },
            right: {
                deep: true,
                immediate: true,
                handler(oldValue, newValue) {
                    if (oldValue) {
                        this.$nextTick(() => {
                            this.$refs.sideNav.style.left = 'auto';
                            this.$refs.sideNav.style.right = '0px';


                            document.querySelector('.bm-menu').style.left = 'auto';
                            document.querySelector('.bm-menu').style.right = '0px';
                            document.querySelector('.cross-style').style.right = '230px';
                        });
                    }
                    if (newValue) {
                        if (
                            this.$refs.bmBurgerButton.hasAttribute('style')
                        ) {
                            this.$refs.bmBurgerButton.removeAttribute('style');
                            this.$refs.sideNav.style.right = 'auto';
                            document
                                .querySelector('.bm-burger-button')
                                .removeAttribute('style');
                            document.getElementById('sideNav').style.right = 'auto';
                            document.querySelector('.cross-style').style.right = '0px';
                        }
                    }
                }
            }
        }
    };
</script>

<style>
    html {
        height: 100%;
    }

    .bm-burger-button {
        position: fixed;
        right: 36px;
        top: 36px;
        z-index:10;
    }

    .bm-burger-button.hidden {
        display: none;
    }

    .bm-burger-bars {
        background-color: #373a47;
    }

    .line-style {
        position: absolute;
        height: 20%;
        left: 0;
        right: 0;
    }

    .cross-style {
        position: absolute;
        top: 12px;
        left: 6px;
        cursor: pointer;
    }

    .bm-cross {
        background: #bdc3c7;
    }

    .bm-cross-button {
    }

    .bm-cross-button.hidden {
        display: none;
    }

    .bm-menu {
        height: 100%; /* 100% Full-height */
        width: 0; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 1000; /* Stay on top */
        top: 0;
        left: 0;
        background-color: rgb(63, 63, 65); /* Black*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 60px; /* Place content 60px from the top */
        transition: 0.5s; /*0.5 second transition effect to slide in the sidenav*/
    }

    .bm-overlay {
        background: rgba(0, 0, 0, 0.3);
    }

    .bm-item-list {
        color: #b8b7ad;
        margin-left: 10%;
        font-size: 20px;
        margin-top: 10px;
    }

    .bm-item-list > * {
        text-decoration: none;
        padding: 0.3em;
    }

    .bm-item-list > * > span {
        margin-left: 10px;
        font-weight: 700;
        cursor: pointer;
    }

    .card {
        transition: all 0.5s;

    }

    .card-enter, .card-leave-to
        /* .card-leave-active for <2.1.8 */
    {
        opacity: 0;
        transform: translateX(50px) scaleY(1);

    }

    .card-enter-to {
        opacity: 1;
        transform: translateX(0) scaleY(1);

    }

    .card-leave-active {
        /*position: absolute;*/
    }

    .card-move {
        opacity: 1;
        transition: all 0.5s;
    }

    .menuItem {
        display: flex;
        flex-direction: column;
        font-family: 'Nunito', sans-serif;
        font-size: 25px;
        color: #317046;
    }
</style>

