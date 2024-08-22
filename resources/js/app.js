import './bootstrap';
import { createApp } from 'vue'
import MapView from '@/components/map/MapView.vue'
import LoginView from '@/components/auth/LoginView.vue'
import '../css/styles.scss'

const app = createApp({})
//Se registran los componentes que tendrá
app.component('MapView', MapView);
app.component('LoginView', LoginView);
app.mount('#app');
