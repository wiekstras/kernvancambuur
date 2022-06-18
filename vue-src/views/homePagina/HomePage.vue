<template>
  <div class="cbg">
    <div class="tblock">
      <div class="container">
        <div class="dblock">
         <div class="row">

          <div class="col-md-4">
            <div class="block">
                <div class="content">
                 <h4>Word lid</h4>
                  <p class="text-white px-4 mt-3">De Kern van Cambuur behartigt de belangen van SC Cambuur-supporters die het stadion bezoeken, donateurs in het bijzonder...</p>
                 <button type="button" class="btn btn-outline-primary">Lees meer</button>
              </div>
            </div>
            
          </div>

          <div class="col-md-4">
            <div class="block">
                <div class="content">
                 <h4>Sfeerteam KVC</h4>
                <p class="text-white px-4 mt-3">Sfeerteam KVC zorgt voor sfeeracties en draagt in het algeheel bij aan het fanatieke en dus sfeer rondom de wedstrijden...</p>
                 <button type="button" class="btn btn-outline-primary">Lees meer</button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="block">
              <div class="content">
                <h4>Supporters magazine</h4>
                <p class="text-white px-4 mt-3">De Kern van Cambuur behartigt de belangen van SC Cambuur-supporters die het stadion bezoeken, donateurs in het bijzonder...</p>
                <button type="button" class="btn btn-outline-primary">Lees meer</button>
              </div>
            </div>
            
          </div>
        
        </div>
     </div>
    </div>
  </div>
</div>

<div class="box"></div>
    <div class="container">
        <div class="papier_block">
          <div class="row">
            <div class="col-md-6">
                <h2 class="mt-5"> Oud papier ophalen </h2>
                <p class="mt-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</p>
                <button type="button" class="btn btn-outline-primary mt-2">Meer informatie</button>
            </div>
            <div class="col-md-6 text-end">
                <img class="papier" src="/vue-src/assets/papier.jpg" alt="">
            </div>  
         </div>
      </div>
    </div> 
    <div class="box2">
    <div class="container support">
      <div class="row text-center">
        <div class="col-md-4">
          <h3>Support ons!</h3>
        </div>
        <div class="col-md-4 ">
          <img src="/vue-src/assets/text-version.png" alt="">
        </div>
        <div class="col-md-4">
         <a href=""><h3 class="yellow lid">Word lid</h3></a>
        </div>
     </div>
  </div>
</div>

<div class="partners">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Onze Partners</h2>
                <p>Een organisatie met ruim 125 vrijwilligers vraagt om een duidelijke structuur.<br>Daarom heeft de Kern van Cambuur een bestuur en kent daarnaast een aantal commissies.</p>
            </div>
            <div class="row">
              <div class="col-md-3">
              <img src="/vue-src/assets/partners/kidsclub.jpg" alt="">
            </div>
            <div class="col-md-3">
              <img src="/vue-src/assets/partners/supporterscollectie.jpg" alt="">
            </div>
            <div class="col-md-3">
              <img src="/vue-src/assets/partners/vanDijk.jpg" alt="">
            </div>
            <div class="col-md-3">
              <img src="/vue-src/assets/partners/adnoise.jpg" alt="">
            </div>
          </div>
        </div>
    </div>
  </div>
 <HomeHeadlines />
 <TheFooter/>
</template>


<script>

  import HomeHeadlines from './components/HomeHeadlines.vue';
  import TheFooter from '../../components/TheFooter.vue';

  export default {
      name: "HomePage",
      components: {HomeHeadlines,TheFooter}
  }


</script>

<style scoped>
.cbg {
    /* background: #00245a url("../vue-src/assets/body.png") no-repeat 50% 0%;
      background-repeat: no-repeat;
    background-size: cover; */
}

.yellow {
    color:#FAE300;
}

.blue {
     color: #246DB9;
}

.tblock {
    padding:56px 0px;
    text-align: center;   
}

.block {
    background:url("../vue-src/assets/body-bg.jpg");
    background-repeat: no-repeat;
    background-position: -442px;
    height: 220px;
    border: 3px solid #FAE300;
    border-radius:5px;
    background-color: #C8C8C8;
}

.block .btn {
    border:none;
}
.block .content {
    padding: 25px 0px;
    color: #246DB9;
}

.block .btn-outline-primary {
    margin:0px;
    text-decoration: underline;
}

.block h4 {
 color: #FAE300;
}

.block .btn-outline-primary:hover {
    border-radius: 4px;
}

.box {
  margin-top: 94px;
  padding: 34px 20px; 
  border-top: 1px solid;
  -webkit-transform: skewY(-2.47deg);
  -moz-transform: skewY(-2.47deg);
  -ms-transform: skewY(-2.47deg);
  -o-transform: skewY(-2.47deg);
  transform: skewY(-2.47deg);
}

.papier_block .btn-outline-primary {
    color: #246DB9;
    border-color: #246DB9;
}

 .papier_block .papier {
    width:100%;
    height:332px;
}

.box2 {
  background:url("../vue-src/assets/kvc-img.jpg");
  padding: 72px 0px;
  background-position: -2px 220px;
  background-size: cover;
  margin-top: 48px;
  height: 222px;
  margin-bottom: 70px;
  -webkit-transform: skewY(2.47deg);
  -moz-transform: skewY(2.47deg);
  -ms-transform: skewY(2.47deg);
  -o-transform: skewY(2.47deg);
  transform: skewY(2.47deg);
}

.box3 {
  margin-top: 94px;
  padding: 34px 20px; 
  border-top: 1px solid;
  -webkit-transform: skewY(-2deg);
  -moz-transform: skewY(-2deg);
  -ms-transform: skewY(-2deg);
  -o-transform: skewY(-2deg);
  transform: skewY(-2deg);
}

.support h3  {
 font-size:35px;
}

.support .lid {
    text-decoration: underline;
}

.support .lid:hover {
   color:#ffffff;
}

.partners {
    padding: 56px 0px 77px 0px;
    background-color: #F8F8F8;
}

.partners img {
    vertical-align: middle;
    width: 253px;
    height: 261px;
    border: 2px solid #FAE300;
    object-fit: cover;
    border-radius: 7px;
}

.partners h2 {
  font-size: 39px;
}

@media only screen and (max-width: 767px) {
  .box {
    padding:0px;
  }

  .papier_block button {
    margin-bottom:20px;
  }

  .box2 {
    transform:inherit;
    background-position: 0px;
  }

  .box2 img {
    display: none;
  }

  footer .btn-outline-primary {
    margin-right: 0px!important;
  }
}
</style>
