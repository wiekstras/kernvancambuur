<template>
    <div v-for="post in posts" class="card mb-2 mt-2">
        <img :src="post.image" alt="Sfeeractiefoto" :id=index class="card-img-top"/>
        <div class="card-body">
            <p class="card-text">{{post.created_at}}</p>
            <p class="card-text">{{post.title}}</p>
            <p class="card-text">{{post.description}}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        posts: {},
    },
    name: "MobileTimelineComponent"
}
</script>

<style scoped>

</style>
