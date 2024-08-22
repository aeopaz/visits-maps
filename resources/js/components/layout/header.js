import { ref } from 'vue';
import useLogin from '../auth/composables/useLogin';


export default {


    setup(){
        const { logout } = useLogin()
        const userName=ref(localStorage.getItem('userName'))

        return{
            logout,
            userName
        }
    }
}