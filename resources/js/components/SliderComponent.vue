<template>
    <div class="container-fluid slider-container">
        <div class="ism-slider" data-play_type="loop" id="market-slider">
            <ol>
                <li>
                <img src="image/slides/baner-3.jpg">
                <!--<div class="ism-caption ism-caption-0">My slide caption text</div>-->
                </li>
                <li>
                <img src="image/slides/baner-4.jpg">
                <!--<div class="ism-caption ism-caption-0">My slide caption text</div>-->
                </li>
                <li>
                <img src="image/slides/baner-3.jpg">
                <!--<div class="ism-caption ism-caption-0">My slide caption text</div>-->
                </li>
            </ol>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component slider mounted.')
        }
    }
</script>
