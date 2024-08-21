import './bootstrap';
import { createApp } from 'vue'
import MapView from '@/components/map/MapView.vue'

const app = createApp({})
//Se registran los componentes que tendrá
app.component('MapView', MapView);
app.mount('#app');
