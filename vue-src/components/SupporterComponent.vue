<template lang="">
  <!-- Onze supporters start -->
  <div class="onze-supporters">
    <div class="container">
    <h2> Onze supporters</h2>
  <carousel :items-to-show="4" :wrapAround="true" :autoplay="5000">
    <slide v-for="slide in supporters" :key="slide">
      <img class="img-fluid" :src="slide.image"/>
    </slide>



    <template #addons>
      <navigation />
    </template>
  </carousel>
  </div>
  </div>
  
  <!-- Onze supporters end -->
</template>
<script>

import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';

export default {
  name: 'App',
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
  data(){
    return{
      supporters: [
        {image: './vue-src/assets/Supporters/s1.jpg'},
        {image:  './vue-src/assets/Supporters/s2.jpg'},
        {image:  './vue-src/assets/Supporters/s3.jpg'},
        {image:  './vue-src/assets/Supporters/s4.jpg'},
        {image:  './vue-src/assets/Supporters/s5.jpg'},
        {image:  './vue-src/assets/Supporters/s6.jpg'}
      ]
    }
  }
};

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}

</script>
<style>

.onze-supporters {
    padding: 40px 0px;
    background-color: #F8F8F8;
}

.onze-supporters h2 {
  font-size:39px;
  margin-bottom: 35px;
  text-align: center;
}

.carousel__slide {
  margin: 0px 11px;
}

.slide img {
  width: 80%;
  height: auto;
}

.agile__nav-button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

.agile__nav-button--next {
  right: 0px;
}
</style>
