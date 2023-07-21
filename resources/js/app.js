import './bootstrap';
import { createApp, provide, ref } from 'vue';

import Modal from './components/Modal.vue';

const app = createApp({
  components: {
    Modal
  },
  setup() {
    const modal = ref({});
    
    const openModal = () => {
   
        modal.value.open();
    };

    const closeModal = () => {
        modal.value.close();
    };

    provide('modal', modal);

    return {
        openModal,
        closeModal
    }
  }
});

app.mount('#app');