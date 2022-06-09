<template>
    <h1>Headlines</h1>
    <div class="container" style="border: 1;">
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