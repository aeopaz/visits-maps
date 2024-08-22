import { ref } from "vue";
import useLogin from "./composables/useLogin"
export default {

    setup() {


        const formData = ref({
            email: 'alvaro@test.com',
            password: 'password'
        })
        const message = ref(null)
        const { login } = useLogin();
        const isLoading = ref(false)


        return {
            message,
            formData,
            isLoading,

            onLogin: async () => {
                isLoading.value = true
                message.value = null
                if (formData.value.email == '' | formData.value.password == '') {
                    message.value = 'Debe ingresar su email y contraseña'
                    return
                }

                const response = await login(formData.value);
                if (response) {
                    window.location.assign("http://localhost/visits-maps/public/visits")
                } else {
                    message.value = 'Las credenciales son inválidas'

                }

                isLoading.value = false


            }
        }


    }
}