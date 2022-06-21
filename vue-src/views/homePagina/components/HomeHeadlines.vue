<template>
  <div class="headlines">
    <div class="container"> 
        <h2 class="text-center mb-4">Headlines</h2>
        <div class="row">
        <div v-for="item in headlines" class="col-md-3">
            <img class="img-fluid" style="max-width:200px; min-height:200px" :src="item.image"/>
            <p class="mt-3 yellow">{{ item.published }}</p>
            <h4>{{ item.title }}</h4>
            <p class="text-white">{{ item.text }}</p>
            <a href="">Lees verder </a>
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
  font-size:39px;
}

.headlines img {
    border-radius: 50%;
}

.headlines p.yellow {
    color:#FAE300;
    text-shadow: 0px 1px 2px black;
}

.headlines a {
    color:#FAE300;
    text-shadow: 0px 1px 2px black;
}

@media only screen and (max-width: 767px) {
   .headlines {
    text-align: center;
  }

  .headlines.col-md-3{
        margin-bottom: 50px!important;
  }
}
 

</style>

<script>
export default{
  data() {
    return {
      headlines: [
        { image: 'https://kernvancambuur.nl/previews/2022/3/25/media_360_621172_w660_h390_crop.jpg', title: 'Nieuwsflits 10', published: '2022-05-03', text: 'Het is weer tijd voor een Nieuwsflits!' },
        { image: 'https://kernvancambuur.nl/previews/2022/4/15/media_360_624001_w660_h390_crop.jpg', title: '#VolksclubInActie', published: '2016-04-10', text:'De komende week zijn de twee containers achter Noord nog toegankelijk van 10-20.00 uur om goederen in te leveren!' },
        { image: 'https://kernvancambuur.nl/previews/2022/6/3/media_360_629597_w900.jpg', title: '𝐏𝐢𝐞𝐭𝐞𝐫 𝐁𝐨𝐬 ‘𝐊𝐕𝐂 𝐒𝐩𝐞𝐥𝐞𝐫 𝐯𝐚𝐧 𝐡𝐞𝐭 𝐣𝐚𝐚𝐫!’', published: '2022-05-03', text: 'Pieter, die onlangs zijn carrière moest beëindigen, eindigde boven Roberts Uldrikis (2e) en Mees Hoedemakers (3e). ' },
        { image: 'https://kernvancambuur.nl/previews/2022/5/12/media_360_627055_w660_h390_crop.jpg', title: '17 mei Forumavond in t Hertje!', published: '2022-04-12', text: 'Gasten: Gerald van den Belt' }
      ]
    }
  }
  }</script>