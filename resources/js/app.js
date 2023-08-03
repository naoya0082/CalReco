import './bootstrap';
import { createApp, ref } from 'vue';
import Modal from './components/Modal.vue';

const app = createApp({
  components: {
    Modal
  },
  setup() {
    const modal = ref(null);
    
    const openModal = (num) => {
        modal.value.open(num);
    };

    return {
        modal,
        openModal
    }
  }
});

app.mount('#app');
