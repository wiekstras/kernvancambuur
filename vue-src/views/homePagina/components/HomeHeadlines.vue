<template>
    <div class="headlines">
    <div class="container"> 
        <h2 class="text-center mb-4">Headlines</h2>
        <div class="row">
        <div v-for="item in headlines" class="col-md-3">
            <img :src="item.image"/>
            <p class="mt-3 yellow">{{ item.published }}</p>
            <h4>{{ item.title }}</h4>
            <p>{{ item.text }}</p>
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
        { image: 'https://picsum.photos/id/145/200', title: 'Cambuur toch nog linkerrijtje!', published: '2016-04-10', text: "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem." },
        { image: 'https://picsum.photos/id/421/200', title: 'Cambuur mazzel met puntje tegen SCH', published: '2016-04-10', text: "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem." },
        { image: 'https://picsum.photos/id/123/200', title: 'Cambuur in gevaarzone', published: '2016-04-10', text: "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem." },
        { image: 'https://picsum.photos/id/512/200', title: 'Donateurs gezocht', published: '2016-04-10', text:"Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem." }
      ]
    }
  }
  }</script>