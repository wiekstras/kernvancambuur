<template>

<div class="over-ons">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="row">
          <h1>Over Kern van Cambuur</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, suscipit labore? Debitis dolorem sint
            quam harum itaque aliquam adipisci. Repellendus veritatis eveniet soluta perspiciatis voluptates at
            explicabo dolor laboriosam ea, repudiandae doloremque veniam mollitia a. Vitae veniam inventore tempore,
            quidem adipisci natus odio at sapiente, expedita totam nesciunt ex et!</p>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <img class="img-fluid" src="https://picsum.photos/id/521/1000">
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur tenetur, sequi repellendus assumenda
            doloribus ipsa cumque. Quo alias autem temporibus minima quae facilis dolores reprehenderit, fuga doloremque
            molestias, totam omnis saepe tempora incidunt praesentium atque. Beatae error natus rerum et. Hic, tempore
            eveniet? Iste delectus mollitia aut suscipit facilis repellat eaque, vero doloribus similique optio labore
            officia, nostrum sequi dolorum assumenda debitis unde voluptatibus sunt ipsa? Praesentium sunt eius
            laboriosam pariatur a beatae cupiditate minus quos commodi, explicabo laudantium nihil provident quia, nemo
            excepturi voluptatibus amet, ducimus illum ad soluta nam! Iure ut, quo at error atque nemo quae veniam.
          </div>
        </div>
      </div>
      <div class="col">
        <HeadlinesComponent />
      </div>
    </div>
  </div>
</div>

  <SupporterComponent/>
  <OnsTeamComponent/>
  <TheFooter/>

</template>
<script>
import OnsTeamComponent from './components/OnsTeamComponent.vue';
import SupporterComponent from '../../components/SupporterComponent.vue';
import HeadlinesComponent from '../../components/HeadlinesComponent.vue';
import TheFooter from '../../components/TheFooter.vue';

export default {
    name: "OverOns",
    components: {OnsTeamComponent,SupporterComponent, HeadlinesComponent, TheFooter }
}
</script>
<style>
.over-ons {
  padding: 56px 0px;
}

.over-ons h1 {
  color:#246DB9;
}

</style>