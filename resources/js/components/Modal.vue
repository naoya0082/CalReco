<template>
    <div class="modal" v-if="isOpen">
        <div class="modal-background" @click="close">
            <div class="modal-content">
                モーダルだよ
            </div>
        </div>
    </div>
</template>
  
<script>
import { inject, ref, watch } from 'vue';

export default {
  setup() {
    const isOpen = ref(false);
    
    const open = () => {
        console.log('open function called');
        isOpen.value = true;
    }

    const close = () => {
        isOpen.value = false;
    }

    watch(isOpen, (newValue) => {
        console.log('isOpen changed:', newValue); 
    })

    const modal = inject('modal');
    modal.value = {
      open,
      close
    };

    return {
      isOpen
    }
  }
}
</script>
  
  <style>
.modal {
    /* display: none; Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 5; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}
</style>
  