import {defineStore} from 'pinia'

export const useAuthStore = defineStore('auth', {
    state: () => {
        return {
            axios: null,
            token: null,
            user: null,
            initialized: false,
            teamMemberId: null,
        }
    },
    actions: {
        setAxios(axios) {
            // Initializes the store with an axios obj
            this.axios = axios
        },
        async initialize() {
            // If we are already initialized, skip
            if (this.initialized) return

            // Attempt to get and set token from localstorage
            // console.log('Logged in');
            const token = localStorage.getItem('pl-auth-token-v2')
            if (token) {
                await this.setToken(token);
            }
            this.initialized = true;
        },
        async setToken(token) {
            try {
                this.token = token
                this.axios.defaults.headers.Authorization = `Bearer ${token}`

                // Try to get the user-data and set local-storage if we succeed
                this.user = (await this.axios.get('/v1/auth/me')).data
                localStorage.setItem('pl-auth-token-v2', token);
            } catch (e) {
                // Cleanup
                this.resetToken();
                console.error('Could not initialize auth-store');
            }
        },
        resetToken() {
            delete this.axios.defaults.headers.Authorization;
            localStorage.removeItem('pl-auth-token-v2');
            this.token = null;
            this.user = null;
        },
    },
    getters: {
        getUser: (state) => state.user ?? null,
        isLoggedIn: (state) => state.user ? true : false,
    }
})
