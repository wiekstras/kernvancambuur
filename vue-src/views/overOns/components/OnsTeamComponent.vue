<template>
    <div class="ons-team">
        <div class="container">
            <h2>Ons team</h2>
            <div class="row mb-4">
                <div style="justify-content: center;margin: auto;" class="col-sm-12 col-md-8 col-lg-8">
                    <p class="mb-3">Een organisatie met ruim 125 vrijwilligers vraagt om een duidelijke structuur. Daarom heeft de
                            Kern van
                            Cambuur een bestuur en kent daarnaast een aantal commissies.</p>

                        <p class="mb-0 yellow fw-bold">Bestuur</p>

                        <p class="mb-0">
                        Het bestuur verzorgt de algehele leiding en neemt besluiten, waarbij alle bestuursleden hun
                        eigen
                        portefeuille hebben.Hieronder zie je de bestuursleden en de portefeuille die ze beheren. Er is
                        een
                        maandelijkse reguliere bestuursvergadering. Als de situatie daarom vraagt is er vaker overleg.
                        </p>

                        Mochten jullie bespreekpunten hebben voor het overleg gelieve deze dan te mailen naar
                        <b><a class="yellow" href="mailto:info@kernvancambuur.nl">info@kernvancambuur.nl</a></b> of <b><a class="yellow" href="mailto:secretaris@kernvancambuur.nl">secretaris@kernvancambuur.nl</a></b>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2" v-for="item in team">
                    <img class="card-img-top" :src="item.image" />
                    <div class="cardbox">

                        <h6 class="card-title">
                            {{ item.name }}
                        </h6>
                        <p class="text-dark">{{ item.function }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
export default {
    data() {
        return {
            team: [
                { image: './vue-src/assets/Team/iVoorzitter.jpg', name: 'Maarten van Tuinen', function: 'Voorzitter' },
                { image: './vue-src/assets/Team/secretaris.jpg', name: 'Richard Span', function: 'Secretaris en activiteiten' },
                { image: './vue-src/assets/Team/penningmeester.jpg', name: 'Gerrit Beeksma', function: 'Penningmeester en horeca' },
                { image: './vue-src/assets/Team/algBestuur2.jpg', name: 'Rick Zondervan', function: 'Algemeen bestuurslid, activiteiten' },
                { image: './vue-src/assets/Team/algBestuur.jpg', name: 'Hydo Wiersma', function: 'Algemeen bestuurslid, activiteiten' },
                { image: './vue-src/assets/Team/hr.jpg', name: 'Carla van Slooten', function: 'Personele aangelegenheden' }
            ]
        }
    }
}
</script>
<style>
.ons-team {
    padding: 35px 0px;
}

.ons-team h2 {
    margin-bottom: 18px;
    text-align: center;
    font-size: 35px;
}

.ons-team .cardbox {
    margin-top: 20px;
    padding: 10px 0px;
    background-color: #F8F8F8;
    text-align: center;
}

.card-img-top {
    height: fit-content;
}

@media screen and (max-width: 800px) {
    .ons-team .card {
        margin: 5% 10%;
    }
}
</style>