const useLogin = () => {

    const login = async (formData) => {
        try {
            const r = await window.axios.get('http://localhost/visits-maps/public/sanctum/csrf-cookie')
            const response = await window.axios.post('/login', formData);
            localStorage.setItem('userName', response.data.user.name);
            console.log(response);
            return true;
        } catch (error) {
            console.log('Error al iniciar sesión');
            return false;


        }

    }

    const logout = async () => {
        const response = await window.axios.post('/logout');
        localStorage.removeItem('userName')
        window.location.assign("http://localhost/visits-maps/public/")
    }

    return {
        login,
        logout
    }






}

export default useLogin;