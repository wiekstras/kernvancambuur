<template>

  <div class="over-ons">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8">
          <div class="row">
            <h1>Wat doet SCS Kern van Cambuur?</h1>
            <p><b>Naast de verwezenlijking van de algemene doelen, zoals het behartigen van de belangen van supporters,
                het
                bewaken van de clubcultuur en het behoud van betaald voetbal in Leeuwarden in algemene zin en
                informeren,
                doet de Kern van Cambuur nog heel wat meer. Een overzicht:</b></p>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <b>De Kern van Cambuur</b>
              <ul>
                <li>beheert het eigen supportershome ’t Hertje</li>
                <li>beheert alle kiosken in het stadion, waaronder de bierkiosken</li>
                <li>geeft het supportersmagazine 't Hertsje uit (4 of 5 x per seizoen)</li>
                <li>verkoopt programmaboekjes</li>
                <li>is een belangrijke gesprekspartner voor de SC Cambuur BVO, de Raad van Commissarissen, de gemeente,
                  de
                  politie en de KNVB</li>
                <li>ondersteunt de BVO tijdens Open Dagen en de 1e training</li>
                <li>draait mee in de Commissie Stadionverboden (CSC) en denkt mee over veiligheidszaken</li>
                <li>zamelt oud papier in</li>
                <li>strijdt voor een transparant en rechtvaardig supportersbeleid</li>
              </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              Daarnaast organiseert de Kern van Cambuur tal van activiteiten, zoals bijvoorbeeld:
              <ul>
                <li>sfeeracties door Sfeerteam KVC</li>
                <li>forumavonden</li>
                <li>en nog veel meer</li>
              </ul>
              En.... De Kern van Cambuur genereert geld voor een financiële afdracht aan SC Cambuur BVO. 80% van de
              eigen opbrengsten draagt ze af aan SC Cambuur. In totaal is gedurende ons ruim 56-jarig bestaan al meer
              dan € 3.000.000,00 afgedragen aan de BVO. Hiermee is SCS Kern van Cambuur de grootste "sponsor" van SC
              Cambuur!
            </div>
          </div>
        </div>
        <div class="col">
          <HeadlinesComponent />
        </div>
      </div>
    </div>
  </div>

  <SupporterComponent />
  <OnsTeamComponent />

  <div class="container">
    <h1>Organisatie en commissies</h1>
<b>De Kern van Cambuur kent een aantal commissies die een grote mate van zelfstandigheid hebben. Iedere commissie maakt per seizoen een plan van aanpak, waarin vermeld staat wat de commissie in dat seizoen wil realiseren. Dit plan bevat ook een financiële paragraaf, die wordt getoetst door het bestuur. Op deze manier zorgt het bestuur ervoor dat er op een transparante, verantwoorde en efficiënte manier wordt gewerkt en het donateursgeld verantwoord wordt besteed.
</b><br><br>
Dit zijn de commissies: <br>

<b>Sfeerteam KVC is opgericht medio 2015 en in de plaats gekomen van Ultras Leovardia, wat in 2003 opgericht is.
</b><br>
De Kern van Cambuur verzorgt dus al met al inmiddels 16 jaar lang diverse sfeer-/tifoacties bij thuiswedstrijden in ons eigen Cambuurstadion.

Tot onze beschikking hebben we niet alleen vele gele en blauwe vlaggen, spandoeken en publieksdoeken, maar ook rookmachines, CO2 jets, stadiumshots en stroboscopen en sinds januari 2014 het grote 50 meter lange megadoek met compleet takelsysteem.

<br> Sfeeracties kosten veel geld, vooral ook dit seizoen in de Eredivisie. U kunt een donatie doen op IBAN NL37INGB0001300512 t.n.v. SCS Kern van Cambuur o.v.v. Sfeeracties KVC


<br> Geel-blauwe groet! <br>
<br>
Sfeerteam KVC <br>

 

<br><b>Horeca </b><br>

De Commissie Horeca regelt alle zaken die te maken hebben met supportershome 't Hertsje en de kiosken in het stadion. Denk aan zaken als inkoop en voorraadbeheer.
<br>
<br> <b>Redactie magazine 't Hertsje</b> <br>

Vier maal per seizoen komt magazine 't Hertsje uit met boeiende verhalen over spelers, de geschiedenis van Cambuur, scherpe columns, actuele onderwerpen die te maken hebben met Cambuur en zijn supporters en met verslagen en reportages van evenementen die zijn geweest. Ieder lid krijgt het blad gratis. 
  </div>

</template>
<script>
import OnsTeamComponent from './components/OnsTeamComponent.vue';
import SupporterComponent from '../../components/SupporterComponent.vue';
import HeadlinesComponent from '../../components/HeadlinesComponent.vue';

export default {
  name: "OverOns",
  components: { OnsTeamComponent, SupporterComponent, HeadlinesComponent }
}
</script>
<style>
.over-ons {
  padding: 56px 0px;
}

.over-ons h1 {
  color: #246DB9;
}
</style>