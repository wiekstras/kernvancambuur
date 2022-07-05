<template>
    <div v-for="(post,index) in posts" class="row mb-lg-4">
        <div v-if="index % 2 === 0" class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <img :src="post.image" alt="Sfeeractiefoto" class="img-fluid rounded"/>
                </div>
                <div class="col-lg-6">
                    <p class="fw-bold">{{post.created_at}}</p>
                    <h5>{{post.title}}</h5>
                    <span v-html="post.description"></span>
                </div>
            </div>
        </div>
        <div v-else class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-bold">{{post.created_at}}</p>
                    <h5>{{post.title}}</h5>
                    <span v-html="post.description"></span>
                </div>
                <div class="col-lg-6">
                    <img alt="Sfeeractiefoto" :src="post.image" class="img-fluid rounded"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        posts: {

        },
    },
    name: "DesktopTimelineComponent"
}
</script>

<style scoped>
    h5 {
        color: yellow;
    }
 p {
    color:#fff;
 }
</style>
