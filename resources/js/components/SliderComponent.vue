<template>
    <div class="container-fluid slider-container">
        <div class="ism-slider" data-play_type="loop" id="market-slider">
            <ol>
                <li>
                <img src="image/slides/city-691279_1280.jpg">
                <div class="ism-caption ism-caption-0">My slide caption text</div>
                </li>
                <li>
                <img src="image/slides/sky-690293_1280.jpg">
                <div class="ism-caption ism-caption-0">My slide caption text</div>
                </li>
                <li>
                <img src="image/slides/golden-gate-bridge-388917_1280.jpg">
                <div class="ism-caption ism-caption-0">My slide caption text</div>
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
