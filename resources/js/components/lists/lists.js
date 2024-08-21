import { ref } from "vue";

export default {
    props: {
        markers: {
            type: Array,
            required: true
        }

    },

    setup() {
        const isActive = ref({})
        const openPopup = (marker) => {
            marker['marker'].openPopup();
            isActive.value = marker['id']
        }

        return {
            openPopup,
            isActive
        }

    },
}