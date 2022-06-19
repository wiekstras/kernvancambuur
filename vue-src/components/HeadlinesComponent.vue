<template>
    <h2>Headlines</h2>
    <div style="border: 1;">
        <ul>
            <li v-for="item in headlines" style="list-style: none; margin: inherit;">
                <div class="row">
                    <div class="col-3">
                        <img :src="item.image" style="width:100%" />
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
        { image: 'https://picsum.photos/id/145/200', title: 'Cambuur toch nog linkerrijtje!', published: '2016-04-10' },
        { image: 'https://picsum.photos/id/421/200', title: 'Cambuur mazzel met puntje tegen SCH', published: '2016-04-10' },
        { image: 'https://picsum.photos/id/123/200', title: 'Cambuur in gevaarzone', published: '2016-04-10' },
        { image: 'https://picsum.photos/id/512/200', title: 'Donateurs gezocht', published: '2016-04-10' }
      ]
    }
  }
  }</script>