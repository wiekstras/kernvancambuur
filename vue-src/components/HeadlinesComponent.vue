<template>
    <h2>Headlines</h2>
    <div style="border: 1;">
        <ul>
            <li v-for="item in headlines" style="list-style: none; margin: inherit;">
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid" :src="item.image" style="width:100%" />
                    </div>
                    <div class="col">
                        <div class="row">
                            {{ item.title }}
                        </div>
                        <div class="row">
                            {{ item.published }}
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>

<style scoped>

.over-ons h2 {
    color:#FAE300!important;
    text-shadow: 0px 1px 2px black;
}
 .over-ons ul {
    padding: 0px;
 }
</style>

<script>
export default{
  data() {
    return {
      headlines: [
        { image: 'https://kernvancambuur.nl/previews/2022/3/25/media_360_621172_w660_h390_crop.jpg', title: 'Nieuwsflits 10', published: '2022-05-03' },
        { image: 'https://kernvancambuur.nl/previews/2022/4/15/media_360_624001_w660_h390_crop.jpg', title: '#VolksclubInActie', published: '2016-04-10' },
        { image: 'https://kernvancambuur.nl/previews/2022/6/3/media_360_629597_w900.jpg', title: '𝐏𝐢𝐞𝐭𝐞𝐫 𝐁𝐨𝐬 ‘𝐊𝐕𝐂 𝐒𝐩𝐞𝐥𝐞𝐫 𝐯𝐚𝐧 𝐡𝐞𝐭 𝐣𝐚𝐚𝐫!’', published: '2022-05-03' },
        { image: 'https://kernvancambuur.nl/previews/2022/5/12/media_360_627055_w660_h390_crop.jpg', title: '17 mei Forumavond in t Hertje!', published: '2022-04-12' }
      ]
    }
  }
  }</script>