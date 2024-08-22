import { onMounted, ref } from 'vue'
import L from 'leaflet';
import VistsList from '../lists/VistsList.vue';
import useLogin from '../auth/composables/useLogin';



export default {
    components: {
        VistsList
    },
    setup() {

        const visits = ref([])
        const markers = ref([])
        const { logout } = useLogin()

        // Obtiene las visitas del backend
        const getVisits = async () => {
            try {
                const response = await window.axios.get('/visits')
                const { data } = response
                visits.value = data.visits;
            } catch (error) {
                window.location.assign("http://localhost/visits-maps/public/")
            }
        }

        //Cargar el mapa
        const loadMaps = () => {
            var map = L.map('map').setView([40.416691, -3.700340], 1);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            // Agregar marcador en el mapa según los datos de la visita y el popup
            getVisits().then(() => {
                visits.value.forEach(visit => {

                    let marker = L.marker([visit.latitude, visit.longitude])
                        .bindPopup(`<center><b>${visit.name}</b><br>${visit.email}</center>`).addTo(map);


                    markers.value.push({
                        'marker': marker,
                        'name': visit.name,
                        'email': visit.email,
                        'id': visit.id
                    })

                })
            })
        }


        onMounted(() => {
            loadMaps();
        })
        return {
            markers,
            logout
        }

    },
}