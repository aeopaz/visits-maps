const useLogin = () => {

    const login = async (formData) => {
        try {
            const r = await window.axios.get('http://localhost/visits-maps/public/sanctum/csrf-cookie')
            const response = await window.axios.post('/login', formData);
            return true;
        } catch (error) {
            return false;
            console.log('Error al iniciar sesión');

        }

    }

    const logout = async () => {
        const response = await window.axios.post('/logout');
        window.location.assign("http://localhost/visits-maps/public/")
    }

    return {
        login,
        logout
    }






}

export default useLogin;