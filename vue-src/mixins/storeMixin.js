import { mapStores }            from 'pinia'
import { useAuthStore }         from '@/store/auth'

export default {
    computed: {
        ...mapStores(useAuthStore),
    },
}
