<template>
    <div class="relativeContainer">
        <div class="facebook"><a href="https://www.facebook.com/croustillance/" target="_blank" border="0"><img src="img/facebook.svg" width="30px"></a></div>
        <div class="logoTop"><img src="/img/logo-croustillance.svg" width="320px"></div>
    </div>
</template>

<script>
    export default {
        name: "headerPage"
    }
</script>

<style>
    .relativeContainer {
    position: relative;
}

.facebook {
    position: absolute;
    left: 10px;
    top: 10px;
    z-index: 30;
}
.logoTop {
    position:absolute;
    top: 0;
    z-index: 5;
    background: #ffffffb3;
    margin: auto;
    top: 0;
    left: 50%;
    transform: translate(-50%, 0);
    padding: 20px;
}

</style>