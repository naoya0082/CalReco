<template>
    <div class="modal" v-if="isOpen">
        <div class="modal-background">
            <div class="modal-content">
                体重を入力してください
                <hr>
                <form method="POST" action="/home">
                    <div class="input-weight">
                        <input type="number" name="weight" id="weight" step="0.01" style="width: 70%; margin-right: 5px;">
                        <input type="submit" name="" id="" class="weight-upd-btn btn btn-primary mt-2" value="登録" @click="updateWeight">
                    </div>
                </form>
                <a href="/">あああ</a>
                <div class="close-modal" @click="close">✕</div>
            </div>
        </div>
    </div>
</template>
  
<script>
import { ref } from 'vue';

export default {
  name: "Modal",
  setup() {
    const isOpen = ref(false);
    
    const open = () => {
        isOpen.value = true;
    }

    const close = () => {
        isOpen.value = false;
    }

    const updateWeight = () => {
        let weight = document.querySelector('#weight').value;
        if(weight != '') {
            console.log(weight);
        }
    }

    return {
      isOpen,
      open,
      close,
      updateWeight
    }
  }
}
</script>
   
<style>
.modal {
    /* display: none; Hidden by default */
    /* position: fixed; Stay in place */
    z-index: 100; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    display: block
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
    position: relative;
}

.close-modal {
    border-radius: 50%;
    background-color: #fff;
    width: 25px;
    height: 25px;
    text-align: center;
    position: absolute;
    top:-10px;
    right: -13px;
    cursor: pointer;
    box-shadow: 0px 1px 5px gray;
    padding-top: 2px;
}

.input-weight {
    display: flex;
    justify-content: left;
}
</style>
  