<template>
    <div id="demo" class="carousel slide" data-ride="carousel" style="width:100%; height:100%; position:absolute;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="width:100%; height: 100%;">
            <div class="carousel-item active">
                <img class="img-responsive" src="https://responsivedesign.is/wp-content/uploads/2016/11/Owl-Carousel-2_ri92wj.jpg" alt="Los Angeles" style="width:100%; height: 100%;">
            </div>
            <div class="carousel-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Alvorada_de_outono_na_Imagem_de_Minas.JPG" alt="Chicago" style="width:100%; height:100%;">
            </div>

            <div class="carousel-item">
                <img class="img-fluid" src="https://responsivedesign.is/wp-content/uploads/2016/11/Owl-Carousel-2_ri92wj.jpg" alt="New york" style="width:100%; height: 100%;">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
