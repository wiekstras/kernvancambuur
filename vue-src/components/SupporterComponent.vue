<template lang="">
  <!-- Onze supporters start -->
  <div class="container onze-supporters" style="text-align: center;">
    <h1> Onze supporters</h1>
    <agile :slidesToShow="4" :centerMode="true" :dots="false">
      <div class="slide">
        <img src="https://picsum.photos/id/237/200">
      </div>

      <div class="slide">
        <img src="https://picsum.photos/id/231/200">
      </div>

      <div class="slide">
        <img src="https://picsum.photos/id/230/200">
      </div>

      <div class="slide">
        <img src="https://picsum.photos/id/232/200">
      </div>

    </agile>
  </div>
  <!-- Onze supporters end -->
</template>
<script>
import { VueAgile } from 'vue-agile'

export default {
      components: {
    agile: VueAgile
  },
    
}
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
