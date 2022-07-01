<template v-if="this.loaded">
  <div class="headlines">
    <div class="container">
      <h2 class="text-center mb-4">Headlines</h2>
      <div class="row">
        <div v-for="(nieuws, index) in nieuwsberichtenData.slice(0, 4)" class="col-md-3">
          <img class="img-fluid" style="max-width:200px; min-height:200px" :src="nieuws.news_image_path" />
          <p class="mt-3 yellow">{{ nieuws.id }}</p>
          <h4 v-html="nieuws.news_text_stripped"></h4>
          <p class="text-white" style="  white-space: nowrap;  overflow: hidden;  text-overflow: ellipsis;  max-width: 200px;" v-html="nieuws.news_text_stripped"></p>
          <router-link :to="`/nieuws-berichten/${nieuws.id}`">Lees meer</router-link>
        </div>
      </div>
    </div>
  </div>  
</template>

<style>
.headlines {
  padding: 44px 0px 100px 0px;
}

.headlines h2 {
  font-size: 39px;
}

.headlines img {
  border-radius: 50%;
}

.headlines p.yellow {
  color: #FAE300;
  text-shadow: 0px 1px 2px black;
}

.headlines a{
  color: #FAE300;
  text-shadow: 0px 1px 2px black;
}

@media only screen and (max-width: 767px) {
  .headlines{
    text-align: center;
  }
  .headlines p{
max-width: unset !important;;
  }

  .headlines.col-md-3 {
    margin-bottom: 50px !important;
  }
}
</style>

<script>
export default {
  data() {
    return {
      nieuwsberichtenData: [{}],
      loaded: false,
    }
  },
  async created() {
    this.nieuwsberichtenData = (await this.axios.get('/v1/office/news')).data
    this.loaded = true;
    console.log(this.nieuwsberichtenData);
  },
}</script>