<template>
  <div class="bg-image" style="padding-bottom: 5%; border-bottom: 3px solid #FAE300;">
    <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-7">
            <div class="social">
            <a href="tel:0582152499"><img src="../assets/phone.png"><span>058-2152499</span></a>
            <a href="https://goo.gl/maps/kSjGCx21Tx3HaVXy5" target="_blank"><img class="loc" src="../assets/location.png"> <span>Hanckemastins 37, 8925 EC Leeuwarden</span></a>
            <a href="mailto:info@kernvancambuur.nl"><img class="email" src="../assets/email.png"><span>info@kernvancambuur.nl</span></a>
          </div>
        </div>
        <div class="search col-md-3 col-5">
          <div class="expSearchBox">
            <div class="expSearchFrom">
              <form action="/Zoek" role="search" class="" method="get">
                <input id="field" type="text" value="" required name="strZoekterm" placeholder="" />
                  <div class="close">
                    <span class="front"></span>
                    <span class="back"></span>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <div class="hamburger">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <img src="../assets/square.png">
          </button>
        </div>

            <ul class="navbar-nav ul-one mx-auto">
            <a href="/"><img class="logo" src="../assets/logo-kvc.png"></a>
            <a href="/"><img class="logo_text" src="../assets/text-version.png"></a>
          </ul>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ul-one">
            <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="/over-ons">Kern van cambuur</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Sfeeracties">Sfeeracties</a>
              </li>
          </ul>
        
          <ul class="login navbar-nav ul-two ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/Lid-worden">Lid worden</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/lid-worden/vrijwilliger-worden">Vrijwilliger</a></li>
                    <li><a class="dropdown-item" href="/lid-worden/donateur-worden">Donateur</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Contact">Contact</a>
            </li>
              <!-- <li class="nav-item">
              <a class="nav-link" href="/Wedstrijden">Wedstrijden</a>
            </li> -->
          <li class="nav-item">
            <a class="nav-link" href="/Nieuws">Nieuws</a>
          </li>
        </ul>
      
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="htext">
      <div class="row">
        <div class="col-lg-8 col-md-7">
           <h2>Supportvereniging</h2>
           <h1>SCS Kern van Cambuur</h1>
        </div>
        <div class="col-lg-4 col-md-5 mt-4 text-center buttons">
           <a href="/lid-worden/vrijwilliger-worden"><button type="button"  class="btn btn-outline-primary">Word lid</button></a>
           <a href="/lid-worden/donateur-worden"><button type="button"  class="btn btn-outline-secondary">Steun ons</button></a>
        </div>
      </div>
    </div>
  </div>
</div>

</template>

<script>
export default {
    name: "Navbar",
}
</script>

<style>
/* General */
a {
  text-decoration: none !important;;
}
a:hover {
  text-decoration: underline!important;
  color:#ffffff!important;
}
.container {
    margin-bottom:0%!important;
}
/* Background img */
.bg-image {
  min-height: 390px;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
  position: inherit;
}
/* TopBar */
.topbar {
 padding: 13px 0px;
}
.search {
  text-align: right;
}
.social {
  margin-top:9px;
}
.social span {
  color: #fff;
  margin-left: 10px;
  text-shadow: 0px 1px 2px black;
  font-size: 14px;
}
.social img {
  width:20px;
  padding: 10px 0px;
  margin-left: 10px;
}
/* Navbar */
nav {
  border-top: 3px solid #FAE300;
  border-bottom: 3px solid #246DB9;
}
.navbar-collapse {
  z-index: 1;
}
nav .logo {
    position: absolute;
    top: 2px;
    left: 50%;
    margin-left: -160px;
    width: 325px;
    height: 225px;
    cursor: pointer;
}
.navbar-toggler {
  padding:0px !important;
}
.navbar-toggler:focus {
  box-shadow:none!important;
}
nav .navbar-nav .nav-link {
    font-weight: 500;
    font-size: 16px;
    margin: 0px 2px;
    color:#ffffff;
    text-shadow:0px 1px 2px black;
}
/* Search button */
.expSearchFrom {
    border: 3px solid #246DB9;
    border-radius: 20px;
    display: inline-block;
    height: 34px;
    position: relative;
    margin-top: 8px;
}
.expSearchBox input#field {
    cursor: pointer;
    border: none;
    background: transparent;
    height: 30px;
    width: 0px;
    line-height: 0px;
    vertical-align: top;
    padding: 0px 15px;
    -webkit-transition: width .5s; /* Safari */
    transition: width .5s;
    position: relative;
    z-index: 2;
    color: #000;
}
.expSearchBox input#field:focus {
    width: 100px;
    outline: none;
    font-size: 12px;
    margin-right: 30px;
}
.expSearchBox .close {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 1px;
    right: 0px;
    -webkit-transition: .2s ease-in-out;
    -moz-transition: .2s ease-in-out;
    -o-transition: .2s ease-in-out;
    transition: .2s ease-in-out;
    cursor: pointer;
    z-index: 1;
}
.expSearchBox span {
    background: #246DB9 none repeat scroll 0 0;
    border-radius: 3px;
    display: block;
    height: 4px;
    position: absolute;
    right: -7px;
    top: 30px;
    width: 14px;
    -webkit-transition: .2s .5s ease-in-out;
    -moz-transition: .2s .5s ease-in-out;
    -o-transition: .2s .5s ease-in-out;
    transition: .2s .5s ease-in-out;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
}
.expSearchBox .back {
    top: 12px;
    right: 5px;
    opacity: 0;
}
.expSearchBox input#field:focus + .close span {
    top: 12px;
    right: 5px;
}
.expSearchBox input#field:focus + .close span.back {
    -webkit-transition: .5s .7s ease-in-out;
    -moz-transition: .5s .7s ease-in-out;
    -o-transition: .5s .7s ease-in-out;
    transition: .5s .7s ease-in-out;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
    opacity: 1;
}
/* Heading text + buttons */
.htext {
  color:#fff;
  padding-top:58px;
}
.htext h2 {
  color:#FAE300!important;
  text-shadow: 0px 1px 2px black;
}
.htext h1 {
  text-shadow: 0px 1px 2px black;
}
.btn {
  border-radius: 1px;
  text-transform: uppercase;
  padding: 5px 21px;
  font-size:20px;
}
.btn-outline-primary {
    margin-right: 20px;
    color: #fff;
    border-color: #FAE300;
}
.btn-outline-secondary {
    color: #ffffff;
    border-color: #246DB9;
}
.btn-outline-secondary:hover {
    color: #000;
    background-color: #246DB9;
}
.btn-outline-primary:hover {
    background-color: #FAE300;
    color: #000;
}
/* Media queries */
@media only screen and (max-width: 992px) {
 .social span {
  display:none;
 }
 .loc, .email {
  margin-left:21px!important;
 }
  .logo {
    display:none;
  }
 .logo_text {
  display: block !important;
 }
}
@media only screen and (max-width: 17000px) {
   .logo_text {
    display:none;
  }
}
@media only screen and (max-width: 767px) {
  nav .logo {
      margin-left: -133px;
      width: 270px;
      height: 176px; 
  }
  .htext {
    padding-top:29px;
    text-align: center;
  }
  .htext .buttons {
    margin-top:13px!important;
  }
}
</style>