<template>
    <form @submit.prevent="loginForm" style="width: 50%; justify-content: center; margin: auto;">
        <h1>Login</h1>
        <div class="row">
            <div class="col-6">
                <label class="label">Email</label>
                <div class="control">
                    <input v-model="FormDataUser.email" type="text" placeholder="Email" />
                </div>
            </div>
            <div class="col-6">
                <label class="label">Wachtwoord</label>
                <div class="control">
                    <input v-model="FormDataUser.password" type="password" placeholder="Wachtwoord" />
                </div>
            </div>
        </div>
            <button style="justify-content: center; margin: auto;" type="submit">
            Login
        </button>
    </form>
</template>
<script>

export default{
    name: "LoginPage",
    data(){
        return{
            FormDataUser:{}
        }
    },
    methods: {
        async loginForm(){
            try {
                const response = (await this.axios.post('/v1/auth/login',this.FormDataUser)).data
                await this.authStore.setToken(response.access_token)
                this.$router.push('/dashboard');
            } catch {

            }
        }
    }


};
</script>
<style>
</style>
