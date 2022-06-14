<template>
    <div class="container ons-team" style="text-align: center;">
        <h1>Ons team</h1>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3" v-for="item in team">
                <div class="card">
                    <img class="card-img-top" :src="item.image" />
                    <h6 class="card-title">
                        {{ item.name }}
                    </h6>
                    {{ item.function }}
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
                { image: 'https://picsum.photos/id/110/200', name: 'Rick Zondervan', function: 'Voorzitter' },
                { image: 'https://picsum.photos/id/120/200', name: 'Richard Span', function: 'Bestuurslid' },
                { image: 'https://picsum.photos/id/180/200', name: 'Giel van Bussel', function: 'Programmeur' },
                { image: 'https://picsum.photos/id/154/200', name: 'Tim Stokkers', function: 'Hooligan' }
            ]
        }
    }
}
</script>
<style>
.card-img-top {
    height: fit-content;
}

@media screen and (max-width: 800px) {
    .ons-team .card {
        margin: 5% 10%;
    }
}
</style>