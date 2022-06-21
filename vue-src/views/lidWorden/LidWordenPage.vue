<template>
  <div class="container">
  </div>
  <div class="container lid" style="padding: 56px 0px;">
    <div class="row">
      <h1 class="">Lid worden</h1>
      <div class="col-lg-6">
        <p>De Kern van Cambuur behartigt de belangen van SC Cambuur-supporters die het stadion bezoeken, donateurs in
          het bijzonder. Het minimale bedrag van het donateurschap is slechts €15,00 per seizoen. Dat mag toch eigenlijk
          geen belemmering zijn om lid te worden? Want er zijn veel redenen om je aan te melden als donateur.</p>

        <p>Ten eerste steun je met je donatie indirect SC Cambuur en het betaalde voetbal in Leeuwarden. Daarnaast
          ondersteun je met je bijdrage vele nuttige activiteiten.</p>

        <p>De activiteiten van de Kern van Cambuur zouden niet kunnen bestaan zonder de financiële bijdragen van onze
          sponsors en donateurs. De vele giften, uit de collectes, omzet, de donateurschappen en (incidentele)
          sponsoring stelt de Kern van Cambuur in staat om de hele boel draaiende te houden.</p>
        <p>Denk hierbij aan ’t Hertje, de kiosken en de sfeeracties.</p>

        <p>De Kern van Cambuur is trots op het uitgebreide donateurenbestand die de Stichting jaar in jaar uit blijven
          steunen! Op deze groep trouwe donateurs gaan we als Kern van Cambuur weer een jaarlijks beroep doen door de
          automatische incasso uit te gaan voeren, waartoe zij de Kern van Cambuur gemachtigd hebben. Het gaat hier om
          een bedrag van minimaal €15,- op het bankrekeningnummer dat destijds bij de machtiging is opgegeven.
          Tussentijds lid worden kan natuurlijk ook.</p>
      </div>
      <div class="col-lg-6">
        <p>Hiervoor krijg je terug:</p>
        <ul>
          <li>4x per jaar dit blad ’t Hertsje</li>
          <li>Korting op uitwedstrijden</li>
          <li>U helpt mee sfeeracties zoals “Cambuur to the bone” met vuurwerk, spandoeken, zwaaivlaggen en stadiumshots
            te bekostigen
          </li>
          <li>Supporterszaken worden behartigd</li>
          <li>Programmaboekjes en de open dag wordt (mede) bekostigd</li>
          <li>Supportershoreca</li>
          <li>We praten mee over de wensen en behoeftes van de supporters over het nieuwe stadion</li>
          <li>Je helpt mee met gezamelijke acties zoals "Cambuur komt eraan!"</li>
          <li>Officiële gesprekspartner BVO SC Cambuur</li>
          <li>Vele extra's </li>
          <li>Bovendien help je met je bijdrage mee dat vrijwilligers van de Kern van Cambuur de supportershoreca
            waaronder supportershome ’t Hertje en de kiosken in het stadion draaiende houden en deelnemen in het
            veiligheidsoverleg.
          </li>
        </ul>
        <p>
          Word daarom nu donateur!

          Het seizoen loopt voor de Kern van Cambuur van 1 augustus tot en met 31 juli van het daaropvolgende jaar.

          Het doorgeven van eventuele wijziging van uw gegevens kun je hier doorgeven via het contactformulier.

          𝓑𝓮𝓭𝓪𝓷𝓴𝓽!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center mt-2 mb-2">
        <a class="btn mt-4" href="/lid-worden/donateur-worden" role="button">Word donateur</a>
      </div>
    </div>
  </div>
  <SupporterComponentVue />
  <div class="container lid" style="padding: 56px 0px;">
    <div class="row">
      <div class="col-12">
        <h1 class="m-0 d-flex justify-content-start">Vrijwilligers</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12" style="display: flex; vertical-align: middle; margin: auto;">
        <p> Het lijkt misschien gemakkelijk. maar dat is het niet. Een sfeeractie vraagt voorbereiding en ook
          organisatie achteraf. Daarvoor zijn vrijwilligers nodig.

          Lijkt het je leuk om mee te helpen bij sfeeracties? Meld je dan aan als vrijwilliger. Je moet wel regelmatig
          beschikbaar zijn bij thuiswedstrijden en het ook niet vervelend vinden om er ruim voor het begin van de
          wedstrijd te zijn. Maar je krijgt wel wat terug voor je inspanning, dat een vol stadion uit zijn dak gaat.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center mt-2 mb-2">
        <a class="btn mt-4" href="/lid-worden/vrijwilliger-worden" role="button">Word nu vrijwilliger!</a>
      </div>
    </div>
  </div>
</template>
<script>
import LidWordenForm from './components/VrijwilligerForm.vue';
import SupporterComponentVue from '../../components/SupporterComponent.vue';

export default {
  components: { LidWordenForm, SupporterComponentVue }
}
</script>
<style scoped>
.btn {
  background: #FAE300;
}

h1 {
  color: #FAE300;
}

.lid p {
  color: #fff;
}
</style>
