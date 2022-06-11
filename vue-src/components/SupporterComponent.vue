<template lang="">
  <!-- Onze supporters start -->
  <div class="container onze-supporters" style="text-align: center;">
    <h1> Onze supporters</h1>
  <carousel :items-to-show="4" :wrapAround="true" :autoplay="5000">
    <slide v-for="slide in supporters" :key="slide">
      <img :src="slide.image"/>
    </slide>

    <template #addons>
      <navigation />
    </template>
  </carousel>
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
        {image: 'https://picsum.photos/id/521/200'},
        {image: 'https://picsum.photos/id/321/200'},
        {image: 'https://picsum.photos/id/127/200'},
        {image: 'https://picsum.photos/id/123/200'},
        {image: 'https://picsum.photos/id/291/200'},
        {image: 'https://picsum.photos/id/316/200'}
      ]
    }
  }
};
</script>
<style>
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
