<template>
  <div class="container">
      <div class="row mt-2 mb-2">
        <div class="col-12">
          <h1 class="m-0 d-flex justify-content-start">Donateurs</h1>
        </div>
      </div>
  </div>
  <div class="container" style="padding: 56px 0px;">
    <div class="row">
      <h1>Lid worden</h1>
      <div class="col-lg-6" style="display: flex; vertical-align: middle; margin: auto;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A tempore dolores laborum aliquid mollitia! Consectetur
        veniam nisi autem natus aspernatur laudantium nulla, voluptatibus repudiandae odit eaque ad, magni debitis earum
        perspiciatis. In enim eveniet velit rerum itaque nemo modi, accusantium reiciendis. Quasi animi consequatur
        incidunt reprehenderit ducimus? Sint, consectetur sapiente! Expedita quidem dignissimos tenetur fuga nam illum
        ex reprehenderit voluptas vel aspernatur harum error, dicta qui deleniti cum fugiat consequatur, maiores a
        cupiditate nobis. Qui nostrum saepe quaerat accusantium minus necessitatibus, cupiditate quod. Necessitatibus
        amet dolorem, neque repellendus ratione explicabo magnam, officia itaque ipsam eius dolores. Accusamus fugit
        dolores sapiente.
      </div>
      <div class="col-lg-6">
        <img class="img-fluid" style="height:325px;"
          src="https://kernvancambuur.nl/previews/2021/5/1/media_360_582885_w900.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid" style="height:325px;"
          src="https://kernvancambuur.nl/previews/2015/8/18/media_360_267036_w900.jpg" />
      </div>
      <div class="col-lg-6" style="display: flex; vertical-align: middle; margin: auto;">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis beatae reprehenderit nobis pariatur natus in,
        nihil, accusantium quo repellendus voluptate doloribus ratione, molestias nesciunt? Porro hic eaque nihil non
        nobis quaerat est reiciendis corporis! Adipisci natus exercitationem molestiae eum. Laboriosam molestias ab
        nulla dolores magni nobis sint, ipsum excepturi quis error quidem, soluta perferendis unde veritatis dicta hic
        in fugiat numquam consectetur obcaecati sunt doloribus odio! Velit aperiam doloremque corporis delectus
        voluptatum autem officiis? Laboriosam a quasi, omnis sunt voluptates architecto est placeat odio, ipsa harum
        quisquam libero reiciendis magni aliquid velit laborum tempora nobis animi labore quas, pariatur vero?
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center mt-2 mb-2">
        <a class="btn" href="/lid-worden/donateur-worden" role="button">Wordt nu donateur!</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h1 class="m-0 d-flex justify-content-start">Vrijwilligers</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6" style="display: flex; vertical-align: middle; margin: auto;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A tempore dolores laborum aliquid mollitia! Consectetur
        veniam nisi autem natus aspernatur laudantium nulla, voluptatibus repudiandae odit eaque ad, magni debitis earum
        perspiciatis. In enim eveniet velit rerum itaque nemo modi, accusantium reiciendis. Quasi animi consequatur
        incidunt reprehenderit ducimus? Sint, consectetur sapiente! Expedita quidem dignissimos tenetur fuga nam illum
        ex reprehenderit voluptas vel aspernatur harum error, dicta qui deleniti cum fugiat consequatur, maiores a
        cupiditate nobis. Qui nostrum saepe quaerat accusantium minus necessitatibus, cupiditate quod. Necessitatibus
        amet dolorem, neque repellendus ratione explicabo magnam, officia itaque ipsam eius dolores. Accusamus fugit
        dolores sapiente.
      </div>
      <div class="col-lg-6">
        <img class="img-fluid" style="height:325px;"
             src="https://kernvancambuur.nl/previews/2021/5/1/media_360_582885_w900.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid" style="height:325px;"
             src="https://kernvancambuur.nl/previews/2015/8/18/media_360_267036_w900.jpg" />
      </div>
      <div class="col-lg-6" style="display: flex; vertical-align: middle; margin: auto;">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis beatae reprehenderit nobis pariatur natus in,
        nihil, accusantium quo repellendus voluptate doloribus ratione, molestias nesciunt? Porro hic eaque nihil non
        nobis quaerat est reiciendis corporis! Adipisci natus exercitationem molestiae eum. Laboriosam molestias ab
        nulla dolores magni nobis sint, ipsum excepturi quis error quidem, soluta perferendis unde veritatis dicta hic
        in fugiat numquam consectetur obcaecati sunt doloribus odio! Velit aperiam doloremque corporis delectus
        voluptatum autem officiis? Laboriosam a quasi, omnis sunt voluptates architecto est placeat odio, ipsa harum
        quisquam libero reiciendis magni aliquid velit laborum tempora nobis animi labore quas, pariatur vero?
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center mt-2 mb-2">
        <a class="btn" href="/lid-worden/vrijwilliger-worden" role="button">Wordt nu vrijwilliger!</a>
      </div>
    </div>
  </div>
  <TheFooter/>
</template>
<script>
import LidWordenForm from './components/VrijwilligerForm.vue';
import TheFooter from "@/components/TheFooter.vue";

export default{
    components: { LidWordenForm, TheFooter }
}
</script>
<style scoped>
.btn {
    background: #FAE300;
}
h1{
  color:#246DB9;
}
</style>
