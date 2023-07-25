import './bootstrap';
import { createApp, ref } from 'vue';
import Modal from './components/Modal.vue';

const app = createApp({
  components: {
    Modal
  },
  setup() {
    const modal = ref(null);
    
    const openModal = () => {
        modal.value.open();
    };

    return {
        modal,
        openModal
    }
  }
});

app.mount('#app');
