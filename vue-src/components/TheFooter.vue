<template>
<!-- Footer -->
<footer class="text-center text-lg-start" style="margin-top:5%">
  <!-- Section: Social media -->
    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact gegevens
          </h6>
          <p class="mb-0">
           Postbus 1286
          </p>
          <p class="m-0">8900 CG Leeuwarden</p>

          <p class="mb-0 mt-4">
           ING NL37 INGB 0001 3005 12
          </p>
          <p class="m-0">T.N.V SCS Kern van Cambuur</p>
        </div>
        <!-- Grid column -->

        

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Links
          </h6>
          <p>
            <a href="/" class="text-reset">Home</a>
          </p>
          <p>
            <a href="/over-ons" class="text-reset">KVC</a>
          </p>
          <p>
            <a href="/Sfeeracties" class="text-reset">Sfeeracties</a>
          </p>
           <p>
            <a href="/Nieuws" class="text-reset">Nieuws</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Benader ons via
          </h6>
          <div class="row">
            <div class="col-md-3">
              <p>
                <a href="https://twitter.com/KernVanCambuur" target="_blank" class="text-reset"><img src="vue-src/assets/twitter.png" alt=""></a>
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <a href="https://www.facebook.com/KernVanCambuur" target="_blank" class="text-reset"><img src="vue-src/assets/facebook.png" alt=""></a>
              </p>
            </div>
            <div class="col-md-3">
             <p>
              <a href="mailto:info@kernvancambuur.nl" class="text-reset"><img src="vue-src/assets/email.png" alt=""></a>
              </p>
            </div>
          </div>
          
        
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <a href="/lid-worden/vrijwilliger-worden"><button type="button"  class="btn btn-outline-primary">Word lid</button></a><br><br>
          <a href="/lid-worden/donateur-worden"><button type="button"  class="btn btn-outline-secondary">Steun ons</button></a>
          
        </div>
      </div>
    </div>
  </section>


  <!-- Copyright -->
  <div style="border-top:1px solid" class="text-center p-4">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="">Kern van Cambuur</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>
footer {
  background-color:#F8F8F8;
}

footer .btn-outline-secondary {
  background-color:#246DB9;
}

footer .btn-outline-primary {
  background-color:#FAE300;
  color:#246DB9;
}

footer a:hover {
  text-decoration: underline!important;
  color:#000 !important;
}




</style>
